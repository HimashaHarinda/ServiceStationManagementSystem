<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use Carbon\Carbon;

class OverWorkedEmpController extends Controller
{
    public function loadOverWorkedEmployees()
    {
        $type="vehicle";
        $Month = Carbon::now()->startOfMonth()->subMonth()->toDateString();
        $firstDayofThisMonth = Carbon::now()->startOfMonth();

        $OverWorkedEmployees=DB::select("select distinct e.eid,e.branch,e.name,e.contact,e.address from employee e,empinplans emp where e.service_type = '$type' and e.designation = 5 and e.eid = emp.EmpID and e.eid not in (select DISTINCT el.employee from employee_leave el where (el.start_date >= '$Month' and el.end_date < '$firstDayofThisMonth') and el.approved=1);");
        return view('OverWorkedEmployees',compact('OverWorkedEmployees','OverWorkedEmployees1'));
    }
}
