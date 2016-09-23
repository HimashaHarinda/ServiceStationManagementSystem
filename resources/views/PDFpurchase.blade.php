<!DOCTYPE html>
<html>
<head>


  <title>Inventory Management | Purchases Report</title>





</head>
<body>
<div align="center">  
<h1>AutoGleam Service Station </h1>  
<h2>Inventory Purchases Report</h2>
<h2>From {{$From}} to {{$To}}</h2>
</div>


<div>
 <table border="5">
                <thead>
                <tr>
                  <th>PID</th>
                  <th>Item Name</th>
                  <th>Supplier Name </th>
                  <th>Quantity </th>
                  <th>Date</th>
                  <th>Price</th>
                  <th>Discount</th>
                  <th>Total</th>
                </tr>
                </thead>
                <tbody>
                @foreach($purchases as $purchase)
                  <tr>
                  <td>{{$purchase->pid}}</td>
                  <td>{{$purchase->Pitemid}}</td>
                  <td>{{$purchase->Psupplier}}</td>
                  <td>{{$purchase->Pqty}}</td>
                  <td>{{$purchase->Pdate}}</td>
                  <td>{{$purchase->Pprice}}</td>
                  <td>{{$purchase->Pdisc}}</td>
                  <td>{{$purchase->Ptotal}}</td>
                  </tr>
                @endforeach
                </tbody>
              
              </table>

</div>


<div>
  @foreach($totrep as $t)
<h3> Total Purchases for the period : Rs. {{$t->Ptot}} </h3>
 @endforeach

</div>








</body>
</html>