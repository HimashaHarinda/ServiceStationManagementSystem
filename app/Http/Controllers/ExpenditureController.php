<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use DB;

use App\Http\Requests;

class ExpenditureController extends Controller
{
    public function loadExpenses()
	{
		$purchases = DB::select("select * from addpurchase");
		$purchaseReturns = DB::select("select * from preturn");
		$salaries = DB::select("select * from employee_salary_details");
		return view('Expenditure', compact('purchases','purchaseReturns', 'salaries'));
	}

	public function getPurchasesPdf(Request $request)
	{
		$toDate = $request->input('toSalesDate');
		$fromDate = $request->input('fromSalesDate');
		$purchases = DB::select("select * from addpurchase where Pdate between '$fromDate' and '$toDate'");
		$data = ['purchases' => $purchases];
		$pdf = PDF::loadView('purchases_pdf', $data);
		return $pdf->download('purchases.pdf');
	}

	public function getPurchaseReturnsPdf(Request $request)
	{
		$toDate = $request->input('toSalesDate');
		$fromDate = $request->input('fromSalesDate');
		$purchaseReturns = DB::select("select * from preturn where PRdate between '$fromDate' and '$toDate'");
		$data = ['purchaseReturns' => $purchaseReturns];
		$pdf = PDF::loadView('purchaseReturns_pdf', $data);
		return $pdf->download('purchaseReturns.pdf');
	}

	public function getSalariesPdf(Request $request)
	{
		$toDate = $request->input('toSalesDate');
		$fromDate = $request->input('fromSalesDate');

		$salaries = DB::select("select * from employee_salary_details where salary_date between '$fromDate' and '$toDate' ");
		$data = ['salaries' => $salaries];
		$pdf = PDF::loadView('salaries_pdf', $data);
		return $pdf->download('salaries.pdf');
	}
}
