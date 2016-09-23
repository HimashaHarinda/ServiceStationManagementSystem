<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use Carbon\Carbon;

class ReplaceController extends Controller
{
  




  	public function loadReplaceEmployee()
  	{

        $unavailableEmployees = null;

        $carbon_today= Carbon::today()->format('Y-m-d');

        $unavailableshiftplans = (DB::select("select distinct s.SPID from employee_leave l,empinplans e,shiftplans s where l.employee=e.EmpID and e.ShiftPlanID = s.SPID and l.approved = 1 and l.start_date >= '$carbon_today' and l.leave_id not in (select leaveid from replacedemployees)"));


        $pid=null;

        $reassignableemployees =DB::select( "select distinct r.ID,ef.Efficiency,l.end_date,e.name,r.ID from replacedemployees r,employee_leave l,employee e,efficiency ef where r.taken=false and e.eid=r.ReplacedEmployee and e.eid=l.employee and e.eid=ef.employee and l.leave_id =r.leaveid and l.end_date ='$carbon_today' and approved=1 order by ef.Efficiency DESC");




        $replaceableEmployees=null;


        return view('replace_employee',compact('unavailableshiftplans','unavailableEmployees','efficiencylist','replaceableEmployees','pid','reassignableemployees'));
  	}


    public function replace(Request $request){
      $sp = $request->input('SelectShift');

        preg_match_all('!\d+!', $sp, $plan);

        $pid = implode(' ', $plan[0]);



        $carbon_today= Carbon::today()->format('Y-m-d');



      $unavailableEmployees = DB::select("select * from employee e,employee_leave l,efficiency ef where e.eid=ef.employee and e.eid=l.employee and start_date >= '$carbon_today' and l.leave_id not in(select leaveid from replacedemployees) order by ef.Efficiency DESC");




        $unavailableshiftplans = (DB::select("select distinct s.SPID from employee_leave l,empinplans e,shiftplans s where l.employee=e.EmpID and e.ShiftPlanID = s.SPID and l.approved = 1 and l.start_date >= '$carbon_today' and l.leave_id not in (select leaveid from replacedemployees)"));

        $efficiencylist = null;

        $replaceableEmployees=null;

        $reassignableemployees =DB::select( "select * from replacedemployees r,employee_leave l,employee e,efficiency ef where e.eid=r.ReplacedEmployee and  r.taken=false and e.eid=l.employee and e.eid=ef.employee and l.end_date<='$carbon_today' and approved=1 order by ef.Efficiency DESC");

        return view('replace_employee',compact('unavailableshiftplans','unavailableEmployees','efficiencylist','pid','replaceableEmployees','reassignableemployees'));
    }

    public function getReplaceableEmpDetails(Request $request)
    {
        $leaveid=$_POST['submit'];
        $planid=$_POST['planid'];

        $empid=DB::select("select employee from employee_leave where leave_id='$leaveid'");
        $emp=$empid[0]->employee;

        $Day =DB::select("select Day from shiftplans where SPID='$planid'");
        $Time =DB::select("select Tim from shiftplans where SPID='$planid'");
        $BranchID =DB::select("select BID from shiftplans where SPID='$planid'");

        $Day1=$Day[0]->Day;
        $Time1=$Time[0]->Tim;
        $BranchID1=$BranchID[0]->BID;





        $carbon_today= Carbon::today()->format('Y-m-d');

        $unavailableEmployees = DB::select("select * from employee e,employee_leave l,efficiency ef where e.eid=ef.employee and e.eid=l.employee and start_date >= '$carbon_today' and l.leave_id not in(select leaveid from replacedemployees);");
        $e=null;
        $unavailableshiftplans = (DB::select("select distinct s.SPID from employee_leave l,empinplans e,shiftplans s where l.employee=e.EmpID and e.ShiftPlanID = s.SPID and l.approved = 1 and l.start_date >= '$carbon_today' and l.leave_id not in (select leaveid from replacedemployees)"));
        $replaceableEmployees = DB::select("select  * from employee e,empinplans em,efficiency ef,shiftplans s where e.eid=em.EmpID and e.eid=ef.employee and em.ShiftPlanID=s.SPID  and s.Day='$Day1' and s.Tim != '$Time1' and s.BID='$BranchID1' and e.eid not in(select DISTINCT emp.EmpID from empinplans emp,shiftplans s,employee e where e.eid=emp.EmpID and emp.ShiftPlanID=s.SPID and s.Day='$Day1' and s.Tim = '$Time1' and s.BID='$BranchID1');");

        $efficiencylist=null;
        $pid=$planid;
        $reassignableemployees =DB::select( "select * from replacedemployees r,employee_leave l,employee e,efficiency ef where  r.taken=false and e.eid=r.ReplacedEmployee and e.eid=l.employee and e.eid=ef.employee and l.end_date='$carbon_today' and approved=1");

        return view('replace_employee',compact('unavailableshiftplans','unavailableEmployees','efficiencylist','pid','replaceableEmployees','emp','leaveid','reassignableemployees'));
    }

    public function UpdateShift(Request $request)
    {
        $empid=$request['eid'];
        $planid=$request['pid'];
        $replacedid=$request['Reid'];
        $leaveid=$request['lid'];

        $end = DB::select("select end_date from employee_leave where leave_id='$leaveid'");


        $deletedRecord1 = DB::statement("DELETE FROM empinplans WHERE EmpID = '$replacedid' and ShiftPlanID='$planid'");
        DB::statement("INSERT INTO empinplans values('$planid','$empid')");

         DB::statement("INSERT INTO ReplacedEmployees(REplacedEmployee,AssignedEmployee,leaveid,shift) VALUES('$replacedid','$empid','$leaveid','$planid')");

    }

    public function ReEnterShift(Request $request)
    {
        $rid=$request['rid'];

        $reassigndetails=DB::select("select * from replacedemployees where ID='$rid'");

        $reassignableID = $reassigndetails[0]->ReplacedEmployee;
        $removableID = $reassigndetails[0]->AssignedEmployee;
        $shiftplan = $reassigndetails[0]->shift;

        $taken=true;


        DB::statement("INSERT INTO empinplans values('$shiftplan','$reassignableID')");
        $affected = DB::update("UPDATE `replacedemployees` SET `taken`='$taken' where `ID`='$rid'");


    }


    
}