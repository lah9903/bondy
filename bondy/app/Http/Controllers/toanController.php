<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\math;
use Session;
class toanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         session()->forget('hey');
          session()->forget('dapt');
       $toans1 = math::all()->where('role','1')->random(35)->toArray();
         $toans = math::all()->where('role','2')->random(15)->toArray();
          $test = array_merge_recursive($toans,$toans1);
        Session::push('hey', $test);
        return view('toans.index', compact('test'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
 public function ketquatoan(Request $request){

        $userId = Auth::id();

        $a = $request->toArray();
      $b = count($a) -1;
      $c = 50 -$b;
      Session::push('dapt', $a);
       $i =  0;
        $table = DB::table('maths')->where('role',1)->select('id','dung')->get();
         $arr = [];
        foreach ($table as $key => $value) {
          $arr[$value->id] = $value->dung;
        }
       foreach ($a as $key => $val) {
       
        if ($key != "_token") {
           if($val == $arr[$key]){

             $i ++;
            
           }
        }
         $t= round($i*10/50,2);
       }
      return view('toans.ketqua',compact('i','b','c','userId','t'));
    }
}
