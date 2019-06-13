<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\enghlish;
use App\Http\Controllers\Controller;

class EnghlishController extends Controller
{

     protected $enghlish;


    public function __construct(enghlish $enghlish)
    {
        $this->enghlish = $enghlish;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enghlishes = enghlish::all();
        return view('enghlish.enghlish', compact('enghlishes'));

        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        return view('enghlish.create');
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
        'question' => 'required|max:1000',
        'dapanA' => 'required',
        'dapanB' => 'required',
        'dapanC' => 'required',
        'dapanD' => 'required',
        'dung' => 'required',
        ]);
        $enghlishes = $this->enghlish->createenghlish($request->all());

        return redirect()->route('enghlish.index');
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
        $enghlish = enghlish::find($id);
        return view('enghlish.edit', compact('enghlish'));
        
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
        $enghlish = enghlish::find($id);
        $enghlish->question = $request->question;
         $enghlish->dapanA = $request->dapanA;
          $enghlish->dapanB = $request->dapanB;
           $enghlish->dapanC = $request->dapanC;
            $enghlish->dapanD = $request->dapanD;
             $enghlish->dung = $request->dung;
              $enghlish->role = $request->role;
        $enghlish ->save();
        return redirect()->route('enghlish.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    public function destroy($id)
    {
        $a = enghlish::find($id);
        $a->delete();
        return redirect()->route('enghlish.index');
    }
}