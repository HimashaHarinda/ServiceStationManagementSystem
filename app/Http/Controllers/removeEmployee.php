<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;


class removeEmployee extends Controller
{
    public $plan;

    public function getEmpDetails(Request $request)

    {
        $Day = $request->input('selectDay1');
        $Time = $request->input('selectTime1');
        $Bname = $request->input('SelectBranch');


        $BID = DB::select("select id from branch where bname='$Bname'");

        $id = $BID[0]->id;

        //var_dump($Day);

        //var_dump($employees);

        $plan = DB::select("select SPID from shiftplans where BID='$id' AND day='$Day' AND Tim='$Time'");

        //var_dump($plan);

        $planid = $plan[0]->SPID;







        $employees = DB::select("select * from employee e,efficiency ef where e.eid=ef.employee and eid IN (select empid from empinplans where ShiftPlanID='$planid') order by ef.Efficiency DESC");

        $employeesByShiftPlans = DB::select("select s.BID,s.day,s.Tim,count(e.EmpID) as count from shiftplans s,empinplans e where s.SPID = e.ShiftPlanID group by e.ShiftPlanID");




        $n=null;
        $branches = DB::select("select * from branch where address !='$n'");

        return view('RemoveEmployee',compact('branches','employees','planid','employeesByShiftPlans'));
    }

    public function loadRemoveEmployee()
    {
        $employees=null;
        $n=null;
        $branches = DB::select("select * from branch where address !='$n'");
        $employeesByShiftPlans = DB::select("select s.BID,s.day,s.Tim,count(e.EmpID) as count from shiftplans s,empinplans e where s.SPID = e.ShiftPlanID group by e.ShiftPlanID");
        return view('RemoveEmployee',compact('branches','employees','employeesByShiftPlans'));
    }
    public function removeEmployeeRecord(Request $request){


        $eid = $request['eid'];
        $pid = $request['pid'];
        var_dump($pid);
        $deletedRecord = DB::statement("DELETE FROM empinplans WHERE EmpID = '$eid'and ShiftPlanID='$pid'");
    }
}
