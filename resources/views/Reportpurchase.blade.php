<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Purchases</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        $(document).ready(function () {
            window.print();

        })

    </script>

</head>
<body>
<div class=" col-md-12">
    <div class="col-md-1">
        <img src="dist/img/aglkb.jpg" style="width: 600px; height: 100px;"><p><b></b></p>
    </div>
    <div class="col-md-4"><p><b>Auto Gleam</b></p></div>
</div>

<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
<div class="col-md-6" align="justify">
 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header" align="center">
              <h2>Purchase Details Report <h2>
              <h3>From {{$From}} to {{$To}}</h3>
                @foreach($totrep as $t)
                <h3> Total Purchases within the period : Rs. {{$t->Ptot}} </h3>
                @endforeach
            </div>
            <!-- /.box-header -->
            <div class="box-body">
<div class="row">
   
       <div class="col-sm-6">
       <div class="dataTables_filter" id="example1_filter">
       </div></div></div>
            
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>PID</th>
                  <th>Item Name</th>
                  <th>Supplier Name </th>
                  <th>Quantity </th>
                  <th>Date</th>
                  <th>Unit Value(Rs.)</th>
                  <th>Discount(Rs.)</th>
                  <th>Total(Rs.)</th>
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
            <!-- /.box-body -->
          </div>
<!-- jQuery 2.2.0 -->
<script src="../../plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>