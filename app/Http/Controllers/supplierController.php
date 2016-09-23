<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Http\Requests;
use DB;

class supplierController extends Controller
{
   			public function postaddSupplier(Request $request)
		{

           // $ssid = $request['ssid'];
			$Sname = $request['Sname'];
			$Semail = $request['Semail'];
			$Stel = $request['Stel'];
			$Saddress = $request['Saddress'];
           
			
	//	DB::statement("INSERT INTO supplier VALUES('$Sname','$Semail','$Stel','$Saddress') ");

       
                        DB::table('supplier')->insert(
                    ['Sname'=> $Sname, 'Semail' => $Semail, 'Stel' => $Stel, 'Saddress' => $Saddress]);
                

	


				return redirect()->back();
		}

		public function showSupplier(){
            
            $Supwidget = DB::select("select COUNT(Sname) as 'number' from supplier");
			$suppliers = DB::select("select * from supplier");
			return view('Supplier', compact('suppliers','Supwidget'));
		}



    public function deleteSupplier(Request $request){
        $ssid = $request['ssid'];
        $deletedRecord = DB::statement("DELETE FROM supplier WHERE ssid = '$ssid'");
    }






    public function getSupplier(Request $request){
        $ssid = $request['ssid'];
        $suppliers = DB::select("select * from supplier where ssid = '$ssid'");
        return json_encode($suppliers);
    }



   // updateSupplier

        public function updateSupplier(Request $request){

        $ssid = $request['ssid'];
        $Sname = $request['Sname'];
        $Semail = $request['Semail'];
        $Stel = $request['Stel'];
        $Saddress = $request['Saddress'];
       

        $affected = DB::update("update supplier set Saddress='$Saddress',Sname='$Sname',Semail='$Semail',Stel='$Stel' where ssid = '$ssid'");
        //return $affected;
    }





}
