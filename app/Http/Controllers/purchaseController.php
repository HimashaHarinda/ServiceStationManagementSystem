<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Http\Requests;
use DB;

class purchaseController extends Controller
{
         public function postPurchaseForm(Request $request)
	{


			//$pid = $request['pid'];
			$PitemName = $request['PitemName'];
			$Psupplier = $request['Psupplier'];
			$Pqty = $request['Pqty'];
			$Pdate = $request['Pdate'];
			$Pprice = $request['Pprice'];
			$Pdisc = $request['Pdisc'];
			$Ptotal = $request['Ptotal'];



		


			DB::table('addPurchase')->insert(
					['Pitemid'=> $PitemName, 'Psupplier' => $Psupplier, 'Pqty' => $Pqty, 'Pdate' => $Pdate, 'Pprice' => $Pprice, 'Pdisc' => $Pdisc, 'Ptotal' => $Ptotal]);

			DB::statement("UPDATE item SET unitvalue='$Pprice' WHERE itemName = '$PitemName'");


//'pid' => $pid,
				
			$it=DB::table('item')->where('itemName',$PitemName)->value('qty');
			$addQty=$it+$Pqty;
			DB::statement("UPDATE item SET qty='$addQty' WHERE itemName = '$PitemName'");

//			$it=DB::select("select qty from item where itemid= '$Pitemid'");
/*			foreach ($it as $value) {
				$addQty = $value;
			}
			endforeach
			 $a = $addQty+ $Pqty;
			
			DB::statement("UPDATE item SET qty='$addQty' WHERE itemid = '$Pitemid'");

*/

			return redirect()->back();

	}

		public function showPurchase(){

			$Pwidget = DB::select("select sum(Ptotal) as 'tot' from addPurchase where Pdate=CURDATE()");
            $Soption = DB::select("select Sname from supplier");
            $it = DB::select("select itemName from item");
			$purchases = DB::select("select * from addPurchase");
			return view('Purchases', compact('purchases','Soption','it','Pwidget'));
		}






}
