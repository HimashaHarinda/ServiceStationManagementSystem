<?php
	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use App\Http\Requests;
	use DB;


	
	class PlanController extends Controller
	{
		//add service plan function
		public function addplan(Request $request)
		{
				



				$pName = $request['planName'];
				$pCat = $request['planCategory'];
				$pAmt = $request['planAmount'];
				$true = 0;

				$exist = DB::select("select title from service_plan");
				foreach($exist as $e)
					if($e->title == $pName)
					{
						$true= 1;
						break;
					}


				if($true == 1)
				{
					DB::table('service_plan')->where('title', $pName)->update(['amount' => $pAmt, 'category'=> $pCat]);
				}
				else
				{
					DB::table('service_plan')->insert(
					['title' => $pName, 'category'=> $pCat, 'amount' => $pAmt]);
				}

				return redirect()->back();
		}

		public function showplans()
		{
			$plans = DB::select("select * from service_plan");
			$cats = DB::select("select COUNT(category) as 'counter' from service_plan");
			$serv = DB::select("select COUNT(*) as 'counter2' from service_plan");
			$plan = DB::select("select COUNT(DISTINCT category) as 'counter3' from service_plan ");
				


			return view('plans', compact('plans','cats','serv','plan'));

        
		}
		
		public function deletePlans(Request $request){
        			$splan_id = $request['splan_id'];
        			$deletedRecord = DB::statement("DELETE FROM service_plan WHERE splan_id = '$splan_id'");
    			}


		

		
	}




?>