<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\customer;

use App\Http\Requests\RegisterCustomerRequest;

use DB;

class cusreportcontroller extends Controller
{

    public function Customerreport(){

        $cusid= \DB::select("SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA ='ssms' AND TABLE_NAME ='customer';");
        $customer= \DB::select("select * from customer");
        $vehicle= \DB::select("select * from vehicle");


        return view('customerReport',compact('customer','cusid','vehicle'));
    }

    public function LoyaltyReport(){


        $customers = \DB::select("select name,cus_id from customer");
        $data= \DB::select("select * from loyalty inner join customer on loyalty.cusid=customer.cus_id");

        return view('loyaltyReport',compact('customers','data'));
    }

    public function DeficitReport(){

        $def=DB::select("select deficit.*,customer.name from deficit inner join customer on deficit.cusid = customer.cus_id");

        return view('deficitReport',compact('customers','def'));
    }

}
