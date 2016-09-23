<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Carbon\Carbon;

class efficiencyController extends Controller
{
	public function loadview()
	{
		$efficiency=null;
        $employees=null;
        $Month = Carbon::now()->startOfMonth()->subMonth()->toDateString();
        $x =DB::select("select (month) from efficiency_log where month >= '$Month'");

        /*if ($y != null) {
            $x=1;
        }

        else{
           $x=null;
        }*/
        $n=null;
		$branches = DB::select("select * from branch where address != '$n'");

		return view('EfficiencyAnalysis',compact('branches','efficiency','x'));
	}

    public function calculateEfficiency(Request $request)
    {
        $firstDayofPreviousMonth = Carbon::now()->startOfMonth()->subMonth();
        $lastDayofPreviousMonth = Carbon::now()->subMonth()->endOfMonth();

        $Month = Carbon::now()->startOfMonth()->subMonth()->toDateString();

        $firstDayofPreviousPreviousMonth = Carbon::now()->startOfMonth()->subMonth()->subMonth();
        $lastDayofPrevousPreviousMonth = Carbon::now()->subMonth()->subMonth()->endOfMonth();

        $today = $carbon_today= Carbon::today()->format('Y-m-d');

        $firstDayofthisMonth= Carbon::today()->format('Y-m-01');

        $u = DB::select("select distinct e.leave_id,e.employee,e.start_date,end_date,count(*) from employee_leave e,employee m where e.employee=m.eid and m.designation = 5 and ((e.start_date >= '$firstDayofPreviousMonth' and e.start_date <= '$lastDayofPreviousMonth') or (e.start_date >= '$firstDayofPreviousPreviousMonth' and e.start_date <= '$lastDayofPrevousPreviousMonth' and e.end_date >= '$firstDayofPreviousMonth')) and e.employee group by e.employee having count(*) = 1 ");

        $multiplerecords = DB::select("select distinct e.leave_id,e.employee,count(*) from employee_leave e,employee m where e.employee=m.eid and m.designation = 5 and ((e.start_date >= '$firstDayofPreviousMonth' and e.start_date <= '$lastDayofPreviousMonth' ) or (e.start_date >= '$firstDayofPreviousPreviousMonth' and e.start_date <= '$lastDayofPrevousPreviousMonth' and e.end_date >= '$firstDayofPreviousMonth' ))  group by e.employee having count(*) >= 2 ");


        $employees = DB::select("select distinct e.eid from employee e,empinplans emp where e.eid=emp.EmpID and e.designation = 5 and  eid not in (select employee from employee_leave);");
        foreach ($employees as $employee)
        {
            $eid=$employee->eid;

            DB::statement("INSERT INTO efficiency_log(employee,month,efficiency) values('$eid','$Month', '100')");

            $exist=DB::select("select * from efficiency where employee='$eid'");

            if ($exist==null)
            {
                DB::statement("INSERT INTO efficiency(employee,month,efficiency) values('$eid','$Month', '100')");
            }

            else
            {
                $affected = DB::update("UPDATE `efficiency` SET `month`='$Month',`Efficiency`='100' WHERE `employee`='$eid'");
            }
        }

        $mark=0;
        if ($multiplerecords != null) {
            $mark = 1;
            $n = array();
            $count = 0;
            foreach ($multiplerecords as $setofrecords) {

                $c = $setofrecords->employee;

                $leaveinfo = DB::select("select distinct employee,start_date,end_date from employee_leave where employee = $c and ((start_date >= '$firstDayofPreviousMonth' and start_date <= '$lastDayofPreviousMonth') or (start_date >= '$firstDayofPreviousPreviousMonth' and start_date <= '$lastDayofPrevousPreviousMonth' and end_date >= '$firstDayofPreviousMonth'  ))");

                foreach ($leaveinfo as $record) {

                    $z = $record->start_date;
                    $f = $record->end_date;
                    $carbon = new Carbon($z);
                    $carbon1 = new Carbon($f);

                    $plan = DB::select("select distinct EmpID,ShiftPlanID from EmpInPlans where EmpID='$c'");
                    $p = $plan[0]->ShiftPlanID;
                    $date = DB::select("select day from shiftplans where SPID='$p'");
                    $day = $date[0]->day;
                    if ($carbon >= $firstDayofPreviousMonth) {
                        if ($carbon1 <= $lastDayofPreviousMonth) {
                            $h = $carbon->diffInDays($carbon1) + 1;
                        } else {
                            $h = $carbon->diffInDays($lastDayofPreviousMonth) + 1;
                        }
                    } elseif ($carbon >= $firstDayofPreviousPreviousMonth) {
                        $h = $firstDayofPreviousMonth->diffInDays($carbon1) + 1;
                    }


                    //var_dump($h);
                    $n[$count] = $h;
                    $count++;
                }

                $p = array_sum($n);


                //$day=$record->day;
                if ($day == "week-day") {
                    $denominator = 20;
                } elseif ($day == "week-end") {
                    $denominator = 8;
                }

                $e = $p / $denominator * 100;

                $v = 100 - $e;
                $vy = round($v, 2, PHP_ROUND_HALF_UP);

                if ($vy < 0)
                {
                    $vy=0;
                }

                DB::statement("INSERT INTO efficiency_log(employee,month,efficiency) values('$c','$Month', '$vy')");


                $exist = DB::select("select * from efficiency where employee='$c'");

                if ($exist == null) {
                    DB::statement("INSERT INTO efficiency(employee,month,efficiency) values('$c','$Month', '$vy')");
                } else {
                    $affected = DB::update("UPDATE `efficiency` SET `month`='$Month',`Efficiency`='$vy' WHERE `employee`='$c'");
                }

                $count=0;
            }
        }

        if ($mark == 0)
        {
            $c = -1;
        }

            foreach ($u as $y) {
                $c1 = $y->employee;
                if ($c != $c1) {
                    $z = $y->start_date;
                    $f = $y->end_date;
                    $carbon = new Carbon($z);
                    $carbon1 = new Carbon($f);
                    if ($carbon >= $firstDayofPreviousMonth ){
                        if ($carbon1 <= $lastDayofPreviousMonth)
                        {
                            $h = $carbon->diffInDays($carbon1)+1;
                        }

                        else
                        {
                            $h = $carbon->diffInDays($lastDayofPreviousMonth)+1;
                        }
                    }

                    elseif ($carbon >= $firstDayofPreviousPreviousMonth)
                    {
                            $h = $firstDayofPreviousMonth->diffInDays($carbon1)+1;
                    }


                    $shift = DB::select("select day from shiftplans s,empinplans e where e.EmpID = '$c1' and s.SPID=e.ShiftPlanID");
                    $day = $shift[0]->day;
                    if ($day == "week-day") {
                        $denominator = 20;
                    } elseif ($day == "week-end") {
                        $denominator = 8;
                    }
                    $n = $h / $denominator * 100;
                    $v = 100 - $n;
                    // var_dump($n);


                    $vy = round($v, 2, PHP_ROUND_HALF_UP);

                    DB::statement("INSERT INTO efficiency_log(employee,month,efficiency) values('$c1','$Month', '$vy')");

                    $exist = DB::select("select * from efficiency where employee='$c1'");

                    if ($exist == null) {
                        DB::statement("INSERT INTO efficiency(employee,month,efficiency) values('$c1','$Month', '$vy')");
                    } else {
                        $affected = DB::update("UPDATE `efficiency` SET `month`='$Month',`Efficiency`='$vy' WHERE `employee`='$c1'");
                    }


                }








            }

        $n = null;
        $branches = DB::select("select * from branch where address != '$n'");
        $efficiency = null;
        $x = 1;
        return view('EfficiencyAnalysis', compact('branches', 'efficiency', 'x'));
    }

    public function getEfficiency(Request $request)
    {
        $branch = $request->input('selectBranch2');

        $BID = DB::select("select id from branch where bname='$branch'");
        $id=$BID[0]->id;

        $efficiency = DB::select("select distinct E.eid,E.name,E.contact,ef.Efficiency,s.day from efficiency ef,employee E,empinplans emp,shiftplans s where e.eid=ef.employee and emp.EmpID = e.eid and emp.ShiftPlanID = s.SPID and ef.employee=E.eid and E.eid IN (select eid from employee where branch='$id') order by ef.Efficiency DESC");

        $n=null;

        $branches = DB::select("select * from branch where address != '$n'");

        $x=1;

        return view('EfficiencyAnalysis',compact('branches','efficiency','x'));


    }



}
