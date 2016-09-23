<?php
	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Mail;
	use App\Http\Requests;
	use DB;

	class ReservController extends Controller
	{
		
		public function addreserv(Request $request)
		{
				$cusname = $request['cusname'];
				$type = 1;
				$empname = $request['empname'];
				$slotid = $request['slotid'];
				$date = $request['date'];
				$time = $request['time'];
				$payment = $request['pmethod'];
				$package = $request['pid'];
				
				
				DB::table('service')->insert(
						['customer'=> $cusname,'empnameReq'=> $empname,  'type'=> $type, 'slotid'=> $slotid, 'reservDate'=> $date, 'reservTime'=> $time, 'status'=> "pending", 'packageId' => $package, 'paymentMethod' => $payment]);
				
				
				return redirect()->back();
		}

		public function slotwid()
		{
				$slot1 = DB::select("SELECT * FROM service WHERE slotid = 1 AND status = 'ongoing'");

				$slot11 = DB::select("SELECT * FROM `service` WHERE service_id IN (SELECT service_id FROM service WHERE slotId=1 AND status = 'pending') GROUP BY reservDate ASC, reservTime ASC LIMIT 1");

				$slot2 = DB::select("SELECT * FROM service WHERE slotid = 2 AND status = 'ongoing'");

				$slot22 = DB::select("SELECT * FROM `service` WHERE service_id IN (SELECT service_id FROM service WHERE slotId=2 AND status = 'pending') GROUP BY reservDate ASC, reservTime ASC LIMIT 1");

				$slot3 = DB::select("SELECT * FROM service WHERE slotid = 3 AND status = 'ongoing'");

				$slot33 = DB::select("SELECT * FROM `service` WHERE service_id IN (SELECT service_id FROM service WHERE slotId=3 AND status = 'pending') GROUP BY reservDate ASC, reservTime ASC LIMIT 1");

				$slot4 = DB::select("SELECT * FROM service WHERE slotid = 4 AND status = 'ongoing'");

				$slot44 = DB::select("SELECT * FROM `service` WHERE service_id IN (SELECT service_id FROM service WHERE slotId=4 AND status = 'pending') GROUP BY reservDate ASC, reservTime ASC LIMIT 1");

				$reservations = DB::select("SELECT * FROM service where status = 'pending'");
				
				return view('reservations', compact('slot1','slot2','slot3','slot4','reservations','slot11','slot22','slot33','slot44'));
		}

		public function clearSlot(Request $request)
		{
        			$service_id = $request['service_id'];
        			$updateRecord = DB::table('service')->where('service_id', $service_id)->update(['status' =>"finished"]);
        			$freeEmployee = DB::statement("DELETE FROM empinplans WHERE ShiftPlanID = $service_id");

        			$payment = DB::select("SELECT * FROM service where service_id = $service_id");
        			foreach($payment as $pay)
        			{
        				$package = $pay->packageId;
        				$serviceid = $pay->service_id;
        				$date = $pay->reservDate;

        				$pid = DB::select("SELECT amount FROM service_plan where splan_id = $package");
        				foreach($pid as $p)
        				{
        					$amount = $p->amount;
        					DB::table('servicepayment')->insert(['serviceID'=> $serviceid,'amount'=>$amount,'paidDate'=>$date]);
        				}

        			}

            $customer = DB::select("SELECT customer FROM service where service_id = $service_id");
            foreach($customer as $name)
            {
                $cus = $name->customer;
                $emailAdd = DB::table('customer')->where('name',$cus)->value('mail');

                $title = "Regarding the termination of your servcie";
                $content = "This is to notify you that the service that you have requested from our company has been successfully conducted and terminated, please come and colect your vehicle.
				        	Thanks.";

                Mail::send('EmailPO', ['title' => $title, 'content' => $content], function ($message) use ($emailAdd,$title)
                {

                    $message->from('autogleamservice@gmail.com', 'AutoGleam service');
                    $message->subject($title);
                    $message->to($emailAdd);
                });

            }
            return redirect()->back();




        }

    	public function serviceNext(Request $request){
        			
    				$service_id = $request['service_id'];
        			$serviceNext = DB::table('service')->where('service_id', $service_id)->update(['status' =>"ongoing"]);
    			}

    	public function updatereserv(Request $request)
    	{
    		$service_id = $request['servid'];
    		$slot_id = $request['slotid'];
    		$package_id = $request['pid'];
    		$payment_method = $request['pmethod'];
    		$reserv_date = $request['date'];
    		$reserv_time = $request['time'];


    		$updateRecord = DB::table('service')->where('service_id', $service_id)->update(['slotId' => $slot_id,'reservDate'=> $reserv_date, 'reservTime'=> $reserv_time, 'packageId' => $package_id,'paymentMethod' => $payment_method]);

    		return redirect()->back();

    	}



	}
?>