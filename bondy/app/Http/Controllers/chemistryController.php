<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chemistry;
use App\Http\Controllers\Controller;

class chemistryController extends Controller
{

     protected $chemistry;


    public function __construct(chemistry $chemistry)
    {
        $this->chemistry = $chemistry;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chemistries = chemistry::all();
        return view('chemistry.chemistry', compact('chemistries'));

        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        return view('chemistry.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'question' => 'required|unique:chemistries|max:10000',
        'dapanA' => 'required',
        'dapanB' => 'required',
        'dapanC' => 'required',
        'dapanD' => 'required',
        'dung' => 'required',
        ]);
        $chemistries = $this->chemistry->createchemistry($request->all());

        return redirect()->route('chemistry.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chemistry = chemistry::find($id);
        return view('chemistry.edit', compact('chemistry'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $chemistry = chemistry::find($id);
        $chemistry->question = $request->question;
         $chemistry->dapanA = $request->dapanA;
          $chemistry->dapanB = $request->dapanB;
           $chemistry->dapanC = $request->dapanC;
            $chemistry->dapanD = $request->dapanD;
             $chemistry->dung = $request->dung;
              $chemistry->role = $request->role;
        $chemistry ->save();
        return redirect()->route('chemistry.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    public function destroy($id)
    {
        $a = chemistry::find($id);
        $a->delete();
        return redirect()->route('chemistry.index');
    }
}