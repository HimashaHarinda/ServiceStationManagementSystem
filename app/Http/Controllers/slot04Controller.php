<?php
	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use App\Http\Requests;
	use DB;

	class slot04Controller extends Controller
	{
		
		public function showpending()
		{
			$pending4 = DB::select("select * from service where slotId = 4 AND status = 'pending' order by reservDate ASC, reservTime ASC");
			return view('slot04', compact('pending4'));

        
		}

        public function deletereservation(Request $request){
            $service_id = $request['service_id'];
            $deletedRecord = DB::statement("DELETE FROM service WHERE service_id = '$service_id'");
        }
	}
?>