<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Employee Management | Recruitments</title>
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
                        <li class="active"><a href="AddEmployee"><i class="fa fa-user-plus"></i>Recruitment</a></li>
                        <li><a href="EmployeeInformation"><i class="fa fa-book"></i>Information</a></li>
                        <li><a href="payroll"><i class="fa fa-dollar"></i>Payroll Management</a></li>
                        <li><a href="leave"><i class="fa fa-calendar-minus-o"></i>Attendance</a></li>
                        <li><a href="EmployeeLoans"><i class="fa fa-credit-card"></i>Employee Loans</a></li>
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
    <div class="content-wrapper" style="height: 100%">
        <!-- Content Header (Page header) -->
        <section class="content-header" >
            <h1>
                Employee Management
            </h1>
            <ol class="breadcrumb">
                <li><a href="/main"><i class="fa fa-user"></i> Employee</a></li>
                <li class="active">Add</li>
            </ol>
        </section>

        <!-- Main content -->
        <div align="center">
            <div class="col-md-12">
                <br>
                <div class="callout callout-info">
                    <h4>Reminder!</h4>
                    You have an interview scheduled for today
                </div>
            </div>
            <div class="col-md-12" style="background-color: whitesmoke; padding-bottom: 100px">
                <div class="box box-info collapsed-box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Employee</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="display: none;">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">
                                    <form class="form-horizontal" action="added" method="post" onsubmit="return validate()">
                                        {{--@if (count($errors))>0--}}
                                        {{--<div class="alert alert-danger">--}}
                                            {{--<strong>Save Failed</strong><br><br>--}}
                                            {{--<ul>--}}
                                                {{--@foreach ($errors->all() as $error)--}}
                                                    {{--<li>{{ $error }}</li>--}}
                                                 {{--@endforeach--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                        {{--@endif--}}
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="inputName" class="col-sm-2 control-label">Name</label>

                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" pattern="^[a-zA-Z\s]*$" required name="name" id="name" placeholder="Enter name" title='only letters' style="width:80%">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputn" class="col-sm-2 control-label">NIC</label>

                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" required name="nic" id="nic" placeholder="Enter NIC" pattern="^\d{9}[V]$" title='NIC format (Format: XXXXXXXXXV)' style="width:80%">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName" class="col-sm-2 control-label">Email</label>

                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" required name="mail" id="mail" placeholder="Enter mail"style="width:80%">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputdob" class="col-sm-2 control-label">Date of Birth</label>
                                                {{--<style>--}}
                                                {{--{z-index:1151 !important;}--}}
                                                {{--</style>--}}
                                                <div class="col-sm-10">
                                                    <div class="input-group" style="width:80%">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                        <input type="date" class="form-control" name="dob" id="dob" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputGender" class="col-sm-2 control-label">Gender</label>

                                                <div class="col-sm-10" align="left" style="left: 100px">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="male" checked="">
                                                            Male
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="female" checked="">
                                                            Female
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress" class="col-sm-2 control-label">Address</label>

                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" pattern="^[a-zA-Z\s]*$" name="address" required id="address" title='only letters' placeholder="Enter address" style="width:80%">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputtp" class="col-sm-2 control-label" >Contact No.</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="phone"  required id="phone" pattern="^\d{4}\d{3}\d{3}$" title='(Format: XXXXXXXXXX)' placeholder="Enter telephone no" style="width:80%">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputJoinedDate" class="col-sm-2 control-label">Joined Date</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group" style="width:80%">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                        <input type="date" name="date" required id="date" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputsType" class="col-sm-2 control-label">Service Type</label>

                                                <div class="col-sm-10" align="left" style="left: 100px">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" required name="optionsRadios2" id="optionsRadios2" value="janitorial" checked="">
                                                            Janitorial
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" required name="optionsRadios2" id="optionsRadios2" value="vehicle" checked="">
                                                            Vehicle Grooming and Valet
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputdesignation" class="col-sm-2 control-label">Designation</label>

                                                <div class="col-sm-10">
                                                    <select class="form-control" style="width:80%" name="designation" id="designation">
                                                        <option>Select Designation</option>
                                                        @foreach($designations as $designation)
                                                            <option value="{{ $designation->id }}">{{$designation->title}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputdate" class="col-sm-2 control-label">Branch</label>

                                                <div class="col-sm-10">
                                                    <select class="form-control" style="width:80%" name="branch" id="branch">
                                                        <option>Select Branch</option>
                                                        @foreach($branches as $branch)
                                                            <option value="{{ $branch->id }}">{{$branch->bname}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputdate" class="col-sm-2 control-label">Manager</label>

                                                <div class="col-sm-10">
                                                    <select class="form-control" style="width:80%" name="manager" id="manager">
                                                        <option>Select Manager</option>
                                                        @foreach($managers as $manager)
                                                            <option value="{{ $manager->eid }}">{{$manager->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputdate" class="col-sm-2 control-label">Type</label>

                                                <div class="col-sm-10">
                                                    <select class="form-control" style="width:80%" name="type" id="type">
                                                        <option>Select Employee Type</option>
                                                            <option value="Contract">Contract</option>
                                                        <option value="Permanent">Permanent</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                        <script>
                                            function validate(){
                                                var designation = document.getElementById('designation').value;
                                                var manager = document.getElementById('manager').value;
                                                var branch = document.getElementById('branch').value;
                                                if(designation=="Select Designation"){
                                                    alert("Please select a designation");
                                                    return false;
                                                }
                                                else if(branch == "Select branch"){
                                                    alert("Please select a branch");
                                                    return false;

                                                }
                                                else if(manager == "Select Manager"){
                                                    alert("Please select a manager");
                                                    return false;
                                                }
                                            }
                                        </script>
                                        <div class="box-footer">

                                            <button type="submit" class="btn btn-primary pull-center">Add Employee</button>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            {{--<button type="submit" class="btn btn-danger pull-center">Cancel</button>--}}
                                        </div>
                                        <!-- /.box-footer -->
                                        <script>
                                            function success() {
                                                swal("Successful", "Data Successfully Saved!", "success")
                                                location.reload();
                                            }
                                        </script>
                                    </form>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <div class="box box-success collapsed-box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Schedule interview</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="display: none;">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">
                                    <!-- /.box-body -->
                                    <form class="form-horizontal" onsubmit="return schedule()">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="name" class="col-sm-2 control-label">Candidate Name</label>

                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="can_name" id="can_name" pattern="^[a-zA-Z\s]*$" title='(only letters)' required placeholder="Enter name" style="width:80%">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone" class="col-sm-2 control-label">Contact No.</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="can_phone" id="can_phone" required  pattern="^\d{4}\d{3}\d{3}$" title='(Format: XXXXXXXXXX)'
                                                           placeholder="Enter telephone no" style="width:80%">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="position" class="col-sm-2 control-label">Position</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="can_position" id="can_position"pattern="^[a-zA-Z\s]*$" title='(only letters)' required placeholder="Enter position" style="width:80%">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="date" class="col-sm-2 control-label">Date scheduled</label>
                                                {{--<style>--}}
                                                {{--{z-index:1151 !important;}--}}
                                                {{--</style>--}}
                                                <div class="col-sm-10">
                                                    <div class="input-group" style="width:80%">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                        <input type="date" class="form-control" required name="initial_date" id="initial_date">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="time" class="col-sm-2 control-label">Time</label>
                                                {{--<style>--}}
                                                {{--{z-index:1151 !important;}--}}
                                                {{--</style>--}}
                                                <div class="col-sm-10">
                                                    <div class="input-group" style="width:80%">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                        <input type="time" class="form-control" required name="initial_time" id="initial_time">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->

                                        <div class="box-footer">

                                            <button type="submit" class="btn btn-primary pull-center">Schedule</button>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            {{--<button type="submit" class="btn btn-danger pull-center">Cancel</button>--}}
                                        </div>
                                        <!-- /.box-footer -->
                                    </form>
                                </div>
                                <!-- /.box -->
                            </div>
                            <script>
                                function schedule() {
                                    var today = new Date();
                                    var format = today.toISOString().substring(0, 10);
                                    var name = document.getElementById('can_name').value;
                                    var position = document.getElementById('can_position').value;
                                    var date = document.getElementById('initial_date').value;
                                    var time = document.getElementById('initial_time').value;
                                    var contact = document.getElementById('can_phone').value;
                                    if(Date.parse(format)>Date.parse(date)){
                                        alert("invalid date");
                                        return false;
                                    }else {
                                        $.ajax({
                                            type: 'get',
                                            url: 'scheduleInterview',
                                            data: {
                                                name: name,
                                                position: position,
                                                date: date,
                                                time: time,
                                                contact: contact
                                            },
                                            success: function (x) {
                                                if(x == 0) {
                                                    swal("Successful", "Data Successfully Saved!", "success");
                                                    location.reload();
                                                }
                                                else{
                                                    swal("Failed", "Data Not Saved!" + z, "error");
                                                }
                                            },
                                            error: function (x, y, z) {
                                                swal("Failed", "Data Not Saved!" + z, "error");
                                            }
                                        });
                                    }
                                }
                            </script>
                        </div>

                    </div>
                    <!-- /.box-body -->
                </div>
                <div class="box box-warning collapsed-box">
                    <div class="box-header with-border">
                        <h3 class="box-title">View interview details</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="display: none;">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">
                                    <!-- /.box-body -->
                                    <form class="form-horizontal">
                                        <div class="box">
                                            <!-- /.box-header -->
                                            <div class="box-body table-responsive no-padding">
                                                <table class="table table-hover">
                                                    <tbody>
                                                    <tr>
                                                        <th>Candidate name</th>
                                                        <th>Contact</th>
                                                        <th>Position</th>
                                                        <th>Date</th>
                                                        <th>Time</th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                    @foreach($interviews as $interview)
                                                        <tr>
                                                            <td>{{$interview->cand_name}}</td>
                                                            <td>{{$interview->contact}}</td>
                                                            <td>{{$interview->position}}</td>
                                                            <td>{{$interview->date}}</td>
                                                            <td>{{$interview->time}}</td>
                                                            <td><button type="button" id="update" onclick="getData({{$interview->cand_id}})" value="" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button></td>
                                                            <td><button type="button" id="delete" onclick="deleteInterview({{$interview->cand_id}})" class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody></table>
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                    </form>
                                    <script>
                                        function getData(data){
                                            $.ajax({
                                                type: "get",
                                                url: 'fillInterview',
                                                data: {data: data},
                                                success: function(x) {
                                                    var details = JSON.parse(x);
                                                    document.getElementById('can_id').value=details[0].cand_id;
                                                    document.getElementById('can2_name').value=details[0].cand_name;
                                                    document.getElementById('can_date').value = details[0].date;
                                                    document.getElementById('can_time').value = details[0].time;
                                                },
                                                error:function(x,y,z){
                                                    swal("Error!", z,"error");
                                                }
                                            })
                                        }

                                        function deleteInterview(id){
                                            $.ajax({
                                                type: "get",
                                                url: 'deleteInterview',
                                                data: {id: id},
                                                success: function(x) {
                                                    swal("Deleted!", "Interview removed");
                                                    location.reload();
                                                },
                                                error:function(x,y,z){
                                                    swal("Error!", z,"error");
                                                }
                                            })
                                        }
                                    </script>
                                </div>
                                <!-- /.box -->
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                </div>
            </div>
        </div>
    </div>
    <!-- ./wrapper -->
    <div class="modal modal-info fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>Interview</button>
                    <h4 class="modal-title">Update</h4>
                </div>
                <div class="modal-body">
                    <div class="box box-info">
                        <div class="box-body">
                            <form role="form">
                                <!-- text input -->
                                <div class="form-group" style="color:black">
                                    <label>ID:</label>
                                    <input type="text" class="form-control" id="can_id" disabled>
                                    <label>Name:</label>
                                    <input type="text" class="form-control" id="can2_name" disabled>
                                    <label>date:</label>
                                    <input type="date" class="form-control" id="can_date" required>
                                    <label>time:</label>
                                    <input type="time" class="form-control" id="can_time" required>
                                </div>
                            </form>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline" onclick="saveInterview()">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->

            <script>
                function saveInterview() {
                    var today = new Date();
                    var format = today.toISOString().substring(0, 10);
                    var id = document.getElementById('can_id').value;
                    var name = document.getElementById('can2_name').value;
                    var date = document.getElementById('can_date').value;
                    var time = document.getElementById('can_time').value;
//                    if(Date.parse(format)>Date.parse(date)){
//                        alert("invalid date");
//                        return false;
//                    }
                    $.ajax({
                        type: "get",
                        url: 'saveInterview',
                        data: {id:id, name:name, date:date, time:time},
                        success: function() {
                            swal("Successful", "Updated!", "success");

                        },
                        error: function(x,y,z){
                            swal("Error!", z,"error");
                        }
                    });

                }
            </script>
        </div>
        <!-- /.modal-dialog -->
</div>



<!-- jQuery 2.2.0 -->
<script src="../../plugins/jQuery/jQuery-2.2.0.min.js"></script>
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{--<script src="dist/js/pages/dashboard2.js"></script>--}}


<script src="../../dist/js/demo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script>
//    $('#dob').datepicker({
//        autoclose: true
//
//    });
//    $('#date').datepicker({
//        autoclose: true
//
//    });
    
</script>
</div>
</body>
</html>
