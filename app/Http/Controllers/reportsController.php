<?php
	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use App\Http\Requests;
	use DB;

	class reportsController extends Controller
	{
		
		public function showpaymentlog()
		{
			$payments = DB::select("select * from servicepayment");


			return view('reports', compact('payments'));

        
		}
	}
?>