<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests;
use DB;

class InventoryMailController extends Controller
{
    public function send(Request $request)
    {
    	$to = $request->input('to');
        $title = $request->input('title');
        $content = $request->input('content');
       
        $emailAdd=DB::table('supplier')->where('Sname',$to)->value('Semail');


        Mail::send('EmailPO', ['title' => $title, 'content' => $content], function ($message) use ($emailAdd,$title)
        {
        	
            $message->from('autogleamservice@gmail.com', 'AutoGleam service');
            $message->subject($title);
            $message->to($emailAdd);
        });

        return redirect()->back();

    }



    public function showPO(){

            $Suppliername = DB::select("select Sname from supplier");
            return view('PurchaseOrder', compact('Suppliername'));

    }








}
