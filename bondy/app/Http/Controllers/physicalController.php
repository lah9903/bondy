<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\physical;
use App\Http\Controllers\Controller;

class physicalController extends Controller
{

     protected $physical;


    public function __construct(physical $physical)
    {
        $this->physical = $physical;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $physicals = physical::all();
        return view('physical.physical', compact('physicals'));

        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        return view('physical.create');
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
        'question' => 'required|unique:physicals|max:10000',
        'dapanA' => 'required',
        'dapanB' => 'required',
        'dapanC' => 'required',
        'dapanD' => 'required',
        'dung' => 'required',
        ]);
        $physicals = $this->physical->createphysical($request->all());

        return redirect()->route('physical.index');
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
        $physical = physical::find($id);
        return view('physical.edit', compact('physical'));
        
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
        $physical = physical::find($id);
        $physical->question = $request->question;
         $physical->dapanA = $request->dapanA;
          $physical->dapanB = $request->dapanB;
           $physical->dapanC = $request->dapanC;
            $physical->dapanD = $request->dapanD;
             $physical->dung = $request->dung;
              $physical->role = $request->role;
        $physical ->save();
        return redirect()->route('physical.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    public function destroy($id)
    {
        $a = physical::find($id);
        $a->delete();
        return redirect()->route('physical.index');
    }
}