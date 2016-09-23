<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use App\customer;

use Illuminate\Support\Facades\Mail;

use App\Http\Requests\RegisterCustomerRequest;

use Illuminate\Http\Request;

use DB;


class register extends Controller
{
    public function viewRegisterCustomer(){

        $cusid= DB::select("SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA ='ssms' AND TABLE_NAME ='customer';");

        $def=DB::select("select * from customer c , vehicle v where c.cus_id = v.customer group by c.cus_id");

    	return view('RegisterCustomer',compact('cusid','def'));
    }


       public function addCustomer(RegisterCustomerRequest $request){
             
        $name = $request->input('CusName');
        $address = $request->input('CusAdd');
        $tele = $request->input('cusTele');
        $email = $request->input('CusEmail');
        $nic = $request->input('CusNIC');
        $pw = $request->input('CusPW');
        $vType = $request->input('vType');
        $vMake = $request->input('vMake');
        $vModel = $request->input('vModel');
        $vnumbp = $request->input('vnumbP');
        DB::beginTransaction();

        $data=DB::statement(
            "INSERT INTO customer(name,address,contactNo,mail,nic,pwd)
            VALUES ('$name','$address','$tele','$email','$nic','$pw')");

        $id=DB::getPdo()->lastInsertId();
        echo $id;
        var_dump($id);

       DB::statement(
            "INSERT INTO vehicle(model,type,number_plate,make,customer)
            VALUES ('$vModel','$vType','$vnumbp','$vMake','$id')");

       DB::commit();

       \Session::flash('flash_message','done');

           $to = $request->input('CusEmail');

           $content = $request->input('CusPW');

           //$emailAdd=DB::table('supplier')->where('Sname',$to)->value('Semail');

           $x="Your ID is : $id";
           $y="Your Password is: $content";

           Mail::send('EmailPO', ['title' => $x, 'content' => $y], function ($message) use ($to)
           {

               $message->from('autogleamservice@gmail.com', 'AutoGleam service');
               $message->subject("Thank You for registering with Auto Gleam");
               $message->to($to);
           });






           return redirect('RegisterCustomer');
        
        }

        public function fillCustomer(Request $request){
            $id = $request['id'];
            $customers = DB::select("select * from customer where cus_id = '$id'");
            //$vehicle = DB::select("select * from vehicle where customer='$id'");

            return json_encode($customers);
            
        }

        public function fillVehicle(Request $request){
            $id = $request['id'];
            $vehicle = DB::select("select * from vehicle where customer = '$id'");
           

            return json_encode($vehicle);
            
        }


        public function updateCustomerDetails(Request $request)
        {
             $id = $request['id'];
             $name = $request['name'];
             $mail = $request['mail'];
             $nic = $request['nic'];
             $address = $request['address'];
             $tele = $request['tele'];

             $affected = DB::update("UPDATE `customer` SET `name`='$name',`mail`='$mail',`contactNo`='$tele',`address`='$address',`nic`='$nic' WHERE `cus_id`='$id'");

        }

         public function updateVehicleDetails(Request $request)
        {
             $id = $request['id'];
             $make = $request['make'];
             $plate = $request['plate'];
             $model = $request['model'];
             
             $updates = DB::update("UPDATE `vehicle` SET `model`='$model',`make`='$make',`number_plate`='$plate' WHERE `customer`='$id'");

         

        }

        public function deleteCustomer(Request $request){
        $id = $request['id'];
        $deletedRecord = DB::statement("DELETE FROM customer WHERE cus_id = '$id'");
        $deletedVehicle = DB::statement("DELETE FROM vehicle WHERE id = '$id'");

    }

 }

        