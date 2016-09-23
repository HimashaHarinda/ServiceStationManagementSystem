<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class LoanController extends Controller
{
    public function showLoans(){
        $loans = DB::select("select * from loan_scheme");
        $all = DB::select("select * from employee_loan el,loan_scheme l , employee e
              where el.scheme = l.scheme_id and e.eid = el.employee");
        $ongoing = $this->showOngoingLoans();
        $pending = $this->showPendingLoans();
        $approved = $this->showApprovedLoans();
        return view('EmployeeLoans',compact('loans','ongoing','pending','all','approved'));
    }

    public function saveLoanScheme(Request $request){
        $title = $request['title'];
        $description = $request['description'];
        $amount = $request['amount'];
        $interest = $request['interest'];
        $installments = $request['installments'];

        DB::statement(
            "INSERT INTO loan_scheme(l_name, description, amount, interest,installments)
            VALUES ('$title','$description','$amount','$interest','$installments')");
        return $title;
    }

    public function addLoan(Request $request){
        $lid = $request['lid'];
        $eid = $request['eid'];
        $name = $request['name'];
        $designation = $request['designation'];
        $contact = $request['contact'];
        $address = $request['address'];

        DB::statement(
            "INSERT INTO employee_loan(employee, scheme, guarantor_name, g_contact, g_designation, g_address)
            VALUES ('$eid','$lid','$name','$contact','$designation','$address')");

    }

    private function showOngoingLoans(){
        $loans = DB::select("select * from employee_loan el, employee e,loan_scheme l
                      where e.eid = el.employee
                       and
                      el.scheme = l.scheme_id AND 
                      el.status=1 and
                      ongoing=1
                  ");
        return $loans;
    }

    private function showPendingLoans(){
        $loans = DB::select("select * from employee_loan el, employee e,loan_scheme l
                      where e.eid = el.employee and
                      el.scheme = l.scheme_id AND 
                      el.status=0
                  ");
        return $loans;
    }

    public function approveLoan(Request $request){
        $loanId = $request['id'];
        $affected = DB::update("update employee_loan set status = 1 where loan_id = '$loanId'");
//        return $affected;
    }

    public function rejectLoan(Request $request){
        $loanId = $request['id'];
        $affected = DB::update("update employee_loan set status = 2 where loan_id = '$loanId'");
        //echo $affected;
        return $affected;
    }

    private function showApprovedLoans (){
        $loans = DB::select("select * from employee_loan el, employee e,loan_scheme l
                      where e.eid = el.employee and
                      el.scheme = l.scheme_id AND 
                      el.status=1 and 
                      ongoing=0
                  ");
        return $loans;
    }

    public function deleteLoanScheme(Request $request){
        $loan_scheme_id = $request['id'];
        DB::statement("DELETE FROM loan_scheme WHERE scheme_id = '$loan_scheme_id'");
    }

    public function updateDate(Request $request){
        $id = $request['id'];
        $start = $affected = $request['start'];
        $end = $affected = $request['end'];
        $affected = DB::update("update employee_loan set ongoing = 1,start_date = '$start',end_date='$end' where loan_id = '$id'");
        return $affected;
    }

    public function checkEligibility(Request $request){
        $id = $request['eid'];
        $employees = DB::select("select emp_type from employee e
                      where e.eid = '$id'");
        foreach ($employees as $employee){
            if($employee->emp_type == "Contract"){
                return response()->view(500);
            }
        }
    }
}
