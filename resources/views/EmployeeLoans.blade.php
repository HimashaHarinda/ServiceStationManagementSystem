<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Employee Management | Loans</title>
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


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

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

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user"></i> <span>Service Management</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="ReservationsService"><i class="fa fa-circle-o"></i>Reservations</a></li>
                        <li><a href="AssignService"><i class="fa fa-circle-o"></i>Assign Service</a></li>
                        <li><a href="ServicePlans"><i class="fa fa-circle-o"></i>Service Plans</a></li>
                        <li><a href="ServiceLogs"><i class="fa fa-circle-o"></i>Service Logs</a></li>
                        <li><a href="ReportsServices"><i class="fa fa-circle-o"></i>Service Reports</a></li>
                    </ul>
                </li>

                <li class="treeview active">
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
                        <li class="active"><a href="EmployeeLoans"><i class="fa fa-credit-card"></i>Employee Loans</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="Janitorial">
                        <i class="fa fa-bar-chart"></i><span>Janitorial Management</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="emp">Employee Management</a>
                        </li>
                        <li><a href="cust">Customer Management</a>
                        </li>
                        <li><a href="package">Categories</a>
                        </li>
                        <li><a href="order">Order Management</a>
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
    </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   
       <section class="content-header">
            <h1></h1>
            <ol class="breadcrumb">
                <li><a href="/main"><i class="fa fa-user"></i> Employee</a></li>
                <li class="active">Loans</li>
            </ol>
        </section>

        <!-- Main content -->
        <div class="col-md-12" style="background-color: white; margin-left: 10px;">
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs" style="background-color:#B1C4E6">
                    <li class="active"><a href="#tab_5" data-toggle="tab" aria-expanded="false">New Employee Loan</a></li>
                    <li><a href="#tab_1" data-toggle="tab" aria-expanded="true">Loan Schemes</a></li>
                    <li><a href="#tab_2" data-toggle="tab" aria-expanded="false">On-going Employee Loans</a></li>
                    <li><a href="#tab_3" data-toggle="tab" aria-expanded="false">Pending for Approval</a></li>
                    <li><a href="#tab_6" data-toggle="tab" aria-expanded="false">Approved Loans</a></li>
                    <li><a href="#tab_4" data-toggle="tab" aria-expanded="false">All Employee Loans</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane" id="tab_1">
                    <div class="row" style="margin-top: 25px">
                        <div class="col-xs-12">
                            <div class="col-xs-2">
                                <button type="button" class="btn btn-block btn-success btn-flat" data-toggle="modal" data-target="#myModal"><i class="ion-android-add-circle"></i>&nbsp;Add Loan Scheme</button>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 25px">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Loan Schemes</h3>

                                </div>
                                <!-- /.box-header -->
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                        <tbody><tr>
                                            <th>Loan Scheme ID</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Amount</th>
                                            <th>Interest Rate</th>
                                            <th>Installments</th>
                                        </tr>
                                        @foreach($loans as $loan)
                                        <tr>
                                        <td>{{$loan->scheme_id}}</td>
                                        <td>{{$loan->l_name}}</td>
                                        <td>{{$loan->description}}</td>
                                        <td>{{$loan->amount}}</td>
                                        <td>{{$loan->interest}}</td>
                                        <td>{{$loan->installments}}</td>
                                        <td><button type="button" id="reject" value="{{$loan->scheme_id}}" class="btn btn-danger btn-sm" onclick="deleteLoanScheme({{$loan->scheme_id}})"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        @endforeach
                                        </tbody></table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
                </div>

                <!-- /.tab-pane 2-->
                <div class="tab-pane" id="tab_2">
                    <div class="row" style="margin-top: 25px">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">On-going Employee Loans</h3>

                                    <div class="box-tools">
                                        <div class="input-group input-group-sm" style="width: 400px;">
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
                                            <th>Loan Scheme</th>
                                            <th>Employee ID</th>
                                            <th>Employee Name</th>
                                            <th>Contact Details</th>
                                            <th>Installments</th>
                                            <th>Total Loan Amount</th>
                                            <th>Amount to be paid</th>
                                            <th>Guarantor</th>
                                            <th>Guarantor designation</th>
                                            <th>Guarantor contact</th>
                                            <th>Guarantor address</th>
                                        </tr>
                                        @foreach($ongoing as $x)
                                            <tr>
                                                <td>{{$x->l_name}}</td>
                                                {{--<td>{{$x->scheme_id}}</td>--}}
                                                <td>{{$x->eid}}</td>
                                                <td>{{$x->name}}</td>
                                                <td>{{$x->contact}}</td>
                                                <td>{{$x->installments}}</td>
                                                <td>{{$x->amount}}</td>
                                                <td>{{$x->guarantor_name}}</td>
                                                <td>{{$x->g_designation}}</td>
                                                <td>{{$x->g_contact}}</td>
                                                <td>{{$x->g_address}}</td>
                                                <td><button type="button" id="reject" value="{{$x->loan_id}}" class="btn btn-danger" onclick="alerts()"><i class="fa fa-trash"></i></button></td>
                                            </tr>
                                        @endforeach
                                        </tbody></table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane 3 PENDINg-->
                <div class="tab-pane" id="tab_3">
                    <div class="row" style="margin-top: 25px">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Pending</h3>
                                    <div class="box-tools">
                                        <div class="input-group input-group-sm" style="width: 400px;">
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
                                        <tbody>
                                        <tr>
                                            <th>Loan Scheme</th>
                                            <th>Employee ID</th>
                                            <th>Employee Name</th>
                                            <th>Contact Details</th>
                                            <th>Installments</th>
                                            <th>Total Loan Amount</th>
                                            <th>Guarantor</th>
                                            <th>Guarantor designation</th>
                                            <th>Guarantor contact</th>
                                            <th>Guarantor address</th>
                                        </tr>
                                        @foreach($pending as $x)
                                            <tr>
                                                <td>{{$x->l_name}}</td>
                                                <td>{{$x->eid}}</td>
                                                <td>{{$x->name}}</td>
                                                <td>{{$x->contact}}</td>
                                                <td>{{$x->installments}}</td>
                                                <td>{{$x->amount}}</td>
                                                <td>{{$x->guarantor_name}}</td>
                                                <td>{{$x->g_designation}}</td>
                                                <td>{{$x->g_contact}}</td>
                                                <td>{{$x->g_address}}</td>
                                                <td><span class="label label-warning">Pending</span></td>
                                                <td><button type="button" id="accept" value="{{$x->loan_id}}" class="btn btn-success btn-sm" onclick="accept()"><i class="fa fa-check"></i></button></td>
                                                <td><button type="button" id="reject" value="{{$x->loan_id}}" class="btn btn-danger btn-sm" onclick="decline()"><i class="fa fa-close"></i></button></td>
                                            </tr>
                                        @endforeach
                                        </tbody></table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->

                            <script>
                                function accept(){
                                    var id = document.getElementById('accept').value;
                                    $.ajax({
                                        type: "get",
                                        url: 'approveLoan',
                                        data: {id: id},
                                        success: function() {
                                            swal("Successful", "Loan Recorded!", "success");
                                            location.reload();
                                        },
                                        error: function(x,y,z){
                                            swal("Failed!","Failed to approve", "warning")
                                        }
                                    });
                                }
                                function decline() {
                                    var id = document.getElementById('reject').value;
                                    $.ajax({
                                        type: "get",
                                        url: 'declineLoan',
                                        data: {id: id},
                                        success: function() {
                                            swal("Successful", "Loan Declined!", "success");
                                        },
                                        error: function(){
                                            swal("Failed!","Failed to decline!", "warning")
                                        }
                                    });
                                }
                            </script>
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->
                <!-- /.tab-pane 4 ALL-->
                <div class="tab-pane" id="tab_4">
                    <div class="row" style="margin-top: 25px">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">All Employee Loans</h3>
                                    <div class="box-tools">
                                        <div class="input-group input-group-sm" style="width: 400px;">
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
                                        <tr>
                                            <th>Loan Scheme</th>
                                            <th>Employee ID</th>
                                            <th>Employee Name</th>
                                            <th>Contact Details</th>
                                            <th>Installments</th>
                                            <th>Total Loan Amount</th>
                                            <th>Guarantor</th>
                                            <th>Guarantor designation</th>
                                            <th>Guarantor contact</th>
                                            <th>Guarantor address</th>
                                        </tr>
                                        @foreach($all as $x)
                                            <tr>
                                                <td>{{$x->l_name}}</td>
                                                <td>{{$x->eid}}</td>
                                                <td>{{$x->name}}</td>
                                                <td>{{$x->contact}}</td>
                                                <td>{{$x->installments}}</td>
                                                <td>{{$x->amount}}</td>
                                                <td>{{$x->guarantor_name}}</td>
                                                <td>{{$x->g_designation}}</td>
                                                <td>{{$x->g_contact}}</td>
                                                <td>{{$x->g_address}}</td>
                                                <?php
                                                    if($x->status==0)
                                                        echo '<td><span class="label label-warning">Pending</span></td>';
                                                    else if($x->status==1 && $x->ongoing==0)
                                                        echo '<td><span class="label label-success">Approved</span></td>';
                                                    else if($x->status==2)
                                                        echo '<td><span class="label label-danger">Declined</span></td>';
                                                    else if($x->status==1 && $x->ongoing==1)
                                                        echo '<td><span class="label label-info">Ongoing</span></td>';
                                                ?>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->
                <!-- /.tab-pane 5 add-->
                <div class="tab-pane active" id="tab_5">
                    <div class="row" style="margin-top: 25px">
                        <div class="col-xs-6">
                            <div class="box box-warning">
                                <div class="box-body">
                                    <form role="form">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Loan ID:</label>
                                            <input type="text" id="lid" class="form-control" placeholder="Enter Loan ID">
                                            <label>Employee ID:</label>
                                            <input type="text" id="eid" class="form-control" placeholder="Enter Employee ID">
                                            <label>Employee Name:</label>
                                            <input type="text" id="ename" class="form-control" placeholder="Enter Employee Name">
                                        </div>
                                    </form>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-block btn-primary btn-flat" style="width: 30%; float: right" onclick="checkEligibility()">Check Eligibility</button>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="box box-warning">
                                <div class="box-body">
                                    <form role="form">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Guarantor Name:</label>
                                            <input type="text" id="name" class="form-control" placeholder="Enter Name">
                                            <label>Guarantor Designation:</label>
                                            <input type="text" id="designation" class="form-control" placeholder="Enter Designation">
                                            <label>Guarantor Contact Number:</label>
                                            <input type="text" id="contact" class="form-control" placeholder="Enter Contact Number">
                                            <label>Guarantor Address:</label>
                                            <input type="text"id="address" class="form-control" placeholder="Enter Address">
                                        </div>
                                    </form>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-block btn-primary btn-flat" style="width: 30%; float: right" onclick="addLoan()">Save</button>
                                </div>
                            </div>
                            <script>
                                function addLoan() {

                                    var lid = document.getElementById('lid').value;
                                    var eid = document.getElementById('eid').value;
                                    var name = document.getElementById('name').value;
                                    var designation = document.getElementById('designation').value;
                                    var contact = document.getElementById('contact').value;
                                    var address = document.getElementById('address').value;
                                    console.log(lid);
                                    $.ajax({
                                        type: "get",
                                        url: 'addLoan',
                                        data: {lid: lid, eid: eid, name: name, designation: designation,contact:contact,address:address},
                                        success: function() {
                                            swal("Successful", "Loan Record Added!", "success");
                                            location.reload();
                                        },
                                        error: function(){
                                            swal("Adding Failed!", "warning")
                                        }
                                    })
                                }
                            </script>
                            <script>
                                function checkEligibility(){
                                    var eid = document.getElementById('eid').value;
                                    $.ajax({
                                        type: "get",
                                        url: 'checkEligibility',
                                        data: {eid: eid},
                                        success: function() {
                                            swal("Eligible!", "success");
                                        },
                                        error: function(){
                                            swal("Not Eligible!", "warning")
                                        }
                                    })
                                }
                            </script>
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->
                <!-- /.tab-pane 6 approved-->
                <div class="tab-pane" id="tab_6">
                    <div class="row" style="margin-top: 25px">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Approved Loans</h3>
                                    <div class="box-tools">
                                        <div class="input-group input-group-sm" style="width: 400px;">
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
                                        <tbody>
                                        <tr>
                                            <th>Loan Scheme</th>
                                            <th>Employee ID</th>
                                            <th>Employee Name</th>
                                            <th>Contact Details</th>
                                            <th>Installments</th>
                                            <th>Total Loan Amount</th>
                                        </tr>
                                        @foreach($approved as $x)
                                            <tr>
                                                <td>{{$x->l_name}}</td>
                                                <td>{{$x->eid}}</td>
                                                <td>{{$x->name}}</td>
                                                <td>{{$x->contact}}</td>
                                                <td>{{$x->installments}}</td>
                                                <td>{{$x->amount}}</td>
                                                <td><button type="button" id="updatedate" value="{{$x->loan_id}}" class="btn btn-primary" data-toggle="modal" data-target="#myModal2"><i class="fa fa-edit"></i></button></td>
                                                {{--<td><a id="updatedate" value="{{$x->loan_id}}" class="btn btn-primary" data-toggle="modal" href="#myModal2"><i class="fa fa-edit"></i></a></td>--}}
                                            </tr>
                                        @endforeach
                                        </tbody></table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->
            </div>
        </div>
      <!--------------------------------------modal for update--------------------------->
      <div class="modal modal-info fade" id="myModal2" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true"></span>Loans</button>
                      <h4 class="modal-title">Add Loan Scheme</h4>
                  </div>
                  <div class="modal-body">
                      <div class="box box-info">
                          <div class="box-body">
                              <form role="form">
                                  <!-- text input -->
                                  <div class="form-group" style="color:black">
                                      <label>Start Date:</label>
                                      <input type="date" class="form-control" id="start_date">
                                      <label>End Date:</label>
                                      <input type="date" class="form-control" id="end_date">
                                  </div>
                              </form>
                          </div>
                          <!-- /.box-body -->
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-outline" onclick="updateDate()">Save changes</button>
                  </div>
              </div>
              <!-- /.modal-content -->
              <script>
                  function updateDate(){
                      var id = document.getElementById('updatedate').value;
                      var start = document.getElementById('start_date').value;
                      var end = document.getElementById('end_date').value;
                      $.ajax({
                          type: "get",
                          url: 'updateDate',
                          data: {id:id, start:start, end:end},
                          success: function() {
                              swal("Successful", "Loan Date Set!", "success");
                              location.reload();
                          },
                          error: function(x,y,z){
                              swal("Failed!", z);
                          }
                      })
                  }
              </script>
              <script>
                  function saveLoanScheme() {
                      var title = document.getElementById('loan_title').value;
                      var description = document.getElementById('loan_description').value;
                      var amount = document.getElementById('loan_amount').value;
                      var interest = document.getElementById('loan_interest').value;
                      var installments = document.getElementById('loan_installments').value;
                      $.ajax({
                          type: "get",
                          url: 'saveLoanScheme',
                          data: {title: title, description: description, amount: amount, interest: interest, installments:installments},
                          success: function() {
                              swal("Successful", "Loan Scheme Added!", "success");
                              location.reload();
                          },
                          error: function(x,y,z){
                              swal("Adding Failed!", z);
                          }
                      })

                  }
              </script>
          </div>
          <!-- /.modal-dialog -->
      </div>
        </div>
        <script>
            function deleteLoanScheme(loanId) {
                swal({
                    title: "Are you sure you want to delete?",
                    text: "You will not be able to recover this record!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Delete",
                    closeOnCancel: true,
                    closeOnConfirm: false },
                    function(isConfirm){
                        $.ajax({
                            method:'get',
                            url:'deleteLoanScheme',
                            data:{id:loanId},
                            success:function(){
                                swal({
                                    title: "Success!",
                                    text: "Record has been successfully removed!",
                                    type: "success",
                                    showCancelButton: false,
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "Ok",
                                    closeOnCancel: true,
                                    closeOnConfirm: false },
                                function(isConfirm){
                                    location.reload();
                                });
                            },
                            error:function(x,y,z){
                                console.log(z);
                            }
                        });
                    }
                );
            }
            function success() {
                swal("Accepted!", "","success")
            }
        </script>

    <div class="modal modal-success fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>Loans</button>
                    <h4 class="modal-title">Add Loan Scheme</h4>
                </div>
                <div class="modal-body">
                    <div class="box box-success">
                        <div class="box-body">
                            <form role="form">
                                <!-- text input -->
                                <div class="form-group" style="color:black">
                                    <label>Title:</label>
                                    <input type="text" class="form-control" id="loan_title">
                                    <label>Description:</label>
                                    <textarea class="form-control" rows="3" id="loan_description" placeholder="Description"></textarea>
                                    <label>Amount:</label>
                                    <input type="number" class="form-control" id="loan_amount">
                                    <label>Interest:</label>
                                    <input type="number" class="form-control" id="loan_interest">
                                    <label>Installments:</label>
                                    <input type="number" class="form-control" id="loan_installments">
                                </div>
                            </form>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline" onclick="saveLoanScheme()">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
</div>
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

<script>
    function alerts() {
                swal({   title: "Are you sure you want to delete?",   text: "You will not be able to recover this record!",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   confirmButtonText: "Delete",   closeOnConfirm: false }, function(){   swal("Deleted!", "Employee Record has been deleted", "success"); });
            }

    function success() {
                swal("Successful", "Data Successfully Saved!", "success")
    }
</script>
    </div>
</body>
</html>
