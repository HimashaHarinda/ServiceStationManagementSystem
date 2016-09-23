<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use Carbon\Carbon;

use App\Shiftplan;

use App\Branch;

class AssignEmpController extends Controller
{

	 public function loadAssignEmployee()
  	{
        $n=null;
        $branches = DB::select("select * from branch where address !='$n'");
      $employees = null;
        $unassignedemployees=null;
        $employeesByShiftPlans = DB::select("select s.BID,s.day,s.Tim,count(e.EmpID) as count from shiftplans s,empinplans e where s.SPID = e.ShiftPlanID group by e.ShiftPlanID");
        //$mostEmployees=DB::select("select s.BID,s.day,s.Tim,count(e.EmpID) as count from shiftplans group by ShiftPlanID order by count(e.EmpID) asc");



        return view('AssignEmp',compact('branches','employees','employeesByShiftPlans','unassignedemployees'));



    }


    
    public function getemp(Request $request)

    {
      $Day = $request->input('selectDay');
      $Time = $request->input('selectTime');
      $Bname = $request->input('SelectBranch1');

     $BID = DB::select("select id from branch where bname='$Bname'");

     $id=$BID[0]->id;
        $type="vehicle";


        $unassignedemployees = DB::select("select * from employee where branch='$id' and service_type='$type' and designation = 5 and eid Not In (select EmpID from empinplans);");


        $employees = DB::select("select * from efficiency ef,employee E,shiftplans s,empinplans emp where ef.employee=E.eid and E.eid=emp.EmpID and s.SPID=emp.ShiftPlanID and s.day='$Day' and s.Tim !='$Time' and e.branch='$id' and e.eid not in(select e.eid from efficiency ef,employee E,shiftplans s,empinplans emp where ef.employee=E.eid and E.eid=emp.EmpID and s.SPID=emp.ShiftPlanID and s.day='$Day' and s.Tim ='$Time' and e.branch='$id')order by ef.Efficiency DESC");
        //var_dump($employees);


    //var_dump($employees);

    $plandetails = DB::select("select SPID from shiftplans where BID='$id' AND day='$Day' AND Tim='$Time'");

        $plan=$plandetails[0]->SPID;

        $employeesByShiftPlans = DB::select("select s.BID,s.day,s.Tim,count(e.EmpID) as count from shiftplans s,empinplans e where s.SPID = e.ShiftPlanID group by e.ShiftPlanID");
        $n=null;
        $branches = DB::select("select * from branch where address !='$n'");
      
  		return view('AssignEmp',compact('branches','employees','unassignedemployees','employeesByShiftPlans','plan'));
  	}

     public function addEmployeeShift(Request $request){
        $empid=$request['eid'];
         //var_dump(empId);
        $shiftid=$request['pid'];
        DB::statement("INSERT INTO empinplans values('$shiftid','$empid')");

         $exist = DB::select("select * from efficiency where employee='$empid'");

         $Month = Carbon::now()->startOfMonth()->subMonth()->toDateString();
         $ef=0;

         if ($exist == null)
         {
             DB::statement("INSERT INTO efficiency values('$empid','$Month', '$ef')");
         }
    }


}
