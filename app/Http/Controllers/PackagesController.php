<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class PackagesController extends Controller {

    public function loadView() {
        $categories = DB::select("select * from jan_maincategories m, jan_categories s where s.main_id=m.main_id");
        return view('Packages', compact('categories'));
    }

    public function getSubCatInfo(Request $request) {
        $cat_ID = $request['cat_ID'];
        $getSubCat = DB::select("SELECT * FROM jan_categories WHERE cat_ID = $cat_ID");
        return response()->json($getSubCat);
    }

    public function add_sub_cat_type(Request $request) {

        $type = $request->input('type');
        $price = $request->input('price');
        $main_cat = $request->input('main_cat');
        $sub_cat = $request->input('sub');

        if ($sub_cat == 0) {
            DB::statement("INSERT INTO jan_categories(type,price,main_id) values('$type','$price','$main_cat')");
            $categories = DB::select("select * from jan_maincategories m, jan_categories s where s.main_id=m.main_id");
            return view('Packages', compact('categories'));
        } else {
            DB::statement("UPDATE jan_categories SET price = '$price' WHERE  cat_ID = '$sub_cat'");
            $categories = DB::select("select * from jan_maincategories m, jan_categories s where s.main_id=m.main_id");
            return view('Packages', compact('categories'));
        }
    }

    public function deleteCat(Request $request) {
        $cat_ID = $request['cat_ID'];
        DB::statement("DELETE FROM  jan_categories WHERE cat_ID = '$cat_ID'");
    }

}
