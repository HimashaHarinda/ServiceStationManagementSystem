<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use PDF;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class InventoryPDFController extends Controller
{
    public function getPurchasePDF(Request $request){

        $From = $request['Pfrom'];
        $To = $request['Pto'];

        $totrep = DB::select("select sum(Ptotal) as 'Ptot' from addPurchase WHERE Pdate BETWEEN  '$From' AND '$To' ");
    	$purchases = DB::select("select * from addPurchase WHERE Pdate BETWEEN  '$From' AND '$To' ");

    	//$pdf=PDF::loadView('PDFpurchase', compact('purchases','From','To','totrep'));
    	//return $pdf->stream('PDFpurchase.pdf');
        return view('Reportpurchase',compact('purchases','From','To','totrep'));

    }



    public function getSalesPDF(Request $request){

        $From = $request['Sfrom'];
        $To = $request['Sto'];

        $totrep = DB::select("select sum(Itotal) as 'Itot' from sales WHERE Idate BETWEEN  '$From' AND '$To' ");
    	$sales = DB::select("select * from sales WHERE Idate BETWEEN  '$From' AND '$To' ");

    	//$pdf=PDF::loadView('PDFsales', compact('sales','From','To','totrep'));
    	//return $pdf->stream('PDFsales.pdf');

        return view('Reportsales',compact('sales','From','To','totrep'));

    }








}
