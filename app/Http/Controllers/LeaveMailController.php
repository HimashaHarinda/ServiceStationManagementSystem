<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests;
use DB;

class LeaveMailController extends Controller
{
    public function sendRequest(Request $request)
    {
        $id = $request->input('eid');
        $start_date = $request['start_date'];
        $end_date = $request['end_date'];
        $reason = $request['reason'];
        $title = "Leave Request for ";
        $content_startdate = $start_date;
        $content_enddate = $end_date;
        $content_reason = $reason;

        $emailAdd = DB::select("SELECT e2.email as manager,e1.name as employee FROM employee e1, employee e2 WHERE e1.manager = e2.eid AND e1.eid = '$id'");

        foreach ($emailAdd as $item){
            Mail::send('EmailLeave', ['title' => $title, 'content_startdate' => $content_startdate,'content_enddate' => $content_enddate,
                'content_reason' => $content_reason,'for' => $item->employee
            ], function ($message) use ($item,$title)
            {
                $message->from('autogleamservice@gmail.com', 'AutoGleam service');
                $message->subject($title.$item->employee." ".$item->employee);
                $message->to($item->manager);
            });

            return redirect()->back();
        }


    }
}
