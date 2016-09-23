<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Http\Requests;
use DB;

class salesController extends Controller
{
    

		public function postaddSales(Request $request)
		{
				
			//$iid = $request['iid'];
			$IitemName = $request['IitemName'];
			$Iqty = $request['Iqty'];
			$Idate = $request['Idate'];
			$Iprice = $request['Iprice'];
			$Idisc = $request['Idisc'];
			$Itotal = $request['Itotal'];


			
			$it=DB::table('item')->where('itemName',$IitemName)->value('qty');

			if($Iqty<$it)
			{  

			DB::table('sales')->insert(
					['Iitemid'=> $IitemName, 'Iqty' => $Iqty, 'Idate' => $Idate, 'Iprice' => $Iprice, 'Idisc' => $Idisc, 'Itotal' => $Itotal]);

			
			$redQty=$it - $Iqty;
			DB::statement("UPDATE item SET qty='$redQty' WHERE itemName = '$IitemName'");

			return redirect()->back();

		    }
		    else
		    {
		    	$Er="ERROR : Item $IitemName Quantity $Iqty not available,$IitemName current Quantity inhand is $it ";
		    	return $Er;
		    	
		    	}











				
		}




	public function showSales(){

			$Swidget = DB::select("select sum(Itotal) as 'tot' from sales where Idate=CURDATE()");
			$check=DB::select("select itemid,qty from item");
			$itm = DB::select("select itemName from item");
			$sales = DB::select("select * from sales");


		

			return view('Sales', compact('sales','itm','Swidget'));
		}




		






}
