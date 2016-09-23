<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\customer;

use DB;

class deficitControl extends Controller
{
    
	public function getCustomerN(){
    	
        
		$customers = DB::select("select name,cus_id from customer");
         $def = DB::select("select deficitID,cusid,amount from deficit");

    	return view('CustomerDeficit',compact('customers','def'));

    }

     public function addDeficit(Request $request){

        $id = $request->input('cusname');
        $deficit = $request->input('defi'); 

        DB::statement(
            "INSERT INTO deficit(cusid,amount) VALUES ('$id','$deficit')");

         \Session::flash('flash_message','done');
        return redirect('CustomerDeficit');
}

public function setDeficit(Request $request)
        {
            $id = $request['id'];
            $deficita = $request['deficita'];
            $deficitm = $request['deficitm'];
            
            $amt = DB::select("select amount from deficit where cusid='".$id."'");

            $amount=$amt[0]->amount+$deficita-$deficitm;

            $affected = DB::update("UPDATE `deficit` SET `amount`='".$amount."' WHERE `cusid`='".$id."'");

        }
    

    public function filldeficit(Request $request){
            $id = $request['id'];
            $customers = DB::select("select * from deficit where cusid = '$id'");

            return json_encode($customers);
            
        }

    public function fillCustomer(Request $request){
        $id = $request['id'];
        $customers = DB::select("select * from customer where cus_id = '$id'");
       
        return json_encode($customers);

    }


}
