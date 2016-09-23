<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Http\Requests;
use App;
use DB;

class EmployeeReports extends Controller
{
    public function getEmpPDF(){
        $employees = DB::select("select * from employee e,designation d,branch b
                        where e.designation=d.id and b.id=e.branch");
        //$pdf=PDF::loadView('AllEmployeesReport',compact('employees'));
        //return $pdf->download('employees.pdf');
        return view('AllEmployeesReport',compact('employees'));
    }

}
