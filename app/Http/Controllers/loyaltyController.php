<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\loyaltyrequest;

use App\Http\Requests;

use DB;

use App\customer;


class loyaltyController extends Controller
{
   public function getCustomerName(){
    	
        
		$customers = \DB::select("select name,cus_id from customer");
        $data= \DB::select("select * from loyalty inner join customer on loyalty.cusid=customer.cus_id");
       
    	return view('CustomerLoyalty',compact('customers','data'));
    }

    public function addloyalty(loyaltyrequest $request){
             
        // $name = $request->input('cusname');
        $id = $request->input('cusname');
        $fromm = $request->input('from');
        $to = $request->input('to');
       	$discount = $request->input('discount');

        DB::statement(
            "INSERT INTO loyalty(cusid,discount,fromDate,toDate)
            VALUES ('$id','$discount','$fromm','$to')");

        \Session::flash('flash_message','done');
        return redirect('CustomerLoyalty');
    }

}
