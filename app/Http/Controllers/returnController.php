<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Http\Requests;
use DB;

class returnController extends Controller
{
    
			public function postaddPr(Request $request)
		{
				
			//$prid = $request['prid'];
			$PRpid = $request['PRpid'];
			$PRdate = $request['PRdate'];
			$PRqty = $request['PRqty'];
			//$PRprice = $request['PRprice'];
			$PRtotal = $request['PRtotal'];


			$purqty=DB::table('addpurchase')->where('pid',$PRpid)->value('Pqty');

			$id=DB::table('addpurchase')->where('pid',$PRpid)->value('Pitemid');
            $qit=DB::table('item')->where('itemName',$id)->value('qty');

            $it=0+$qit;
         

		if($purqty<$PRqty)
		{  
			$Er="ERROR : PID $PRpid quantity amount is $purqty, Please Check Quantity and Re-enter";
		    return $Er;
		}

		else if($it<$PRqty)
		{
			$Er="ERROR : Quantity in Hand is $it, Please Check quantity and Re-enter ";
		    return $Er;
		}

		else
			{

			$price=DB::table('addpurchase')->where('pid',$PRpid)->value('Pprice');
			$PRtotal=$price*$PRqty;

			DB::table('preturn')->insert(
					['PRpid'=> $PRpid, 'PRdate' => $PRdate, 'PRqty' => $PRqty, 'PRprice' => $price, 'PRtotal' => $PRtotal]);

			$redQty=$it - $PRqty;
			DB::statement("UPDATE item SET qty='$redQty' WHERE itemName = '$id'");
	

				return redirect()->back();


			}











		}

			public function showPR(){

			$pids = DB::select("select pid from addpurchase");
			$rets = DB::select("select * from preturn");
			return view('PurchaseReturns', compact('rets','pids'));
		}



}
