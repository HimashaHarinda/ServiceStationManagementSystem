<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class EmpManController extends Controller
{
    public function loadView()
    {
    	$employees = DB::select("select * from employee where service_type='janitorial'");
    	return view('EmployeeManagement', compact('employees'));
    }

    public function getemp(Request $request)

    {
        $id = $request->input('emp_id');
        $name = $request->input('name');
        $address = $request->input('address');
        $NIC = $request->input('NIC');
        $phone = $request->input('phone');
        $dob = $request->input('dob');
        $joined_date = $request->input('jDate');
        $gender = $request->input('gender');
        $designation = $request->input('pos');
        $service_type = "janitorial";
        $emp_type = "Contract";

        if ($id == 0) {
            DB::statement("INSERT INTO employee(name,address,NIC,contact,dob,joined_date,service_type,gender,designation,emp_type)
     		 VALUES ('$name','$address','$NIC','$phone','$dob','$joined_date','$service_type','$gender','$designation','$emp_type')");

            $employees = DB::select("select * from employee");
            return view('EmployeeManagement', compact('employees'));
        } else {
            DB::statement("UPDATE employee SET name = '$name', address = '$address',contact = '$phone',designation ='$designation' WHERE  eid = '$id'");
            
            $employees = DB::select("select * from employee");
            return view('EmployeeManagement', compact('employees'));
        }
  	}

  	public function deleteEmployee(Request $request)
  	{
        $eid = $request['eid'];
        DB::statement("DELETE FROM employee WHERE eid = '$eid'");
    }


    public function getEmployeeInfo(Request $request)
    {
        $eid = $request['eid'];
        $getEmp = DB::select("SELECT * FROM employee WHERE eid = $eid");
        //var_dump($getEmp);
        //dd($getEmp);
        //return $getEmp;
        return response()->json($getEmp);
    }
}
