<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Http\Requests;
use DB;
class addNewItemController extends Controller
{
       public function postaddNew(Request $request)
	{	
			

			
			//$itemid = $request['itemid'];
			$itemName = $request['itemName'];
			$Irate = $request['Irate'];
			$rol = $request['rol'];
			$unitvalue = $request['unitvalue'];
			//$tot = $request['tot'];
		


			DB::table('item')->insert(
					['itemName' => $itemName, 'Irate' => $Irate, 'rol' => $rol, 'unitvalue' => $unitvalue,]);
			




				return redirect()->back();

	}

	public function showItems(){

			$items = DB::select("select itemid,qty,unitvalue from item");
			foreach ($items as $it) {
				$b=$it->itemid;
				$q=$it->qty;
				$a=$it->unitvalue;
				$total=$q*$a;

				DB::statement("UPDATE item SET tot='$total' where itemid=$b");

			}

			$iday = DB::select("select itemid,Irate,qty from item");
			foreach ($iday as $day) {
				$id=$day->itemid;
				$r=$day->Irate;
				$q=$day->qty;

				$vg=$q/$r;
				$avg=intval($vg);

				DB::statement("UPDATE item SET daysleft='$avg' where itemid=$id");

			}

			$Iwidget = DB::select("select sum(tot) as 'tot' from item");
			$chckROL=DB::select("select itemid, itemName,qty,rol from item where qty<=rol");
		

		//$chckROL=DB::select("select itemid from item where qty<=rol");
       // return json_encode($suppliers);


			$items = DB::select("select * from item");
			return view('Inventory', compact('items','chckROL','Iwidget'));
		}






		    public function deleteItem(Request $request){
        $itemid = $request['itemid'];
        $deletedRecord = DB::statement("DELETE FROM item WHERE itemid = '$itemid'");
    }




    public function getItem(Request $request){
        $itemid = $request['itemid'];
        $IT = DB::select("select * from item where itemid = '$itemid'");
        return json_encode($IT);
    }



   // updateSupplier

        public function updateItem(Request $request){

        $itemid = $request['itemid'];
        $itemName = $request['itemName'];
        $Irate = $request['Irate'];
        $rol = $request['rol'];
        $qty = $request['qty'];
        $unitvalue = $request['unitvalue'];
        $tot = $request['tot'];
        $daysleft = $request['daysleft'];
       

        $affected = DB::update("update item set itemName='$itemName', Irate='$Irate',rol='$rol',unitvalue='$unitvalue' where itemid = '$itemid'");
        //return $affected;
    }









}





/*public function showItems(){

			$items = DB::select("select itemid,qty,unitvalue from item");
			foreach ($items as $it) {
				$b=$it->itemid;
				$q=$it->qty;
				$a=$it->unitvalue;
				$total=$q*$a;

				DB::statement("UPDATE item SET tot='$total' where itemid=$b");

			}

			$items = DB::select("select * from item");
			return view('Inventory', compact('items'));
		}
}*/
