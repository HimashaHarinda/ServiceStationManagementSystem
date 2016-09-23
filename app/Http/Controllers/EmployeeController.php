<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class EmployeeController extends Controller
{
    public function showAllEmployees(){
        $employees = DB::select("select * from employee e,designation d
                        where e.designation=d.id");
        $branches = DB::select("select * from branch");
        $designations = DB::select("select * from designation");
        $managers = $this->getManagers();
        return view('EmployeeInformation',compact('employees','branches','managers','designations'));
    }

    public function getAllEmployeesForInfo(){
        $employees = DB::select("select e.eid,e.address,e.nic,e.name,e.contact,e.joined_date,e.service_type,e.gender,e.branch,e.manager,d.title from employee e,designation d
                        where e.designation=d.id group by e.eid");
        return response()->json(['data'=>$employees]);
    }

    public function showAddEmployee(){
        $branches = DB::select("select * from branch");
        $designations = DB::select("select * from designation");
        $interviews = $this->getAllInterviews();
        $managers = $this->getManagers();
        return view('AddEmployee',compact('branches','designations','managers','interviews'));

    }

    public function addEmployee(Request $request){
        $name = $request->input('name');
        $nic =  $request->input('nic');
        $address = $request->input('address');
        $dob = $request->input('dob');
        $contact = $request->input('phone');
        $gender = $request->input('optionsRadios');
        $date = $request->input('date');
        $service = $request->input('optionsRadios2');
        $designation = $request->input('designation');
        $branch = $request->input('branch');
        $manager = $request->input('manager');

        DB::statement(
            "INSERT INTO employee(address, nic, name, contact, dob, joined_date, service_type, gender, manager, branch, designation)
            VALUES ('$address','$nic','$name','$contact','$dob','$date','$service','$gender','$manager','$branch','$designation')");

        return redirect('/AddEmployee');
    }

    public function updateEmployeeDetails(Request $request){
        $id = $request['id'];
        $ename = $request['ename'];
        $gender = $request['gender'];
        $contact = $request['contact'];
        $dob = $request['dob'];
        $address = $request['address'];
        $dateJoined = $request['dateJoined'];
        $designation= $request['designation'];
        $branch= $request['branch'];
        $manager= $request['manager'];

        $affected = DB::update("UPDATE `employee` SET `address`='$address',`name`='$ename',`contact`='$contact',`dob`='$dob',`joined_date`='$dateJoined',`gender`='$gender',`branch`='$branch',`designation`='$designation',`manager`='$manager' WHERE `eid`='$id'");
//        return $affected;
    }

    private function getManagers(){
        $managers = DB::select("select * from employee where designation = 1");
        return $managers;
    }

    public function getEmployeeDetails(Request $request){
        $id = $request['id'];
        $employees = DB::select("select * from employee where eid = '$id'");
        return json_encode($employees);
    }

    public function deleteEmployeeRecord(Request $request){
        $eid = $request['eid'];
        $deletedRecord = DB::statement("DELETE FROM employee WHERE eid = '$eid'");
    }

    private function getAllInterviews(){
        $today = date("Y-m-d");
        $interviews = DB::select("select * from interview where date > '$today'");
        return $interviews;
    }
}
