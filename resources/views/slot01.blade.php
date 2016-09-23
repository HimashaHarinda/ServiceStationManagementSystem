<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Servcie Management | Reservations</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <![endif]-->


  <!--sweet alerts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<script type="text/javascript">

  function deletereservation(service_id){


    swal({
              title: "Are you sure you want to delete?",
              text: "You will not be able to recover this record!",
              type: "warning",
              showCancelButton: true,
              confirmButtonColor: "#DD6B55",
              confirmButtonText: "Delete",
              closeOnConfirm: false },
            function(confirm){
              if(confirm) {

                $.ajax({
                  method:'get',
                  url:'deletereservation',
                  data:{service_id:service_id},
                  success:function(){
                    swal({
                              title: "Deleted!",
                              text: "Successfully deleted the service reservation record!",
                              type: "warning",
                              showCancelButton: false,
                              confirmButtonColor: "#DD6B55",
                              confirmButtonText: "Ok",
                              closeOnConfirm: false },
                            function (confirm) {
                              location.reload();
                            });
                  },
                  error:function(x,y,thrownError){
                    console.log(thrownError);
                  }
                });
              }else{
              }
            }
    );



  }






</script>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="welcome" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>AGM</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Auto</b>Gleam</span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->

      <ul class="sidebar-menu">


        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Customer Management</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="RegisterCustomer"><i class="fa fa-user-plus"></i> Register Customer</a></li>
            <li><a href="CustomerLoyalty"><i class="fa fa-thumbs-o-up"></i> Customer Loyalty</a></li>
            <li><a href="Feedback"><i class="fa fa-commenting"></i>Customer Feedback</a></li>
            <li><a href="Reports"><i class="fa fa-file-text"></i>Reports</a></li>
            <li><a href="CustomerDeficit"><i class="fa fa-minus-square"></i>Customer Deficits</a></li>
          </ul>
        </li>

        <li class="treeview active">
          <a href="#">
            <i class="fa fa-car"></i> <span>Service Management</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="reservations"><i class="fa fa-square-o"></i>Add/update Reservations</a></li>
            <li class="active"><a href="slot01"><i class="fa fa-square-o"></i>Slot 01</a></li>
            <li ><a href="slot02"><i class="fa fa-square-o"></i>Slot 02</a></li>
            <li ><a href="slot03"><i class="fa fa-square-o"></i>Slot 03</a></li>
            <li ><a href="slot04"><i class="fa fa-square-o"></i>Slot 04</a></li>
            <li><a href="assignments"><i class="fa fa-male"></i>Assignments</a></li>
            <li><a href="plans"><i class="fa fa-check-square"></i> Service Plans</a></li>
            <li><a href="logs"><i class="fa fa-file-text-o"></i>Logs</a></li>
            <li><a href="reports"><i class="fa fa-pencil-square-o"></i>Reports</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i><span>Employee Management</span>

            <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="AddEmployee"><i class="fa fa-user-plus"></i>Recruitment</a></li>
            <li><a href="EmployeeInformation"><i class="fa fa-book"></i>Information</a></li>
            <li><a href="payroll"><i class="fa fa-dollar"></i>Payroll Management</a></li>
            <li><a href="leave"><i class="fa fa-calendar-minus-o"></i>Attendance</a></li>
            <li><a href="EmployeeLoans"><i class="fa fa-credit-card"></i>Employee Loans</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart"></i><span>Janitorial Management</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="emp">Employee Managment</a>
            </li>
            <li><a href="cust">Customer Managment</a>
            </li>
            <li><a href="package">Categories</a>
            </li>
            <li><a href="order">Order Managment</a>
            </li>
          </ul>

        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i><span>Finance Management</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="assets"><i class="fa fa-building"></i>Asset Management</a></li>
            <li><a href="assetDep"><i class="fa fa-tasks"></i>Asset Depreciation Information</a></li>
            <li><a href="liabilities"><i class="fa fa-plus-circle"></i>Liability Management</a></li>
            <li><a href="liabilityInterest"><i class="fa fa-object-group"></i>Liability Interest Information</a></li>
            <li><a href="income"><i class="fa fa-files-o"></i>Income Management</a></li>
            <li><a href="expense"><i class="fa fa-credit-card"></i>Expenditure Management</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-cube"></i><span>Inventory Management</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="AddNewItem"><i class="fa fa-plus"></i>Add New Item</a></li>
            <li><a href="Inventory"><i class="fa fa-cubes"></i>Inventory</a></li>
            <li><a href="Purchases"><i class="fa fa-shopping-cart"></i>Purchases</a></li>
            <li><a href="PurchaseReturns"><i class="fa fa-refresh"></i>Purchase Return</a></li>
            <li><a href="Sales"><i class="fa fa-money"></i>Sales</a></li>
            <li><a href="PurchaseOrder"><i class="fa fa-mail-forward "></i>Send PO</a></li>
            <li><a href="Supplier"><i class="fa fa-truck"></i>Suppliers</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart"></i><span>Work-Shift Management</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="CreateShifts"><i class="fa fa-male"></i>Create Shifts</a></li>
            <li><a href="AssignEmployees"><i class="fa fa-plus-circle"></i>Assign Employees</a></li>
            <li><a href="ReplaceEmployees"><i class="fa fa-exchange"></i>Replace Employees</a></li>
            <li><a href="RemoveEmployees"><i class="fa fa-fw fa-close">&nbsp;&nbsp;&nbsp;</i>Remove Employees</a></li>
            <li><a href="EfficiencyAnalysis"><i class="fa fa-fw fa-bar-chart">&nbsp;&nbsp;&nbsp;</i>Efficiency Analysis</a></li>
            <li><a href="OverWorkedEmployees"><i class="fa fa-fw fa-calendar-minus-o">&nbsp;&nbsp;&nbsp;</i>Over Worked Employees</a></li>>
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <p class="lead">
        Slot 02 Pending Services

      </p>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Slot 02 Service Details</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>Service ID</th>
                  <th>Customer Name</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Status</th>
                </tr>
                @foreach($pending1 as $pending)
                  <tr>
                    <td>{{ $pending->service_id }}</td>
                    <td>{{ $pending->customer }}</td>
                    <td>{{ $pending->reservDate }}</td>
                    <td>{{ $pending->reservTime }}</td>
                    <td>{{ $pending->status }}</td>
                    <td><button type="button" value="{{$pending->service_id}}" class="btn btn-danger" onclick="deletereservation('{{$pending->service_id}}')"><i class="fa fa-trash"></i></button></td>

                  </tr>
                @endforeach

                </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->


  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->

<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
