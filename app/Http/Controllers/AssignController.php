<?php
	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use App\Http\Requests;
	use DB;

	
	class AssignController extends Controller
	{
		public function availableEmp()
		{
				$assigns = DB::select("SELECT * FROM employee WHERE eid IN (SELECT EmpID FROM empinplans )");
				$emps = DB::select("SELECT COUNT(*) as 'empcount' FROM employee WHERE eid IN (SELECT EmpID FROM empinplans )");
				$reqs = DB::select("SELECT COUNT(*) as 'reqcount' FROM service WHERE empnameReq != ''");

				$requests = DB::select("SELECT * FROM service WHERE empnameReq != ''");
				return view('assignments', compact('assigns','emps','requests','reqs','services'));
		}


		public function addassignment(Request $request)
		{
				$empid = $request['empid'];
				$servId = $request['servid'];
				$empname = DB::select("SELECT name FROM employee WHERE eid = '$empid'");


//				DB::table('empinplans')->insert(
//					['ShiftPlanID' => $servId, 'EmpID'=> $empid]);

				foreach($empname as $e)
				{
					$name = $e->name;
					DB::table('service')->where('service_id', $servId)->update(['employeeName' => $name]);
				}
				
				
				return redirect()->back();
		}
		
	}





?>