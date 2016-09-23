<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Response;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function loadView()
    {
        $orders = DB::select("select * from janitorialorders j, janorder_payments p where j.janOrderId=p.orderID");
//        $table=NULL;
        $table = DB::select("select distinct a.empId, j.supervisorId,a.orderId  from employee e, janstaffassign a, jansupervisor j 
                where j.orderId=a.orderId and e.eid=j.supervisorId or e.eid=a.empId");
//        var_dump($table);
        return view('orderManagement', compact('orders','table'));
    }
    
//    public function loadTable()
//    {
//        $table = DB::select("select * from employee e, janstaffassign a, jansupervisor j 
//                where j.orderId=a.orderId and e.eid=j.supervisorId and e.eid=a.empId");
//        return view('orderManagement', compact('table'));
//    }

    public function getSubCat()
    {
        $subCat = DB::select("SELECT * FROM jan_categories");
        return Response::json($subCat);
        // view('orderManagement',compact('subCat'));

    }

    public function deleteOrder(Request $request)
    {
        $janOrderId = $request['janOrderId'];

        $packOrderID= DB::select("select pack_Id from janitorialorders where janOrderId='$janOrderId'");
        $poID = $packOrderID[0]->pack_Id;

        DB::statement("DELETE FROM janitorialorders where janOrderId='$janOrderId'");

        DB::statement("DELETE FROM janitorial_package where packageId='$poID'");

        DB::statement("DELETE FROM janorder_payments where orderID='$janOrderId'");
    }
    
    public function addOrder(Request $request){
        
        
      $customer = $request->input('cust_name');
      $appoinmentDate = $request->input('date');
      $status = 0;
      $amount = $request->input('total');
      $sub1 =  $request->input('cat_id_1');
      $sub2 =  $request->input('cat_id_2');
      $sub3 =  $request->input('cat_id_3');
      $sub4 =  $request->input('cat_id_4');
      $sub5 =  $request->input('cat_id_5');
      $sub6 =  $request->input('cat_id_6');
      $sub7 =  $request->input('cat_id_7');
      $sub8 =  $request->input('cat_id_8');
      $sub9 =  $request->input('cat_id_9');
      
       $packId = DB::select("SELECT packageId FROM janitorial_package ORDER BY packageId DESC limit 1 ");
      $lastPackId = $packId[0]->packageId + 1;
//      var_dump($lastPackId);
      
          if ($sub1!=0){
              $pack = DB::statement("INSERT INTO janitorial_package(categoryId,packageId) values('$sub1','$lastPackId')");
          }
          if ($sub2!=0){
              $pack = DB::statement("INSERT INTO janitorial_package(categoryId,packageId) values('$sub2','$lastPackId')");
          }
          if ($sub3!=0){
              $pack = DB::statement("INSERT INTO janitorial_package(categoryId,packageId) values('$sub3','$lastPackId')");
          }
          if ($sub4!=0){
              $pack = DB::statement("INSERT INTO janitorial_package(categoryId,packageId) values('$sub4','$lastPackId')");
          }
          if ($sub5!=0){
              $pack = DB::statement("INSERT INTO janitorial_package(categoryId,packageId) values('$sub5','$lastPackId')");
          }
          if ($sub6!=0){
              $pack = DB::statement("INSERT INTO janitorial_package(categoryId,packageId) values('$sub6','$lastPackId')");
          }
          if ($sub7!=0){
              $pack = DB::statement("INSERT INTO janitorial_package(categoryId,packageId) values('$sub7','$lastPackId')");
          }
          if ($sub8!=0){
              $pack = DB::statement("INSERT INTO janitorial_package(categoryId,packageId) values('$sub8','$lastPackId')");
          }
          if ($sub9!=0){
              $pack = DB::statement("INSERT INTO janitorial_package(categoryId,packageId) values('$sub9','$lastPackId')");
          }
       
      DB::statement("INSERT INTO janitorialorders(customer,reservationDate,pack_Id) values('$customer','$appoinmentDate','$lastPackId')");

      $orderId = DB::select("SELECT janOrderId FROM janitorialorders ORDER BY janOrderId DESC limit 1 ");
      $lastOrderID = $orderId[0]->janOrderId;
    
      DB::statement("INSERT INTO janorder_payments(status,amount,orderID) values('$status','$amount','$lastOrderID')");
         
      $orders = DB::select("select * from janitorialorders j, janorder_payments p where j.janOrderId=p.orderID");
      return view('orderManagement', compact('orders'));
     

  	}
        
          public function getCustomers(){
              $customerNames = DB::select("SELECT name FROM customer");
              return Response::json($customerNames);
          }
          
           public function getOrders(){
              
              $carbon_today = Carbon::today()->format('Y-m-d'); 
               
              $orderList = DB::select("SELECT janOrderId FROM janitorialorders where reservationDate >= '$carbon_today'");
              return Response::json($orderList);
          }
          
          public function getSupervisors(){
              
              $carbon_today = Carbon::today()->format('Y-m-d');
              
              $sList = DB::select("select name from employee where designation = 1 and 
              eid not in (select a.empId from janstaffassign a, janitorialorders o 
              WHERE o.janOrderId=a.orderId and o.orderDate != '$carbon_today')" );
              
              return Response::json($sList);
          }
          
          public function getJanitors(){
              
              $carbon_today = Carbon::today()->format('Y-m-d');
                           
              $List = DB::select("select name from employee where designation = 2 and 
              eid not in (select a.empId from janstaffassign a, janitorialorders o 
              WHERE o.janOrderId=a.orderId and o.orderDate != '$carbon_today')" );
              
              return Response::json($List);
          }
          
          public function addEmp2Order(Request $request){
                 
              $ordId = $request['orderId'];
//              var_dump($ordId);
              $suprevisor = $request['supervisorId'];
              $janitor = $request['empId'];
              
              $super1 = DB::select("select eid from employee where name = '$suprevisor'");
              $super2 = $super1[0]->eid;
              
              $em1 = DB::select("select eid from employee where name = '$janitor'");
              $em2 = $super1[0]->eid;
//              $ordId=5;
//              $suprevisor=4;
//              $janitor=8;
              $count = DB::select("select * jansupervisor where orderId= '$ordId' " );
              if ($count == 0 ){
                  
                DB::statement("INSERT INTO jansupervisor(orderId,supervisorId) values('$ordId','$super2') ");
              }
//              $maxid=$empOdr[0]->id;
              $Odr = DB::statement("INSERT INTO janstaffassign(orderId,empId) values('$ordId','$em2') ");
              
              return Response::json($Odr);
                      
          }
}
