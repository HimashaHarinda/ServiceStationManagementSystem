<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Shiftplan;

use App\Branch;

use DB;
use Illuminate\Support\Facades\Session;

class CreateShiftsController extends Controller
{
    public function loadView()
    {
    	$plans = DB::select('select * from shiftplans');

        $n=null;
    	$branches = DB::select("select * from branch where address !='$n'");

      $employees=null;

    	return view('create_shifts',compact('plans', 'branches', 'employees'));
    }



    public function addshift(Request $request)
    {
      $day = $request->input('optionsRadios');
      $time = $request->input('optionsRadios1');
      $Bname = $request->input('SelectBranch');



         $BID = DB::select("select id from branch where bname ='$Bname'");
         $id=$BID[0]->id;

        $existingrecords=DB::select("select * from shiftplans where day='$day' and Tim='$time' and BID='$id'");



        if ($existingrecords == null) {
            DB::statement("INSERT INTO shiftplans(day,Tim,BID) values('$day','$time', '$id')");
            \Session::flash('flash_message','done');
        }

        else
        {
            Session::flash('message', 'Record Exists!');
        }
              $plans = DB::select("select * from shiftplans");
              $branches = DB::select("select * from branch");
        $n=null;
        $branches = DB::select("select * from branch where address !='$n'");
 
       $employees = DB::select("select * from employee e,efficiency ef,empinplans emp,shiftplans s where e.eid=ef.employee and e.eid=emp.EmpID and emp.ShiftPlanID=s.SPID and e.Branch='$id' order by ef.Efficiency DESC");


      return view('create_shifts',compact('plans', 'branches','employees'));
    }

   
}



