<?php

namespace App\Http\Controllers;

use App\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $id = Auth::id();
        if(isset($id)){
            $history = new History;
            $history->id_user = $request->userId;
            $history->dap_an_dung = $request->dung;
            $history->so_cau_lam = $request->scl;
            $history->monhoc = $request->monhoc;
            $history->so_cau_chua_lam = $request->so_cau_chua_lam;
            $history->save();
            $mon = $request->monhoc;
           
            $hai = Session::get('hey');
            $dapt = session::get('dapt');
          //dd($hai);
            $a = [];
            foreach ($dapt as $key => $value) {
                $a = $value;
            }
            //$hai = session()->forget('hey');
            return view('vatlys.dapanly', compact('hai','a','mon'));

        }else{
            echo "Ban chua dn";
        }
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
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function show(History $history)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function edit(History $history)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, History $history)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function destroy(History $history)
    {
        //
    }
}
