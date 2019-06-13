<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\math;
use App\Http\Controllers\Controller;

class mathController extends Controller
{

     protected $math;


    public function __construct(math $math)
    {
        $this->math = $math;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maths = $this->math->getList();
        return view('math.math', compact('maths'));

        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        return view('math.createmath');
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
        'question' => 'required|unique:maths|max:1000',
        'dapanA' => 'required',
        'dapanB' => 'required',
        'dapanC' => 'required',
        'dapanD' => 'required',
        'dung' => 'required',
        ]);
        $math = $this->math->createMath($request->all());
        return redirect()->route('math.index');
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
        $math = math::find($id);
        return view('math.editmath', compact('math'));
        
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
        $math = math::find($id);
        $math->question = $request->question;
         $math->dapanA = $request->dapanA;
          $math->dapanB = $request->dapanB;
           $math->dapanC = $request->dapanC;
            $math->dapanD = $request->dapanD;
             $math->dung = $request->dung;
              $math->role = $request->role;
        $math ->save();
        return redirect()->route('math.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    public function destroy($id)
    {
        $a = math::find($id);
        $a->delete();
        return redirect()->route('math.index');
    }
}