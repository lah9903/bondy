<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use Illuminate\Support\Facades\Auth;
use App\History;
use App\historykhoi;
// use App\Http\Controllers\Admin\User;
use App\Http\Controllers\Controller;
class HomeController extends Controller
{
    //protected $History;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');
        // $this->history = $history;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
		$idu = user::where('id',$id)->select('role')->get();
            foreach ($idu as $key => $value) {
               
                   $do = $value["role"];
            }
           //dd($do);
            if($do ==1){
                    $users = User::all();
   
        return view('users.tables',compact('users'));
             
            };
        $users = User::all();
    
       
        $histories =  History::where('id_user',$id)->groupby()->orderby('created_at','DESC')->get();
         $historikhoi =  historykhoi::where('id_user',$id)->groupby()->orderby('created_at','DESC')->get();
        // dd($historikhoi);
        return view('home', compact('histories','historikhoi'));
        //return view('home', compact('toans'));
       
    
    }
}
