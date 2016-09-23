<?php
	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use App\Http\Requests;
	use DB;

	class LogController extends Controller
	{
		
		public function showlog()
		{
			$logs = DB::select("select * from service where status = 'finished'");


			return view('logs', compact('logs','today'));

        
		}
	}
?>