<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class InterviewController extends Controller
{
    public function scheduleInterview(Request $request){
        $name = $request['name'];
        $contact = $request['contact'];
        $position = $request['position'];
        $date = $request['date'];
        $time = $request['time'];
        if($name == ""||$name==null || $contact =="" || $contact == null || $position == "" || $position == null || $date == "" || $date == null || $time == "" || $time == null )
        {
            return 1;
        }
        DB::statement(
            "INSERT INTO interview(cand_name, contact, position, date, time)
            VALUES ('$name','$contact','$position','$date','$time')");
        return 0;
    }

    public function saveInterview(Request $request){
        $id = $request['id'];
        $date = $request['date'];
        $time = $request['time'];

        $affected = DB::update("update interview set date = '$date',time='$time' where cand_id = '$id'");
        return $affected;
    }

    public function getEmployeeDetails(Request $request){
        $id = $request['data'];
        $interviews = DB::select("select * from interview where cand_id = '$id'");
        return json_encode($interviews);
    }

    public function deleteInterview(Request $request){
        $id = $request['id'];
        DB::statement("DELETE FROM interview WHERE cand_id = '$id'");
    }
}
