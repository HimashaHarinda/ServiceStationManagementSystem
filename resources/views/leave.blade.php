<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Employee Management | Attendance</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://localhost:8000/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    {{--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body class="hold-transition skin-blue fixed">
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
                        <li class="active"><a href="leave"><i class="fa fa-calendar-minus-o"></i>Attendance</a></li>
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
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Leave Management
            </h1>
            <ol class="breadcrumb">
                <li><a href="/main"><i class="fa fa-user"></i> Employee</a></li>
                <li class="active">Leave Management</li>
            </ol>
        </section>

        <!-- Main content -->
        <div class="col-md-12" style="background-color:white; padding-top: 30px">
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs" style="background-color:#B1C4E6">
                    <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">For Approval</a>
                    <li><a href="#tab_2" data-toggle="tab" aria-expanded="false">Leave Details</a></li>
                    <li><a href="#tab_3" data-toggle="tab" aria-expanded="false">Employee Leave History</a></li>
                    <li><a href="#tab_4" data-toggle="tab" aria-expanded="false">Record Absence</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane  active" id="tab_1">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Pending for approval</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <table class="table table-condensed">
                                <tbody><tr>
                                    <th>Leave ID</th>
                                    <th>Employee ID</th>
                                    <th>Employee Name</th>
                                    <th>Branch</th>
                                    <th>Leave Type</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Reason</th>
                                    <th>Status</th>
                                </tr>
                                @foreach($leaves as $leave)
                                    <tr>
                                        <td>{{$leave->leave_id}}</td>
                                        <td>{{$leave->eid}}</td>
                                        <td>{{$leave->name}}</td>
                                        <td>{{$leave->bname}}</td>
                                        <td>{{$leave->leave_type}}</td>
                                        <td>{{$leave->start_date}}</td>
                                        <td>{{$leave->end_date}}</td>
                                        <td>{{$leave->reason}}</td>
                                        <td><span class="label label-warning">Pending</span></td>
                                        <td><button type="button" value="{{$leave->leave_id}}" class="btn btn-success btn-sm" onclick="acceptLeave('{{$leave->leave_id}}')"><i class="fa fa-check"></i></button></td>
                                        <td><button type="button" value="{{$leave->leave_id}}" class="btn btn-danger btn-sm" onclick="rejectLeave('{{$leave->leave_id}}')"><i class="fa fa-close"></i></button></td>
                                    </tr>
                                @endforeach
                                </tbody></table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>

                <script>
                    function rejectLeave(id) {
                        alert(id);
                        swal({   title: "Are you sure you want to reject?", type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   confirmButtonText: "Reject",   closeOnConfirm: false,closeOnCancel: true },
                                function(isConfirm){
                                    var leaveId = id;
                                    alert(leaveId);
                                    $.ajax({
                                        type: "get",
                                        url: 'rejectLeave',
                                        data: {leaveId: leaveId},
                                        success: function() {
                                            swal({
                                                title: "Rejected!",
                                                text: "successfully rejected the leave",
                                                type: "warning",
                                                showCancelButton: false,
                                                confirmButtonColor: "#DD6B55",
                                                confirmButtonText: "Ok",
                                                closeOnConfirm: false,
                                                closeOnCancel: true },
                                            function(isConfirm){
                                                location.reload();
                                            });
                                        }
                                    });
                                });
                    }

                    function acceptLeave(id) {
                        var leaveId = id;
                        swal({
                            title: "Are you sure you want to approve the leave?",
                                    type: "warning",

                                    showCancelButton: true,
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "Yes",
                                    closeOnConfirm: false,
                                    closeOnCancel: true },
                                function(isConfirm){
                                    $.ajax({
                                        type: "get",
                                        url: 'approveLeave',
                                        data: {leaveId: leaveId},
                                        success: function() {
                                            swal({
                                                title: "Successful!",
                                                text: "successfully accepted the leave",
                                                type: "success",
                                                showCancelButton: false,
                                                confirmButtonColor: "#DD6B55",
                                                confirmButtonText: "Ok",
                                                closeOnConfirm: false,
                                                closeOnCancel: true },
                                            function(isConfirm){
                                                location.reload();
                                            });
                                        },
                                        error:function(x,y,thrownError){
                                            console.log(thrownError);
                                        }
                                    });
                                });
                    }
                </script>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="col-xs-2">
                                <button type="button" class="btn btn-block btn-success btn-flat" data-toggle="modal" data-target="#myModal"><i class="ion-android-add-circle"></i>&nbsp;Add Leave Details</button>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Leave Details</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <table class="table table-condensed">
                                <tbody><tr>
                                    <th>Designation</th>
                                    <th>Leave Type</th>
                                    <th>No.of Leaves</th>
                                </tr>
                                @foreach($leaveCount as $count)
                                    <tr>
                                        <td>{{$count->title}}</td>
                                        <td>{{$count->leave_type}}</td>
                                        <td>{{$count->no_of_leaves}}</td>
                                    </tr>
                                @endforeach
                                </tbody></table>
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title"></h3>
                        </div>
                        <div class="box-tools">
                            <div class="input-group input-group-sm">
                                <input type="text" name="table_search" id="table_search" class="form-control pull-right" placeholder="Search for Employee Leave History">

                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default" onclick="getEmployee()" data-toggle="modal" data-target="#myModal2" ><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <table class="table table-condensed">
                                <tbody><tr>
                                    {{--<th>Leave ID</th>--}}
                                    <th>Employee Name</th>
                                    <th>Branch</th>
                                    <th>Leave Type</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Reason</th>
                                    <th>Status</th>
                                </tr>
                                @foreach($allLeaves as $allLeave)
                                    <tr>
{{--                                        <td>{{$allLeave->id}}</td>--}}
                                        <td>{{$allLeave->name}}</td>
                                        <td>{{$allLeave->bname}}</td>
                                        <td>{{$allLeave->leave_type}}</td>
                                        <td>{{$allLeave->start_date}}</td>
                                        <td>{{$allLeave->end_date}}</td>
                                        <td>{{$allLeave->reason}}</td>
                                        <?php
                                            if($allLeave->approved==0)
                                                echo '<td><span class="label label-warning">Pending</span></td>';
                                            else if($allLeave->approved==1)
                                                echo '<td><span class="label label-success">Approved</span></td>';
                                            else if($allLeave->approved==2)
                                                echo '<td><span class="label label-danger">Declined</span></td>';
                                            ?>
                                    </tr>
                                @endforeach
                                </tbody></table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_4">
                    <div class="col-md-12">
                        <div class="box box-info collapsed-box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Search Employee Details</h3>
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

                                            <!-- /.box-header -->
                                            <div class="box-tools">
                                                <div class="input-group input-group-sm" style="width: 400px;">
                                                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search name">

                                                    <div class="input-group-btn">
                                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-body table-responsive no-padding">
                                                <table class="table table-hover">
                                                    <tbody><tr>
                                                        <th>Employee ID</th>
                                                        <th>Employee Name</th>
                                                        <th>Designation</th>
                                                        <th>Branch</th>
                                                    </tr>
                                                    </tbody></table>
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                        <!-- /.box -->
                                    </div>
                                </div>

                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <br><br>
                    <div class="col-md-12">
                    <div align="center">
                        <!-- Horizontal Form -->
                        <div class="box box-warning" style="width: 80%; top:20px;">
                            <div class="box-header with-border">
                                <h3 class="box-title">Record Leave</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form class="form-horizontal">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="eid" class="col-sm-2 control-label">Employee ID</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="eid" id="eid" placeholder="Enter ID" style="width:80%">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="leave_type" class="col-sm-2 control-label">Leave Type</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" style="width:80%" name="leave_type" id="leave_type">
                                                <option>Select Leave Type</option>
                                                @foreach($leaveTypes as $leaveType)
                                                    <option value="{{ $leaveType->lid }}">{{$leaveType->leave_type}} - {{$leaveType->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group" method="post">
                                        <label class="col-sm-2 control-label">Leave Start Date</label>
                                        {{--<style>--}}
                                        {{--{z-index:1151 !important;}--}}
                                        {{--</style>--}}
                                        <div class="col-sm-10">
                                            <div class="input-group" style="width:80%">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="date" class="form-control" name="start_date" id="start_date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Leave End Date</label>
                                        {{--<style>--}}
                                        {{--{z-index:1151 !important;}--}}
                                        {{--</style>--}}
                                        <div class="col-sm-10">
                                            <div class="input-group" style="width:80%">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="date" class="form-control" name="end_date" id="end_date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Reason</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="reason" id="reason" placeholder="Enter reason" style="width:80%">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="button" class="btn btn-primary pull-center" onclick="return recordLeave()">Submit</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <script>
                        function recordLeave() {
                            var eid = document.getElementById('eid').value;
                            var leave_type = document.getElementById('leave_type').value;
                            var start_date = document.getElementById('start_date').value;
                            var end_date = document.getElementById('end_date').value;
                            var reason = document.getElementById('reason').value;
                            console.log(start_date);
                            if(Date.parse(start_date)>Date.parse(end_date)) {
                                alert("invalid date");
                                return false;
                            }
                            $.ajax({
                                type: 'get',
                                url: 'recordLeave',
                                data: {eid: eid, leave_type: leave_type, start_date: start_date, end_date: end_date, reason:reason},
                                success: function() {
                                    swal({
                                                title: "Successful!",
                                                text: "Successfully leave recorded!",
                                                type: "success",
                                                showCancelButton: false,
                                                confirmButtonColor: "#1B28FF",
                                                confirmButtonText: "Apply",
                                                cancelButtonText: "Close",
                                                closeOnConfirm: false,
                                                closeOnCancel: true},
                                            function (isConfirm) {
                                                location.reload();
                                            });
                                },
                                error: function(){
                                    swal("Warning!","Failed to record leave!", "warning")
                                }
                            })
                        }
                    </script>
                </div>
                <!-- /.tab-pane -->
            </div>
        </div>
        <!-- /.content -->
        <!--------------------------------modal---------------------------------------->
        <div class="modal modal-success fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>Employee</button>
                        <h4 class="modal-title">Add Leave Details</h4>
                    </div>
                    <div class="modal-body">
                            <div class="box box-success">
                                <div class="box-body">
                                    <form role="form">
                                        <!-- text input -->
                                        <div class="form-group" style="color:black">
                                            <label>Leave Type Title:</label>
                                            <input type="text" class="form-control" id="leave-type">
                                            <label>Employee Type:</label>
                                            <br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="permanent">
                                            Permanent &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="contract">
                                            Contract<br>
                                            <label>Employee Designation:</label>
                                            <select class="form-control" name="designation" id="designation">
                                                <option>Select Designation</option>
                                                @foreach($designations as $designation)
                                                    <option value="{{ $designation->id }}">{{$designation->title}}</option>
                                                @endforeach
                                            </select>
                                            <label>No of leaves:</label>
                                            <input type="number" min="1" class="form-control" id="number">
                                        </div>
                                    </form>
                                </div>
                                <!-- /.box-body -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-outline" onclick="saveLeaveInfo()">Save changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->

                <script>
                    function saveLeaveInfo() {
                        var title = document.getElementById('leave-type').value;
                        var emp_type = document.getElementById('optionsRadios1').value;
                        var designation = document.getElementById('designation').options[document.getElementById('designation').selectedIndex].value;
                        var number = document.getElementById('number').value;
                        console.log(title)
                        console.log(emp_type)
                        console.log(designation)
                        $.ajax({
                            type: "get",
                            url: 'saveLeaveInfo',
                            data: {title: title, emp_type: emp_type, designation: designation, number: number},
                            success: function(x) {
                                swal("Successful", "Leave Type Added!", "success");
                                location.reload();
                            },
                            error: function(){
                                swal("Adding Failed!", "warning")
                            }
                        })

                    }
                </script>
            </div>
            <!-- /.modal-dialog -->
        </div>

        <!--------------------------------modal---------------------------------------->
        <div class="modal modal-info fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>Attendance</button>
                        <h4 class="modal-title">Employee Leave Summary</h4>
                    </div>
                    <div class="modal-body">
                        <div class="box box-info">
                            <div class="box-body">
                                <div class="box">
                                    <div class="box-header">
                                        <h3 class="box-title">Leave Details</h3>
                                    </div>
                                    <form role="form">
                                        <!-- text input -->
                                        <div class="form-group" style="color: black">
                                            <label>ID:</label>
                                            <input type="text" class="form-control" id="employee-id" disabled>
                                            <label>Name:</label>
                                            <input type="text" disabled class="form-control" required pattern="^[a-zA-Z\s]*$" title ='only letters allowed' id="employee-name">
                                        </div>
                                    </form>
                                    <!-- /.box-header -->
                                    <div class="box-body no-padding">
                                        <table class="table table-condensed" style="color: black" id="myTable" name="myTable">
                                            <tbody><tr>
                                                <th>Leave Type</th>
                                                <th>Entitled</th>
                                                <th>Taken</th>
                                            </tr>
                                            </tbody></table>
                                    </div>
                                    <script>
                                        function getEmployee() {
                                            var id = document.getElementById('table_search').value;
                                            var myTable = document.getElementById('myTable');
                                            $.ajax({
                                                type: "get",
                                                url: 'fillEmployeeLeave',
                                                data: {id: id},
                                                success: function(x) {
                                                    var details = JSON.parse(x);
                                                    ///myTable.rows[0].cells[1].innerHTML=details[0].eid;
                                                    document.getElementById('employee-id').value = details[0].eid;
                                                    document.getElementById('employee-name').value = details[0].name;

                                                    for (var i=0;i<details.length;i++){
                                                        var rowCount = myTable.rows.length;
                                                        var row = myTable.insertRow(rowCount);

                                                        var cell1 = row.insertCell(0);
                                                        var cell2 = row.insertCell(1);
                                                        var cell3 = row.insertCell(2);

                                                        cell1.innerHTML=details[i].leave_type;
                                                        cell2.innerHTML=details[i].test2;
                                                        cell3.innerHTML=details[i].test1;

                                                    }
                                                },
                                                error:function(){

                                                }
                                            })
                                        }
                                    </script>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    {{--<footer class="main-footer">--}}
        {{--<!-- To the right -->--}}
        {{--<div class="pull-right hidden-xs">--}}
            {{--Anything you want--}}
        {{--</div>--}}
        {{--<!-- Default to the left -->--}}
        {{--<strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.--}}
    {{--</footer>--}}
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<script src="../../plugins/jQuery/jQuery-2.2.0.min.js"></script>

<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>

<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
{{--<script src="dist/js/pages/dashboard2.js"></script>--}}


<script src="../../dist/js/demo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
