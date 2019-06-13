<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use PDF;
use Session;
class PdfGenerateController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function pdfview(Request $request)
    {
         $hai = Session::get('hey');
           // dd($hai);
           view()->share('hai',$hai);
        if($request->has('download')){
        	// Set extra option
        	 PDF::setOptions([ 'defaultFont' => 'initial']);
        	// pass view file
            $pdf = PDF::loadView('pdfview');
            // download pdf
            return $pdf->download('pdfview.pdf');
        }
        return view('pdfview', compact('hai'));
    }
}