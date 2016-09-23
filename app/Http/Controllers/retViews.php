<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class retViews extends Controller
{
    
		public function home(){
		return view("home");
	}


	public function Purchases(){
		return view("Purchases");
	}

		public function Inventory(){
		return view("Inventory");
	}

			public function PurchaseReturns(){
		return view("PurchaseReturns");
	}
		public function Sales(){
		return view("Sales");
	}



			public function Supplier(){
		return view("Supplier");
	}

		public function PurchaseOrder(){
		return view("PurchaseOrder");
	}

			public function AddNewItem(){
		return view("AddNewItem");
	}



}
