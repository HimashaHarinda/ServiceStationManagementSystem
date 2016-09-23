<!DOCTYPE html>
<html>
<head>


  <title>Inventory Management | Sales Report</title>





</head>
<body>
<div align="center">
<h1>AutoGleam Service Station </h1>  
<h2>Inventory Sales Report</h2> 
<h2>From {{$From}} to {{$To}}</h2>
</div>


<div>
 <table border="5">
   
                <thead>
                <tr>
                  <th>Sales ID</th>
                  <th>Item Name</th>
                  <th>Quantity</th>
                  <th>Date </th>
                  <th>Unit Value(Rs.)</th>
                  <th>Discount(Rs.) </th>
                  <th>Total(Rs.)</th>
                </tr>
                </thead>
                <tbody>
            @foreach($sales as $sale)
                  <tr>
                  <td>{{$sale->iid}}</td>
                  <td>{{$sale->Iitemid}}</td>
                  <td>{{$sale->Iqty}}</td>
                  <td>{{$sale->Idate}}</td>
                  <td>{{$sale->Iprice}}</td>
                  <td>{{$sale->Idisc}}</td>
                  <td>{{$sale->Itotal}}</td>
                  </tr>

                @endforeach
              
                </tbody>
            
              </table>

</div>


<div>
  @foreach($totrep as $t)
<h3> Total Sales for the period : Rs. {{$t->Itot}} </h3>
 @endforeach

</div>








</body>
</html>