<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\biological;
use App\Http\Controllers\Controller;

class biologicalController extends Controller
{

     protected $biological;


    public function __construct(biological $biological)
    {
        $this->biological = $biological;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biologicals = biological::all();
        return view('biological.biological', compact('biologicals'));

        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        return view('biological.create');
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
        'question' => 'required|unique:biologicals|max:1000',
        'dapanA' => 'required',
        'dapanB' => 'required',
        'dapanC' => 'required',
        'dapanD' => 'required',
        'dung' => 'required',
        ]);
        $biologicals = $this->biological->createbiological($request->all());

        return redirect()->route('biological.index');
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
        $biological = biological::find($id);
        return view('biological.edit', compact('biological'));
        
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
        $biological = biological::find($id);
        $biological->question = $request->question;
         $biological->dapanA = $request->dapanA;
          $biological->dapanB = $request->dapanB;
           $biological->dapanC = $request->dapanC;
            $biological->dapanD = $request->dapanD;
             $biological->dung = $request->dung;
              $biological->role = $request->role;
        $biological ->save();
        return redirect()->route('biological.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    public function destroy($id)
    {
        $a = biological::find($id);
        $a->delete();
        return redirect()->route('biological.index');
    }
}