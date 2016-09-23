<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;

class AssetController extends Controller
{
	public function loadAssets()
	{
		$assets = DB::select("select * from assets");
		return view('assets', compact('assets'));
	}

    public function addAssets(Request $request)
    {
        $this->validate($request, [
        'value' => 'required|numeric|min:2',
        'description' => 'required', 
        'type' => 'required',
        'duration' => 'required|numeric',
        'depRate' => 'required|numeric'
        ]);

    	$description = $request->input('description');
    	$type = $request->input('type');
    	$value = $request->input('value');
    	$duration = $request->input('duration');
    	$depRate = $request->input('depRate');

    	DB::statement("INSERT INTO assets(description,type,value,duration,depreciation_rate) VALUES ('$description','$type','$value','$duration','$depRate')");

    	return redirect('assets');
    }

    public function deleteAssets(Request $request)
    {
        $assetID = $request['assetID'];
        DB::statement("DELETE FROM assets WHERE assetID = '$assetID'");
    }

    public function getAsset($id)
    {
        $results = DB::table('assets')->where('assetID', '=', $id)->select('assets.value')->get();
        return json_encode($results);
    }

    public function loadAssetDepDetails()
    {
        $assetDep = DB::select("select * from asset_depreciation");
        return view('AssetDepreciation', compact('assetDep'));
    }

    public function deleteAssetDep(Request $request)
    {
        $assetID = $request['assetID'];
        $original = $request['original_value'];
        $current = $request['current_value'];
        DB::statement("DELETE FROM asset_depreciation WHERE assetID = '$assetID' and original_value = '$original' and current_value = '$current'");
    }

    public function calculateDepreciation(Request $request)
    {
        $percentage = 100;
        $id = $request['assetID'];
        $initialAmount = DB::table('assets')->where('assetID', '=', $id)->select('assets.value')->first()->value;
        $depRate = DB::table('assets')->where('assetID', '=', $id)->select('assets.depreciation_rate')->first()->depreciation_rate;

        $depAmount = round((($initialAmount * $depRate) / $percentage), 2);
        $currentDep = round(($initialAmount - $depAmount),2);

        return json_encode(array("a" => $depAmount, "b" => $currentDep));
    }

    public function addDepAmount(Request $request)
    {
        $this->validate($request, [
        'listOne' => 'required',
        'model' => 'required', 
        'currentValue' => 'required|numeric',
        'calculatedValue' => 'required|numeric'
        ]);

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

    public function assetSearch(Request $request)
    {
        $term = $request->input('term');

        $assets = DB::table('assets')
            ->where('assetID', 'LIKE', $term.'%')->get();

        return \Response::json(view('assets_search')->with('assets', $assets)->render());

    }

    public function assetDepSearch(Request $request)
    {
        $term = $request->input('term');

        $assets = DB::table('asset_depreciation')
            ->where('assetID', 'LIKE', $term.'%')->get();

        return \Response::json(view('assetsDep_search')->with('assetDep', $assets)->render());

    }

}
