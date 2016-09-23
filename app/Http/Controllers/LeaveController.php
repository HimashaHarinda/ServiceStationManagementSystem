<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class LeaveController extends Controller
{
    public function showPendingLeave(){
        $leaves = DB::select("select * from employee_leave el,employee e,leave_type l,branch b
                      where e.eid = el.employee AND
                      el.leave_type = l.id AND 
                      el.approved=0 AND
                      b.id = e.branch 
                  ");

        $allLeaves = DB::select("select * from employee_leave el,employee e,leave_type l,branch b
                      where e.eid = el.employee and
                      el.leave_type = l.id AND
                      b.id = e.branch 
                  ");

        $leaveTypes = DB::select("SELECT l.id as lid, l.leave_type, d.title FROM leave_type l,designation d 
                                  WHERE l.designation = d.id
                                  ORDER BY l.designation");

        $leaveCount = DB::select("SELECT * FROM leave_type l,designation d 
                                  WHERE l.designation = d.id
                                  ORDER BY l.designation");

        $designations = DB::select("select * from designation");

        return view('leave',compact('leaves','allLeaves','designations','leaveTypes','leaveCount'));


    }

    public function fillEmployeeLeave(Request $request){
        $name = $request['id'];

        $employees = DB::select("
                        SELECT e.eid, e.name, l.leave_type,  SUM(el.l_count) as 'test1', no_of_leaves AS 'test2'
                        FROM leave_type l,employee e, employee_leave el
                        WHERE e.designation = l.designation AND e.eid = el.employee AND el.leave_type=l.id AND EXTRACT(YEAR FROM el.start_date)=YEAR(CURDATE()) AND  e.name='$name'
                        GROUP BY el.leave_type");

        return json_encode($employees);
    }

    public function approveLeave(Request $request){
        $leaveId = $request['leaveId'];
        $affected = DB::update("update employee_leave set approved = 1 where leave_id = '$leaveId'");
        return $affected;
    }

    public function rejectLeave(Request $request){
        $leaveId = $request['leaveId'];
        $affected = DB::update("update employee_leave set approved = 2 where leave_id = '$leaveId'");
        return $affected;
    }

    public function saveLeaveInfo(Request $request){
        $title = $request['title'];
        $emp_type = $request['emp_type'];
        $designation = $request['designation'];
        $number = $request['number'];

        DB::statement(
            "INSERT INTO leave_type(leave_type, emp_type, designation, no_of_leaves)
            VALUES ('$title','$emp_type','$designation','$number')");

    }

    public function recordLeave(Request $request){
        $eid = $request['eid'];
        $leave_type = $request['leave_type'];
        $start_date = $request['start_date'];
        $end_date = $request['end_date'];
        $reason = $request['reason'];
        $diff=date_diff(date_create($start_date),date_create($end_date));
        $int = (int) $diff->format("%a");

        $employees = DB::select("
                        SELECT SUM(el.l_count) as test,l.no_of_leaves FROM leave_type l,employee_leave el WHERE l.id=el.leave_type AND el.leave_type='$leave_type'");

        foreach($employees as $employee){
            if($employee->test <= $employee->no_of_leaves){
                if($int==0){
                    $int = $int+1;
                }
                DB::statement(
                    "INSERT INTO employee_leave(leave_type, employee, start_date, end_date, reason,l_count)
                     VALUES ('$leave_type','$eid','$start_date','$end_date','$reason',$int)");
                app('App\Http\Controllers\LeaveMailController')->sendRequest($request);
            }
            else{
                return Response::json(['error' => 'Error msg'], 404);
            }
        }

    }

}
