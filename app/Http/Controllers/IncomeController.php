<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use DB;

use App\Http\Requests;

class IncomeController extends Controller
{
    public function loadIncome()
	{
		$sales = DB::select("select * from sales");
		$janOrders = DB::select("select * from janorder_payments");
		$services = DB::select("select * from servicepayment");
		return view('Income', compact('sales','janOrders','services'));
	}
//pdf
	public function getJanitorialPdf()
	{
		
		
		$janOrders = DB::select("select * from janorder_payments");
		$data = ['janOrders' => $janOrders];
		$pdf = PDF::loadView('janitorial_pdf', $data);
		return $pdf->download('janitorial.pdf');


	}

	public function getSalesPdf(Request $request)
	{
		$toDate = $request->input('toSalesDate');
		$fromDate = $request->input('fromSalesDate');
	

		$sales = DB::select("select * from sales where Idate between '$fromDate' and '$toDate'");
		$data = ['sales' => $sales];
		$pdf = PDF::loadView('sales_pdf', $data);
		return $pdf->download('sales.pdf');
	}

	public function getServicePdf(Request $request)
	{
		$toDate = $request->input('toSalesDate');
		$fromDate = $request->input('fromSalesDate');
	

		$services = DB::select("select * from servicepayment where paidDate between '$fromDate' and '$toDate'");
		$data = ['services' => $services];
		$pdf = PDF::loadView('services_pdf', $data);
		return $pdf->download('services.pdf');
	}


}
