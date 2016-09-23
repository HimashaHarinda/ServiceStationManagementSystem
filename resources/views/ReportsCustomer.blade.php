<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Customer Management | Customer Reports</title>
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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
     <a href="welcome" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>AGM</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Auto</b>Gleam</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->

        <ul class="sidebar-menu">

        
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-user"></i> <span>Customer Management</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
              <li><a href="RegisterCustomer"><i class="fa fa-user-plus"></i> Register Customer</a></li>
              <li><a href="CustomerLoyalty"><i class="fa fa-thumbs-o-up"></i> Customer Loyalty</a></li>
              <li><a href="Feedback"><i class="fa fa-commenting"></i>Customer Feedback</a></li>
              <li class="active"><a href="Reports"><i class="fa fa-file-text"></i>Reports</a></li>
              <li><a href="CustomerDeficit"><i class="fa fa-minus-square"></i>Customer Deficits</a></li>
          </ul>
        </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-car"></i> <span>Service Management</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="reservations"><i class="fa fa-square-o"></i>Add/update Reservations</a></li>
                    <li ><a href="slot01"><i class="fa fa-square-o"></i>Slot 01</a></li>
                    <li ><a href="slot02"><i class="fa fa-square-o"></i>Slot 02</a></li>
                    <li ><a href="slot03"><i class="fa fa-square-o"></i>Slot 03</a></li>
                    <li ><a href="slot04"><i class="fa fa-square-o"></i>Slot 04</a></li>
                    <li ><a href="assignments"><i class="fa fa-male"></i>Assignments</a></li>
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
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-xs-6">

          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Customer Reports</h3>
            </div>
             
            <!-- /.box-header -->
            <!-- form start -->
           
              <div class="box-body">
                              
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>

            <div class="info-box-content">
             
              <a onclick="window.open('customerReport')" type="button" class="btn btn-block btn-warning btn-lg" >Generate Customer Report</a>

            </div>
            <!-- /.info-box-content -->
          </div>

          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-files-o"></i></span>

            <div class="info-box-content">

                <a onclick="window.open('loyaltyReport')" type="button" class="btn btn-block btn-primary btn-lg" >Generate Loyalty Report</a>

            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->

          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-files-o"></i></span>

            <div class="info-box-content">
                <a onclick="window.open('deficitReport')" type="button" class="btn btn-block btn-success btn-lg">Generate Deficit Report</a>

            </div>
            <!-- /.info-box-content -->
          </div>
        </div>
          </div>    
          </div>
          </section>
  </div>
</div>
</body>
<!-- ./wrapper -->

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

<script src="../../plugins/flot/jquery.flot.pie.min.js"></script>

<link rel="alternate" media="print" href="different_page.html" />

</body>
</html>
