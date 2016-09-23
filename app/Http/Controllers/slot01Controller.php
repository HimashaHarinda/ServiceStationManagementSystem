<?php
	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use App\Http\Requests;
	use DB;

	class slot01Controller extends Controller
	{
		
		public function showpending()
		{
			$pending1 = DB::select("select * from service where slotId = 1 AND status = 'pending' order by reservDate ASC, reservTime ASC");
			return view('slot01', compact('pending1'));

        
		}

        public function deletereservation(Request $request){
            $service_id = $request['service_id'];
            $deletedRecord = DB::statement("DELETE FROM service WHERE service_id = '$service_id'");
        }
	}
?>