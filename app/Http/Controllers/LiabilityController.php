<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;

class LiabilityController extends Controller
{
     public function loadLiabilities()
	{
		$liabilities = DB::select("select * from liability");
		return view('liability', compact('liabilities'));
	}

    public function addLiabilities(Request $request)
    {
        $this->validate($request, [
        'description' => 'required', 
        'amount' => 'required|numeric',
        'company' => 'required'
        ]);

        $liabilities = DB::select("select * from liability");
    	$description = $request->input('description');
    	$amount = $request->input('amount');
    	$company = $request->input('company');

    	DB::statement("INSERT INTO liability(description,amount,company) VALUES ('$description','$amount','$company')");

    	return view('liability',compact('liabilities'));
        
    }

    public function deleteLiabilities(Request $request)
    {
        $liabilityID = $request['liabilityID'];
        DB::statement("DELETE FROM liability WHERE liabilityID = '$liabilityID'");
    }

    public function updateLiability(Request $request)
    {
        $liabilityID = $request['liabilityID'];
        $amount = $request->input('amount');
        DB::statement("UPDATE liability SET amount = '$amount' WHERE liabilityID = '$liabilityID'");
    }

    public function getLiability($id)
    {
        $results = DB::table('liability')->where('liabilityID', '=', $id)->select('liability.amount')->get();
        return json_encode($results);
    }

    public function loadLiabilityInterestDetails()
    {
        $liabilityInterest = DB::select("select * from liability_interest");
        return view('InterestL', compact('liabilityInterest'));
    }

    public function deleteliabilityInterest(Request $request)
    {
        $liabilityID = $request['liabilityID'];
        $principalAmount = $request['principal_amount'];
        $calculatedInterest = $request['calculated_interest'];
        $totalAmount = $request['total_amount'];

        DB::statement("DELETE FROM liability_interest WHERE liabilityID = '$assetID' and principal_amount = '$principalAmount' and calculated_interest = '$calculatedInterest' and total_amount = '$totalAmount'");


    }

    public function calculateInterest(Request $request)
    {
        $percent = 100;
        $liabilityID = $request->input('l1');
        $intRate = $request->input('l2');
        $duration = $request->input('l3');


        $principal = DB::table('liability')->where('liabilityID', '=', $liabilityID)->select('liability.amount')->first();

        $calInterest = round((($intRate / $percent) * $duration * $principal->amount),2);

        return json_encode($calInterest);

    }


    public function liabilitySearch(Request $request)
    {
        $term = $request->input('term');

        $liabilities = DB::table('liability')
            ->where('liabilityID', 'LIKE', $term.'%')->get();

        return \Response::json(view('liabilities_search')->with('liabilities', $liabilities)->render());

    }

    public function liabilityInterestSearch(Request $request)
    {
        $term = $request->input('term');

        $liabilities = DB::table('liability_interest')
            ->where('liabilityID', 'LIKE', $term.'%')->get();

        return \Response::json(view('liabilitiesInterest_search')->with('liabilityInterest', $liabilities)->render());

    }

    public function addInterest(Request $request)
    {

        $this->validate($request, [
        'l1' => 'required',
        'l2' => 'required', 
        'l3' => 'required',
        'l6' => 'required'
        ]);

        $liabilityID = $request->input('l1');
        $intRate = $request->input('l2');
        $duration = $request->input('l3');
        $interest = $request->input('l6');

        $principal = DB::table('liability')->where('liabilityID', '=', $liabilityID)->select('liability.amount')->first()->amount;

        $total = $principal + $interest;

        $existing = DB::table('liability_interest')->where('liabilityID', $liabilityID)->where('principal_amount', $principal)->where('calculated_interest', $interest)->where('total_amount', $total)->first();
        if ($existing) {
            DB::table('liability_interest')->where('liabilityID', $liabilityID)->where('principal_amount', $principal)->where('calculated_interest', $interest)->where('total_amount', $total)->update(['interest_rate' => $intRate, 'duration' => $duration, 'principal_amount' => $principal, 'calculated_interest' => $interest, 'total_amount' => $total]);
        } else {
        DB::table('liability_interest')->insert(['liabilityID' => $liabilityID, 'interest_rate' => $intRate, 'duration' => $duration, 'principal_amount' => $principal, 'calculated_interest' => $interest, 'total_amount' => $total]);
    }

        return back();
    }

    public function addDepAmount(Request $request)
    {
        $assetID = $request->input('listOne');
        $originalVal = $request->input('model');
        $currentVal = $request->input('currentValue');
        $depAmt = $request->input('calculatedValue');
       // echo $assetID;
       // die;
        //DB::statement("INSERT INTO asset_depreciation(assetID,original_value,current_value,depreciation_amount) VALUES ('$assetID','$originalVal','$currentVal','$depAmt')");

        DB::table('asset_depreciation')->insert(['assetID' => $assetID, 'original_value' => $originalVal, 'current_value' => $currentVal, 'depreciation_amount' => $depAmt]
);

        return redirect('assets');
    }
    /* $percentage = 100;
        $id = $request['assetID'];
        $initialAmount = DB::table('assets')->where('assetID', '=', $id)->select('assets.value')->first()->value;
        $depRate = DB::table('assets')->where('assetID', '=', $id)->select('assets.depreciation_rate')->first()->depreciation_rate;

        $depAmount = round((($initialAmount * $depRate) / $percentage), 2);
        $currentDep = round(($initialAmount - $depAmount),2);

        return json_encode(array("a" => $depAmount, "b" => $currentDep));*/
/*
    public function loadLiabilityInterestDetails()
    {
        $interestLiability = DB::select("select * from liability_interest");
        return view('InterestL', compact('interestLiability'));
    }

    public function deleteLiabilityInterest(Request $request)
    {
        $liabilityID = $request['liabilityID'];
        $principalAmount = $request['principal_amount'];
        $calculatedInterest = $request['calculated_interest'];
        $totalAmount = $request['total_amount'];

        DB::statement("DELETE FROM liability_interest WHERE liabilityID = '$assetID' and principal_amount = '$principalAmount' and calculated_interest = '$calculatedInterest' and total_amount = '$totalAmount'");
    }
    */

}

