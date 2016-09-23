<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class PayrollController extends Controller
{
    public function showPayrollInformation(Request $request){
        $designations = DB::select("select * from designation");
        return view('payroll',compact('designations'));
    }

    public function getPaySlip(Request $request){
        $id = $request['emp_id'];
        $yearmonth = $request['month'];
        $text = explode("-", $yearmonth);
        $month = $text[1];
        $year = $text[0];

        $salaries = DB::select("SELECT * FROM employee_salary_details WHERE empId = '$id' AND EXTRACT(YEAR FROM salary_date)='$year' AND EXTRACT(MONTH FROM salary_date)='$month'");
        return view('PaySlip',compact('salaries','id','year','month'));
    }

    public function addSalary(Request $request){
        $id = $request['designation'];
        $basic = $request['basic'];
        $allowance = $request['allowance'];
        $affected = DB::statement("update designation set basic = $basic,allowance = $allowance 
                    where id = '$id'");

    }
//employee contribution
    public function calculateEPF_8($empId){
        foreach ($this->getEmployeeBasicSalaryDetails() as $item) {
            if ($item->eid == $empId){
                $epf8 = ($item->basic)*0.08;
                break;
            }
        }
        return $epf8;
    }
    //employer contribution
    public function calculateEPF_12($empId){
        foreach ($this->getEmployeeBasicSalaryDetails() as $item) {
            if ($item->eid == $empId){
                $epf12 = ($item->basic)*0.12;
                break;
            }
        }
        return $epf12;
    }
    //employer contribution
    public function calculateETF_3($empId){
        foreach ($this->getEmployeeBasicSalaryDetails() as $item) {
            if ($item->eid == $empId){
                $etf3 = ($item->basic)*0.03;
                break;
            }
        }
        return $etf3;
    }

    //total salary without loan deductions and attendence deductions
//    public function calculateNetSalary($empId='JE001'){
//        $epf8 = $this->calculateEPF_8($empId);
//        $epf12 = $this->calculateEPF_12($empId);
//        $etf3 = $this->calculateETF_3($empId);
//        foreach ($this->getEmployeeBasicSalaryDetails() as $item) {
//            if ($item->eid == $empId){
//                $basic = $item->basic;
//                $allowance = $item->allowance;
//                break;
//            }
//        }
//        //epf12 should go in to another table each month
//        return $basic+$allowance-$epf8-$etf3;
//    }

//    public function calculateMonthlyEpfEtfReport(){
//        $totalEpf8 = 0;
//        $totalEpf12 = 0;
//        $totalEtf3 = 0;
//        foreach ($this->getEmployeeBasicSalaryDetails() as $item) {
//            $totalEpf8 = $totalEpf8 + $this->calculateEPF_8($item->eid);
//            $totalEpf12 = $totalEpf12 + $this->calculateEPF_12($item->eid);
//            $totalEtf3 = $totalEtf3 + $this->calculateETF_3($item->eid);
//        }
//        $epfEtfArr = array("totalEtf3"=>$totalEtf3,"totalEpf8"=>$totalEpf8,"totalEpf12"=>$totalEpf12);
//
//        return json_encode($epfEtfArr);
//    }

    //method to get loan deductions if available
    public function getLoanDeductions($empId){
        $loan_details = DB::select("select e.eid,e.name,el.loan_id,ls.l_name,ls.amount,ls.interest,ls.installments,(ls.amount/ls.installments) as monthly,el.start_date,el.end_date,el.status,el.paid_for,el.ongoing
                                from employee e,employee_loan el,loan_scheme ls
                                where e.eid=$empId and el.scheme=ls.scheme_id and el.ongoing=1 and el.employee=e.eid");
        if (empty($loan_details)){
            return 0;
        } else{
            return $loan_details;
        }
    }


//    payroll calculations
//    public function
    public function getEmployeeBasicSalaryDetails(){
        $salary_details = DB::select("select * from employee_salary_details where YEAR(salary_date)=YEAR(CURDATE()) and MONTH(salary_date)=MONTH(CURDATE())");
        echo count($salary_details);
        $employee = DB::select("select * from employee");
        echo count($employee);
        if(count($salary_details)==0 || (count($employee)==count($salary_details))){
            $salary = DB::select("SELECT e.eid, e.name, d.title, d.basic, d.allowance
                                FROM employee e, designation d
                                WHERE d.id = e.designation");
        }else if(count($employee)!=count($salary_details)){
            $salary = DB::select("SELECT e.eid, e.name, d.title, d.basic, d.allowance
                                    FROM employee e, designation d
                                    WHERE d.id = e.designation AND e.eid NOT IN (SELECT e.eid
                                                                                 FROM employee e, designation d, employee_salary_details esd
                                                                                 WHERE d.id = e.designation
                                                                                 AND esd.empId = e.eid) OR e.eid IN ((SELECT e.eid
                                                                    FROM employee e, designation d, employee_salary_details esd
                                                                    WHERE d.id = e.designation
                                                                    AND esd.empId = e.eid
                                                                    AND esd.salary_date
                                                                    BETWEEN DATE_FORMAT( NOW( ) - INTERVAL 1 
                                                                    MONTH ,  '%Y-%m-01 00:00:00' ) 
                                                                    AND DATE_FORMAT( LAST_DAY( NOW( ) - INTERVAL 1 
                                                                    MONTH ) ,  '%Y-%m-%d 23:59:59' ))) group by e.eid");
        }
        else {
            $salary = DB::select("SELECT e.eid, e.name, d.title, d.basic, d.allowance
                                FROM employee e, designation d
                                WHERE d.id = e.designation AND e.eid IN (SELECT e.eid
                                FROM employee e, designation d, employee_salary_details esd
                                WHERE d.id = e.designation
                                AND esd.empId = e.eid
                                AND esd.salary_date
                                BETWEEN DATE_FORMAT( NOW( ) - INTERVAL 1
                                MONTH ,  '%Y-%m-01 00:00:00' )
                                AND DATE_FORMAT( LAST_DAY( NOW( ) - INTERVAL 1
                                MONTH ) ,  '%Y-%m-%d 23:59:59' ))");
        }
        return $salary;
    }

    public function getEmployeeMonthlySalaryReport(){

        $employee = DB::select("select * from employee");
        $salary_details = DB::select("select * from employee_salary_details where YEAR(salary_date)=YEAR(CURDATE()) and MONTH(salary_date)=MONTH(CURDATE())");
        if(empty($salary_details) || (count($employee) != count($salary_details))){
            //if salary details are not available for the current month it should be calculated first
            foreach ($this->getEmployeeBasicSalaryDetails() as $item) {
                $empId = $item->eid;
                $name = $item->name;
                $basic = $item->basic;
                $allowance = $item->allowance;
                $etf3 = $this->calculateETF_3($item->eid);
                $epf8 = $this->calculateEPF_8($item->eid);
                $epf12 = $this->calculateEPF_12($item->eid);
                $loan_deduction = 0;
                $loans = $this->getLoanDeductions($empId);
                if($loans != 0) {
                    foreach ($loans as $item2) {
                        $loan_id = $item2->loan_id;
                        $loan_deduction = $loan_deduction + $item2->monthly;
                        $affected = DB::statement("update employee_loan set paid_for = (paid_for+1) where loan_id = '$loan_id' and employee = '$empId'");
                    }
                }
                $netSalary = $basic+$allowance-$epf8-$etf3-$loan_deduction;
                $affected = DB::statement("insert into employee_salary_details
                            (`empId`, `name`, `basic`, `etf3`, `epf8`, `epf12`, `allowance`, `loanDeduction`, `netSalary`,`salary_date`)
                                  values('$empId','$name',$basic,$etf3,$epf8,$epf12,$allowance,$loan_deduction,$netSalary,CURDATE())");
            }
            $salary_details_updated = DB::select("select * from employee_salary_details where YEAR(salary_date)=YEAR(CURDATE()) and MONTH(salary_date)=MONTH(CURDATE())");
            $salaryArray = array();

            if(count($salary_details_updated)>0) {
                foreach ($salary_details_updated as $item) {
                    $empId = $item->empId;
                    $name = $item->name;
                    $basic = $item->basic;
                    $allowance = $item->allowance;
                    $etf3 = $item->etf3;
                    $epf8 = $item->epf8;
                    $epf12 = $item->epf12;
                    $loan_deduction = $item->loanDeduction;
                    $netSalary = $item->netSalary;

                    $tempArray = array("empId" => $empId, "name" => $name, "basic" => number_format((double)$basic, 2, '.', ''), "etf3" => number_format((double)$etf3, 2, '.', ''), "epf8" => number_format((double)$epf8, 2, '.', ''), "epf12" => number_format((double)$epf12, 2, '.', ''), "netSalary" => number_format((double)$netSalary, 2, '.', ''), "loanDeduction" => number_format((double)$loan_deduction, 2, '.', ''), "allowance" => number_format((double)$allowance, 2, '.', ''));
                    array_push($salaryArray, $tempArray);
                }

            }
            return response()->json(['data'=>$salaryArray]);
        } else{
            $salary_details_updated = DB::select("select * from employee_salary_details where YEAR(salary_date)=YEAR(CURDATE()) and MONTH(salary_date)=MONTH(CURDATE())");
            $salaryArray = array();
//            echo "\nsal ".count($salary_details_updated)."\n";
            if(count($salary_details_updated)>0) {
                foreach ($salary_details_updated as $item) {
                    $empId = $item->empId;
                    $name = $item->name;
                    $basic = $item->basic;
                    $allowance = $item->allowance;
                    $etf3 = $item->etf3;
                    $epf8 = $item->epf8;
                    $epf12 = $item->epf12;
                    $loan_deduction = $item->loanDeduction;
                    $netSalary = $item->netSalary;

                    $tempArray = array("empId" => $empId, "name" => $name, "basic" => number_format((double)$basic, 2, '.', ''), "etf3" => number_format((double)$etf3, 2, '.', ''), "epf8" => number_format((double)$epf8, 2, '.', ''), "epf12" => number_format((double)$epf12, 2, '.', ''), "netSalary" => number_format((double)$netSalary, 2, '.', ''), "loanDeduction" => number_format((double)$loan_deduction, 2, '.', ''), "allowance" => number_format((double)$allowance, 2, '.', ''));
                    array_push($salaryArray, $tempArray);
                }

            }
            return response()->json(['data'=>$salaryArray]);
        }

    }
}
