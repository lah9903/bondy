<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\biological;
use App\historykhoi;
use App\physical;
use App\chemistry;
use App\math;

class khoiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( request $request)
    {
         session()->forget('mon1');
        session()->forget('mon2');
       session()->forget('mon3');
       session()->forget('khoi');
        $mon2 = physical::all()->where('role','1')->random(40);
        $mon1 = math::all()->random(50);
         $mon3 = Chemistry::all()->random(40);
        Session::push('mon1', $mon1);
        Session::push('mon2', $mon2);
        Session::push('mon3', $mon3);
         $m1 = "Toán Học";
        $m2 = "Vật Lý";
        $m3 = "Hóa Học";
        $khoi = "Khối A";
        session::push('khoi',$khoi);
        return view('khoia.index', compact('mon1','mon2','mon3','m1','m2','m3'));
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
   
    public function dapanhoa(Request $request){

        $userId = Auth::id();
       
        $a = $request->toArray();
      //  dd(count($a['toan']));
         if($a['vatly']){
      $bly = count($a['vatly']);
      $cly = 40 -$bly;
      Session::push('dapmon2', $a['vatly']);
       $ily =  0;
        $table = DB::table('physicals')->select('id','dung')->get();
         $arr = [];
        foreach ($table as $key => $value) {
          $arr[$value->id] = $value->dung;
        }
       foreach ($a['vatly'] as $key => $val) {
       
        if ($key != "_token") {
           if($val == $arr[$key]){

             $ily ++;
            
           }
        }
        
       }
   }
    if($a['toan']){
      $btoan = count($a['toan']);
      $ctoan = 50 -$btoan;
      Session::push('dapmon1', $a['toan']);
       $itoan =  0;
        $table = DB::table('maths')->select('id','dung')->get();
         $arr = [];
        foreach ($table as $key => $value) {
          $arr[$value->id] = $value->dung;
        }
       foreach ($a['toan'] as $key => $val) {
       
        if ($key != "_token") {
           if($val == $arr[$key]){

             $itoan ++;
            
           }
        }
        
       }
   }
    if($a['hoa']){
      $bhoa = count($a['hoa']);
      $choa = 40 -$bhoa;
      Session::push('dapmon3', $a['hoa']);
       $ihoa =  0;
        $table = DB::table('Chemistries')->select('id','dung')->get();
         $arr = [];
        foreach ($table as $key => $value) {
          $arr[$value->id] = $value->dung;
        }
       foreach ($a['hoa'] as $key => $val) {
       
        if ($key != "_token") {
           if($val == $arr[$key]){

             $ihoa ++;
            
           }
        }
        
       }
   }
  $khoi = session::get('khoi');
 
  foreach ($khoi as $key => $value) {
    $khoit = $value;
      # code...
  }
  // dd($khoit);
    $t1= round($itoan*10/50,2);
     $t2= round($ily*10/40,2);
      $t3= round($ihoa*10/40,2);
       return view('khoia.ketqua',compact('khoit','ily','itoan','ihoa','bly','btoan','bhoa','cly','ctoan','choa','userId','t1','t2','t3'));
    }
    public function dapan(Request $request){
$id = Auth::id();
//dd($request);
        if(isset($id)){
            $historykhoi = new historykhoi;
            $historykhoi->id_user = $request->userId;
            $historykhoi->mon1 = $request->mon1;
            
            $historykhoi->diem1 = $request->diem1;
            $historykhoi->diem2 = $request->diem2;
            $historykhoi->diem3 = $request->diem3;
            $historykhoi->save();}
        $mon1 = Session::get('mon1');
        $mon2 = Session::get('mon2');
        $mon3 = Session::get('mon3');
        $dapmon1 = Session::get('dapmon1');
        $dapmon2 = Session::get('dapmon2');
        $dapmon3 = Session::get('dapmon3');
        $a1 = [];
            foreach ($dapmon1 as $key => $value) {
                $a1 = $value;
            }
        $a2 = [];
            foreach ($dapmon2 as $key => $value) {
                $a2 = $value;
            }
        $a3 = [];
            foreach ($dapmon3 as $key => $value) {
                $a3 = $value;
            }
            // dd($a3);
        return view('khoia.dapan',compact('a1','a2','a3','mon1','mon2','mon3'));
    }
    public function khoib( request $request)
    {
         session()->forget('mon1');
        session()->forget('mon2');
       session()->forget('mon3');
       session()->forget('khoi');
        $mon2 = chemistry::all()->where('role','1')->random(40);
        $mon1 = math::all()->random(50);
         $mon3 = biological::all()->random(40);
        Session::push('mon1', $mon1);
        Session::push('mon2', $mon2);
        Session::push('mon3', $mon3);
        $m1 = "Toán Học";
        $m2 = "Hóa Học";
        $m3 = "Sinh Học";
        $khoi = "Khối B";
        session::push('khoi',$khoi);
        return view('khoia.index', compact('mon1','mon2','mon3','m1','m2','m3'));
    }
}
