<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Customer Management | Register Customer</title>
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
    
<!--    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="hhttps://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
        //OrderID load

        var order_id = "";
        var start1 = '<select class="form-control" id="order_load" name="order_load">';
        var end1 = '</select>';
        $.ajax({
            type: "GET",
            url: './getOrders',
            success: function(data) {
                console.log(data);


                for(var i=0; i<data.length; i++){
                    order_id += '<option value="'+data[i]['janOrderId']+'">'+data[i]['janOrderId']+'</option>';
                }
                $('#order_load').html(start1+order_id+end1);
            }
        });

        //Supervisor load

        var supervisors = "";
        var start2 = '<select class="form-control" id="supervisor_load" name="supervisor_load">';
        var end2 = '</select>';
        $.ajax({
            type: "GET",
            url: './getSupervisors',
            success: function(data) {
                console.log(data);


                for(var i=0; i<data.length; i++){
                    supervisors += '<option value="'+data[i]['name']+'">'+data[i]['name']+'</option>';
                }
                $('#supervisor_load').html(start2+supervisors+end2);
            }
        });

        //Janitor load

        var jan = "";
        var start3 = '<select class="form-control" id="janitor_load" name="janitor_load">';
        var end3 = '</select>';
        $.ajax({
            type: "GET",
            url: './getJanitors',
            success: function(data) {
                console.log(data);


                for(var i=0; i<data.length; i++){
                    jan += '<option value="'+data[i]['name']+'">'+data[i]['name']+'</option>';
                }
                $('#janitor_load').html(start3+jan+end3);
            }
        });

        function addEmp2Order() {

            var o = $('#orderId option:selected').val();
            var s = $('#supervisorId option:selected').val();
            var e = $('#empId option:selected').val();

            $.ajax({
                type: "GET",
                data: {
                    'orderId': o,
                    'supervisorId': s,
                    'empId': e
                },
                url: './addEmp2Order',
                success: function (data) {
                    console.log(data);
                    location.reload();

                },
                error: function (error) {
                    alert(error.status + " : " + error.statusText);
                    console.log(JSON.stringify(error));
                }
            });
        }

    </script>
    <style>
        .btn-floating {
            display: inline-block;
            color: #fff;
            position: relative;
            overflow: hidden;
            z-index: 1;
            width: 37px;
            height: 37px;
            line-height: 37px;
            padding: 0;
            background-color: #26a69a;
            border-radius: 50%;
            transition: .3s;
            cursor: pointer;
            vertical-align: middle;
        }
        .btn-floating i {
            width: inherit;
            display: inline-block;
            text-align: center;
            color: #fff;
            font-size: 1.6rem;
            line-height: 37px;
        }
        .btn-floating:hover {
            background-color: #26a69a;
        }
        .btn-floating:before {
            border-radius: 0;
        }
        .btn-floating.btn-large {
            width: 55.5px;
            height: 55.5px;
        }
        .btn-floating.btn-large i {
            line-height: 55.5px;
        }
        button.btn-floating {
            border: none;
        }
        .fixed-action-btn {
            position: fixed;
            right: 23px;
            bottom: 23px;
            padding-top: 15px;
            margin-bottom: 0;
            z-index: 998;
        }
        .fixed-action-btn.active ul {
            visibility: visible;
        }
        .fixed-action-btn.horizontal {
            padding: 0 0 0 15px;
        }
        .fixed-action-btn.horizontal ul {
            text-align: right;
            right: 64px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            height: 100%;
            left: initial;
            width: 500px;
            /*width 100% only goes to width of button container */
        }
        .fixed-action-btn.horizontal ul li {
            display: inline-block;
            margin: 15px 15px 0 0;
        }
        .fixed-action-btn ul {
            left: 0;
            right: 0;
            text-align: center;
            position: absolute;
            bottom: 64px;
            margin: 0;
            visibility: hidden;
        }
        .fixed-action-btn ul li {
            margin-bottom: 15px;
        }
        .fixed-action-btn ul a.btn-floating {
            opacity: 0;
        }
        .btn-large {
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        }
        .circle {
            border-radius: 150em;
            border: 0px solid #B7B1B1;
            box-shadow: 0px 5px 2px rgba(0, 0, 0, 0.3);
        }
        .circle:hover {
            box-shadow: 0px 7px 2px rgba(0, 0, 0, 0.3);
        }
    </style>





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
    <li class="treeview">
        <a href="#">
            <i class="fa fa-user"></i> <span>Customer Management</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="RegisterCustomer"><i class="fa fa-user-plus"></i> Register Customer</a>
            </li>
            <li><a href="CustomerLoyalty"><i class="fa fa-thumbs-o-up"></i> Customer Loyalty</a>
            </li>
            <li><a href="Feedback"><i class="fa fa-commenting"></i>Customer Feedback</a>
            </li>
            <li><a href="Reports"><i class="fa fa-file-text"></i>Reports</a>
            </li>
            <li><a href="CustomerDeficit"><i class="fa fa-minus-square"></i>Customer Deficits</a>
            </li>
        </ul>
    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-calendar-minus-o"></i> <span>Service Management</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="assignments"><i class="fa fa-male"></i> <span>Assignments</span></a>
            </li>
            <li><a href="plans"><i class="fa fa-check-square"></i> <span>Service Plans</span></a>
            </li>
            <li><a href="logs"><i class="fa fa-file-text-o"></i> <span>Logs</span></a>
            </li>
            <li><a href="reports"><i class="fa fa-pencil-square-o"></i> <span>Reports</span></a>
            </li>
        </ul>
    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-users"></i><span>Employee Management</span>
            <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="AddEmployee"><i class="fa fa-user-plus"></i>Recruitment</a>
            </li>
            <li><a href="EmployeeInformation"><i class="fa fa-book"></i>Information</a>
            </li>
            <li><a href="payroll"><i class="fa fa-dollar"></i>Payroll Management</a>
            </li>
            <li><a href="leave"><i class="fa fa-calendar-minus-o"></i>Attendance</a>
            </li>
            <li><a href="EmployeeLoans"><i class="fa fa-credit-card"></i>Employee Loans</a>
            </li>
        </ul>
    </li>

    <li class="treeview active">
        <a href="#">
            <i class="fa fa-bar-chart"></i><span>Janitorial Management</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
                <li><a href="emp"><i class="fa fa-users"></i> Employee Management</a></li>
                <li><a href="cust"><i class="fa fa-user"></i> Customer Management</a></li>
                <li><a href="package"<i class="fa fa-cubes"></i> Categories</a></li>
                <li class="active"><a href="order"><i class="fa fa-cart-plus"></i> Order Management</a></li>
        </ul>
    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-money"></i><span>Finance Management</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="assets"><i class="fa fa-building"></i>Asset Management</a>
            </li>
            <li><a href="assetDep"><i class="fa fa-tasks"></i>Asset Depreciation Information</a>
            </li>
            <li><a href="liabilities"><i class="fa fa-plus-circle"></i>Liability Management</a>
            </li>
            <li><a href="liabilityInterest"><i class="fa fa-object-group"></i>Liability Interest Information</a>
            </li>
            <li><a href="income"><i class="fa fa-files-o"></i>Income Management</a>
            </li>
            <li><a href="expense"><i class="fa fa-credit-card"></i>Expenditure Management</a>
            </li>
        </ul>
    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-cube"></i><span>Inventory Management</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="AddNewItem"><i class="fa fa-plus"></i>Add New Item</a>
            </li>
            <li><a href="Inventory"><i class="fa fa-cubes"></i>Inventory</a>
            </li>
            <li><a href="Purchases"><i class="fa fa-shopping-cart"></i>Purchases</a>
            </li>
            <li><a href="PurchaseReturns"><i class="fa fa-refresh"></i>Purchase Return</a>
            </li>
            <li><a href="Sales"><i class="fa fa-money"></i>Sales</a>
            </li>
            <li><a href="PurchaseOrder"><i class="fa fa-mail-forward "></i>Send PO</a>
            </li>
            <li><a href="Supplier"><i class="fa fa-truck"></i>Suppliers</a>
            </li>
        </ul>
    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-bar-chart"></i><span>Work-Shift Management</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="CreateShifts"><i class="fa fa-male"></i>Create Shifts</a>
            </li>
            <li><a href="AssignEmployees"><i class="fa fa-plus-circle"></i>Assign Employees</a>
            </li>
            <li><a href="ReplaceEmployees"><i class="fa fa-exchange"></i>Replace Employees</a>
            </li>
            <li><a href="RemoveEmployees"><i class="fa fa-fw fa-close">&nbsp;&nbsp;&nbsp;</i>Remove Employees</a>
            </li>
            <li><a href="EfficiencyAnalysis"><i class="fa fa-fw fa-bar-chart">&nbsp;&nbsp;&nbsp;</i>Efficiency Analysis</a>
            </li>
            <li><a href="OverWorkedEmployees"><i class="fa fa-fw fa-calendar-minus-o">&nbsp;&nbsp;&nbsp;</i>Over Worked Employees</a>
            </li>
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
            <h1>
                Order Management
            </h1>

        </section>



        <script>

           function deleteOrder(janOrderId) {
                swal({
                            title: "Are you sure you want to delete?",
                            text: "You will not be able to recover this record!",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText: "Delete",
                            closeOnConfirm: false
                        },

                        function(confirm) {
                            if (confirm) {

                                $.ajax({
                                    method: 'get',
                                    url: 'deleteOrder',
                                    data: {
                                        janOrderId: janOrderId
                                    },
                                    success: function() {
                                        swal({
                                                    title: "Deleted!",
                                                    text: "Successfully deleted!",
                                                    type: "warning",
                                                    showCancelButton: false,
                                                    confirmButtonColor: "#DD6B55",
                                                    confirmButtonText: "Ok",
                                                    closeOnConfirm: false
                                                },
                                                function(confirm) {
                                                    location.reload();
                                                });
                                    },
                                    error: function(x, y, thrownError) {
                                        console.log(thrownError);
                                    }
                                });
                            } else {}
                        }
                );
            }

            function success() {
                swal("Successful", "Data Successfully Saved!", "success")
                location.reload();
            }
            
            
            
        </script>

        <!-- Main content -->
        <section class="content">

            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">


                    <li class="active"><a href="#tab_1" data-toggle="tab"> Order Management </a>
                    </li>
                    <li><a href="#tab_2" data-toggle="tab"> Assign Employees </a>
                    </li>

                    <div class="tab-content">

                        <div class="tab-pane active" id="tab_1">
                            <div class="container-fluid">
                                <div class="clearfix"></div>
                                <br>

                                <div class="box">
                                    <div class="box-body">
                                        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                            
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <table id="orderDetails" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">

                                                        <thead>
                                                            
                                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Order ID</th>    
                                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Customer</th>
                                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Order Date</th>
                                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Appointment Date</th>
                                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Amount</th>
                                                        
                                                        </thead>
                                                        <tbody>

                                                        @foreach ($orders as $order)
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1">{{ $order->janOrderId }}</td>
                                                                <td>{{ $order->customer }}</td>
                                                                <td>{{ $order->orderDate }}</td>
                                                                <td>{{ $order->reservationDate}}</td>
                                                                <td>{{ $order->amount }}</td>
                                                                <td>
                                                                    <button class="btn btn-danger" value="{{$order->janOrderId}}" onclick="deleteOrder('{{$order->janOrderId}}')">Delete</button>
                                                                </td>
                                                            </tr>
                                                        @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="tab_2">
                            <div class="container-fluid">
                                <div class="clearfix"></div>
                                <br>
                                <div class="box">
                                    <div class="box-body">
                                            
                                        <form role="form" id="order_form" method="POST" action="{{url('addEmp2Order')}}">
                                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                            
                                        <div class="row">
                                                <div class="form-group">
                                                    <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Order ID: </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                        <div name="order_load" id="order_load">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <br />
                                        
					
                                        
					<div class="row">
                                            <div class="form-group">
                                                <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Select Supervisor: </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                        <div name="supervisor_load" id="supervisor_load">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <br />
										
					<div class="row">
                                                <div class="form-group">
                                                    <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Select Janitors: </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                        <div name="janitor_load" id="janitor_load">
                                                            
                                                        </div>
                                                    </div>

                                                </div>
                                        </div>
                                        <br />
										
										                                       
                                        </form>
                                        <div class="row">
                                            <div class="form-group">
                                                    <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                        <button type="submit" class="btn btn-primary">Assign</button>
                                                    </div>
                                            </div>
                                        </div>
                                        <br>
                
                                    </div>
                                    
                                    <div class="box-body">
                                        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                            
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <table id="orderDetails" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">

                                                        <thead>
                                                            
                                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Order ID</th>    
                                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Supervisor</th>
                                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Janitors</th>                                                        
                                                        </thead>
                                                        <tbody>

                                                        @foreach ($table as $order)
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1">{{ $order->orderId }}</td>
                                                                <td>{{ $order->supervisorId }}</td>
                                                                <td>{{ $order->empId }}</td>
                                                                <td>
                                                                    <button class="btn btn-danger" value="{{$order->orderId}}" onclick="deleteOrder('{{$order->orderId}}')">Delete</button>
                                                                </td>
                                                            </tr>
                                                        @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>




                        <div class="fixed-action-btn" style="bottom: 55px; right: 24px;">
                            <a class="btn-floating btn-large" rel="tooltip" title="Add New Order" data-toggle="modal" data-target="#orderModal" style=" background-color: #F44336" data-toggle="modal" data-target="#caseModal">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>

                        <div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">New Order</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <form role="form" id="order_form" method="POST" action="{{url('addOrder')}}">

                                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 
                                            <div class="row">
                                                <div class="form-group">
                                                    <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Appointment Date</div>
                                                    <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                        <div class='row input-group date' id='date' style="padding-left:15px; padding-right: 15px;">
                                                            <input type='text' class="form-control" id="date" name="date" />
                                                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br />

                                            <div class="row">
                                                <div class="form-group">
                                                    <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Customer Name</div>
                                                    <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
<!--                                                        <input id="cust" name="custName" type="text" placeholder="" class="form-control input-md" required>-->
                                                        <div id="cust_name">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br />

                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-12 col-sm-6 col-xs-8 col-xxs-12">
                                                        <label>
                                                            <input type="checkbox" name="chk_floor" id="chk_floor"> Floor cleaning</label>
                                                            <input type="hidden" name="cat_id_1" id="cat_id_1" value="">
                                                            <div class="radio" id="main_cat_1">
<!--                                                                <label>
                                                                    <input type="radio" name="floor">Hardwood Flooring</label>
                                                                <label>
                                                                    <input type="radio" name="floor">Stone Flooring</label>
                                                                <label>
                                                                    <input type="radio" name="floor">Tile Flooring</label>
                                                                <label>
                                                                    <input type="radio" name="floor">Carpet Flooring</label>
                                                                <label>
                                                                    <input type="radio" name="floor">Laminate Flooring</label>
                                                                <label>
                                                                    <input type="radio" name="floor">Concrete Flooring</label>-->
                                                            </div>
                                                        <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Number of rooms :</div>
                                                        <div class="col-md-8">
                                                            <input id="in_floor" name="in_floor" type="number" placeholder="" class="form-control input-md">
                                                        </div>
                                                        <br />
                                                        <br>
                                                        <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Total square feet :</div>
                                                        <div class="col-md-8">
                                                            <input id="sm_1" name="sm_1" type="number" placeholder="(approximately:)" class="form-control input-md">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-12 col-sm-6 col-xs-8 col-xxs-12">
                                                        <label>
                                                            <input type="checkbox" name="chk_roof" id="chk_roof"> Roof cleaning</label>
                                                            <input type="hidden" name="cat_id_2" id="cat_id_2" value="">
                                                        <div class="radio" id="main_cat_2">
<!--                                                            <label>
                                                                <input type="radio" name="roof">Asphalt shingles</label>
                                                            <label>
                                                                <input type="radio" name="roof">Wood shake</label>
                                                            <label>
                                                                <input type="radio" name="roof">Slate shingles:Rock</label>
                                                            <label>
                                                                <input type="radio" name="roof">Metal</label>
                                                            <label>
                                                                <input type="radio" name="roof">Tile</label>-->
                                                        </div>
                                                        <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Total square feet :</div>
                                                        <div class="col-md-8">
                                                            <input id="sm_2" name="sm_2" type="number" placeholder="(approximately:)" class="form-control input-md">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br />

                                            <div class="row">
                                                <div class="col-md-12 col-sm-6 col-xs-8 col-xxs-12">
                                                    <div class="form-group">
                                                        <label>
                                                            <input type="checkbox" name="chk_rooftop" id="chk_rooftop"> Rooftop cleaning</label>
                                                            <input type="hidden" name="cat_id_3" id="cat_id_3" value="">
                                                        <div class="radio" id="main_cat_3">
<!--                                                            <label>
                                                                <input type="radio" name="rooftop">Stone Flooring</label>
                                                            <label>
                                                                <input type="radio" name="rooftop">Tile Flooring</label>
                                                            <label>
                                                                <input type="radio" name="rooftop">Concrete Flooring</label>-->
                                                        </div>
                                                        <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Total square feet :</div>
                                                        <div class="col-md-8">
                                                            <input id="sm_3" name="sm_3" type="number" placeholder="(approximately:)" class="form-control input-md">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-6 col-xs-8 col-xxs-12">
                                                    <div class="form-group">
                                                        <label>
                                                            <input type="checkbox" name="chk_pool" id="chk_pool"> Pool cleaning </label>
                                                            <input type="hidden" name="cat_id_4" id="cat_id_4" value="">
                                                        <div class="radio" id="main_cat_4">
<!--                                                            <label>
                                                                <input type="radio" name="pool">Fiberglass pool</label>
                                                            <label>
                                                                <input type="radio" name="pool">Vinyl liner pool</label>
                                                            <label>
                                                                <input type="radio" name="pool">Concrete pool</label>-->
                                                        </div>
                                                        <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Number of pools :</div>
                                                        <div class="col-md-8">
                                                            <input id="in_pool" name="in_pool" type="number" placeholder="" class="form-control input-md">
                                                        </div>
                                                        <br>
                                                        <br>
                                                        <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Total square feet :</div>
                                                        <div class="col-md-8">
                                                            <input id="sm_4" name="sm_4" type="number" placeholder="(approximately:)" class="form-control input-md">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br />
                                            <br>

                                            <div class="row">
                                                <div class="col-md-12 col-sm-6 col-xs-8 col-xxs-12">
                                                    <div class="form-group">
                                                        <label>
                                                            <input type="checkbox" name="chk_bathroom" id="chk_bathroom"> Bathroom cleaning</label>
                                                            <input type="hidden" name="cat_id_5" id="cat_id_5" value="">
                                                        <div class="radio" id="main_cat_5">
<!--                                                            <label>
                                                                <input type="radio" name="bathroom">Stone flooring</label>
                                                            <label>
                                                                <input type="radio" name="bathroom">Tile flooring</label>
                                                            <label>
                                                                <input type="radio" name="bathroom">Concrete flooring </label>-->
                                                        </div>
                                                        <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Number of bathrooms :</div>
                                                        <div class="col-md-8">
                                                            <input id="in_bathroom" name="in_bathroom" type="number" placeholder="" class="form-control input-md">
                                                        </div>
                                                        <br>
                                                        <br>
                                                        <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Total square feet :</div>
                                                        <div class="col-md-8">
                                                            <input id="sm_5" name="sm_5" type="number" placeholder="(approximately:)" class="form-control input-md">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 col-sm-6 col-xs-8 col-xxs-12">
                                                    <div class="form-group">
                                                        <label>
                                                            <input type="checkbox" name="chk_win" id="chk_win"> Window cleaning</label>
                                                            <input type="hidden" name="cat_id_6" id="cat_id_6" value="">
                                                        <div class="radio" id="main_cat_6">
<!--                                                            <label>
                                                                <input type="radio" name="win">Aluminum or metal frames</label>
                                                            <label>
                                                                <input type="radio" name="win">Fiberglass frames</label>
                                                            <label>
                                                                <input type="radio" name="win">Vinyl frames</label>
                                                            <label>
                                                                <input type="radio" name="win">Wood frames</label>-->
                                                        </div>
                                                        <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Number of windows :</div>
                                                        <div class="col-md-8">
                                                            <input id="in_win" name="in_win" type="number" placeholder="" class="form-control input-md">
                                                        </div>
                                                        <br>
                                                        <br>
                                                        <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Total square feet :</div>
                                                        <div class="col-md-8">
                                                            <input id="sm_6" name="sm_6" type="number" placeholder="(approximately:)" class="form-control input-md">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 col-sm-6 col-xs-8 col-xxs-12">
                                                    <div class="form-group">
                                                        <label>
                                                            <input type="checkbox" name="chk_out" data-id="" id="chk_out"> Outdoor cleaning</label>
                                                            <input type="hidden" name="cat_id_7" id="cat_id_7" value="">
                                                            <input type="hidden" id="price_per_sq_7" data-id="" value="0">
                                                        <div>
                                                            <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Total square feet :</div>
                                                            <div class="col-md-8">
                                                                <input id="sm_7" name="sm_7" type="number" placeholder="(approximately:)" class="form-control input-md">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 col-sm-6 col-xs-8 col-xxs-12">
                                                    <div class="form-group">
                                                        <label>
                                                            <input type="checkbox" name="chk_esc" id="chk_esc" > Escalator cleaning </label>
                                                            <input type="hidden" name="cat_id_8" id="cat_id_8" value="">
                                                            <input type="hidden" id="price_per_sq_8" value="0">
                                                        <div>
                                                            <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Number of escalators :</div>
                                                            <div class="col-md-8">
                                                                <input id="in_esc" name="in_esc" type="number" placeholder="" class="form-control input-md">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 col-sm-6 col-xs-8 col-xxs-12">
                                                    <div class="form-group">
                                                        <label><input type="checkbox" name="chk_elv" id="chk_elv"> Elevator cleaning </label>
                                                        <input type="hidden" name="cat_id_9" id="cat_id_9" value="">
                                                        <div class="radio" id="main_cat_9">
<!--                                                            <label>
                                                                <input type="radio" name="elevator">Tile Flooring</label>
                                                            <label>
                                                                <input type="radio" name="elevator">Carpet Flooring</label>
                                                            <label>
                                                                <input type="radio" name="elevator">Wood Flooring</label>-->
                                                        </div>
                                                     <div>
                                                            <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Number of Elevators :</div>
                                                            <div class="col-md-8">
                                                                <input id="in_elv" name="in_elv" type="number" placeholder="" class="form-control input-md">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            
                                            <div class="row">
                                            <div class="form-group">
                                                <div style="text-align: left" class="col-md-6 col-sm-4 col-xs-4 col-xxs-12"> 
                                                    <label><input type="checkbox" id="chk_percentage" name="chk_percentage"> Discount Rate(Percentage%): </label>
                                                </div>
                                                
                                                <select class="form-contorl" id="percentage">
                                                    <option value="5">5</option>
                                                    <option value="10">10</option>
                                                    <option value="20">20</option>
                                                </select>
                                            </div>
                                            </div>
                                            <br>
                                            <!-- Calculate Amount Here -->


                                            <div class="row">
                                                <div class="form-group">
                                                    <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">
                                                        <button type="button" class="btn btn-primary btn-total">Calculate Amount</button>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                        <input id="total" name="total" type="text" placeholder="" class="form-control input-md">
                                                    </div>
                                                </div>
                                            </div>
                                            <br />
                                        
                                            </form>
                                        </div>
                                        
                                        
                                    </div>
                                    
                                    <div class="modal-footer">
                                        <button type="button" class="close-popup btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary btn-order" onclick="saveOrder()">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    </div>





    </section>


    <!-- ./wrapper -->

    <!-- Bootstrap 3.3.6 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>

    <link href="../../dist/css/bootstrap-datetimepicker.css" rel="stylesheet"> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="../../dist/js/bootstrap-datetimepicker.js"></script>

    <script type="text/javascript">
        
        function saveOrder(){
            $('#order_form').submit();
        }
        
        $(document).ready(function() {

            var today = new Date();
            $("#date").datetimepicker({
                format: "YYYY-MM-DD",
                defaultDate: today
            });
        
            $.ajax({
                type: "GET",
                url: './getSubCat',
                success: function(data) {

                    console.log(data);
                    var radios_1 = "";
                    var radios_2 = ""; 
                    var radios_3 = ""; 
                    var radios_4 = ""; 
                    var radios_5 = ""; 
                    var radios_6 = ""; 
                    var radios_9 = ""; 
                    
                    for(var i=0; i<data.length; i++){
                        if(data[i]['main_id'] == 1) {
                            radios_1 += '<label>'
                                   + '<input type="radio" name="floor" data-id="' + data[i]['cat_ID'] + '" value="' + data[i]['price'] + '">'+ data[i]['type'] +'</label>' 
                                   + '<label>';
                           $('#price_per_sq_1').val(data[i]['price']);
                        }
                        if(data[i]['main_id'] == 2) {
                            radios_2 += '<label>'
                                   + '<input type="radio" name="roof" data-id="' + data[i]['cat_ID'] + '" value="' + data[i]['price'] + '">'+ data[i]['type'] +'</label>' 
                                   + '<label>';
                           $('#price_per_sq_2').val(data[i]['price']);
                        }
                        if(data[i]['main_id'] == 3) {
                            radios_3 += '<label>'
                                   + '<input type="radio" name="rooftop" data-id="' + data[i]['cat_ID'] + '" value="' + data[i]['price'] + '">'+ data[i]['type'] +'</label>' 
                                   + '<label>';
                           $('#price_per_sq_3').val(data[i]['price']);
                        }
                        if(data[i]['main_id'] == 4) {
                            radios_4 += '<label>'
                                   + '<input type="radio" name="pool" data-id="' + data[i]['cat_ID'] + '" value="' + data[i]['price'] + '">'+ data[i]['type'] +'</label>' 
                                   + '<label>';
                           $('#price_per_sq_4').val(data[i]['price']);
                        }
                        if(data[i]['main_id'] == 5) {
                            radios_5 += '<label>'
                                   + '<input type="radio" name="bathroom" data-id="' + data[i]['cat_ID'] + '" value="' + data[i]['price'] + '">'+ data[i]['type'] +'</label>' 
                                   + '<label>';
                        }
                        if(data[i]['main_id'] == 6) {
                            radios_6 += '<label>'
                                   + '<input type="radio" name="win" data-id="' + data[i]['cat_ID'] + '" value="' + data[i]['price'] + '">'+ data[i]['type'] +'</label>' 
                                   + '<label>';
                        }
                        if(data[i]['main_id'] == 7) {
                           $('#price_per_sq_7').val(data[i]['price']);
                           $('#chk_out').attr('data-id', data[i]['cat_ID']);
                        }       
                        if(data[i]['main_id'] == 8) {
                           $('#price_per_sq_8').val(data[i]['price']);                           
                           $('#chk_esc').attr('data-id', data[i]['cat_ID']);
                        }       
                        if(data[i]['main_id'] == 9) {
                            
                           
                           if(data[i]["type"]=='Mirror'){
                               radios_9 += '<label>'
                                   + '<input type="radio" data-id="' + data[i]['cat_ID'] + '"  name="mirror" value="' + data[i]['price'] + '" >'+ data[i]['type'] +'</label>' 
                                   + '<label>';
                           } else {
                               radios_9 += '<label>'
                                   + '<input type="radio" data-id="' + data[i]['cat_ID'] + '" name="elevator" value="' + data[i]['price'] + '" >'+ data[i]['type'] +'</label>' 
                                   + '<label>';
                           }
                        }       
                    }
                    
                    $('#main_cat_1').html(radios_1);
                    $('#main_cat_2').html(radios_2);
                    $('#main_cat_3').html(radios_3);
                    $('#main_cat_4').html(radios_4);
                    $('#main_cat_5').html(radios_5);
                    $('#main_cat_6').html(radios_6);
                    $('#main_cat_9').html(radios_9);

                },
                error: function(error) {
                    console.log(JSON.stringify(error));
                }
            });
            
            $(".btn-total").click(function(){
        
                var sum = 0.0;
            
                if ($('#chk_floor').prop('checked')) {
                    
                    var floor_price = $("input[name='floor']:checked").val();
                    $('#cat_id_1').val($("input[name='floor']:checked").attr('data-id'));
                    
                    if(floor_price){
                        var floors = $('#in_floor').val();
                        var floor_sf = $('#sm_1').val();
                        
                        if ((floors > 0) && (floor_sf >0)) 
                        {
                            sum += parseFloat(floor_price) * parseFloat(floors) * parseFloat(floor_sf);
                        } else {
                            alert("Please Fill Out All Floor Detaills");
                        }
                                               
                    } else {
                        alert("Please Select a Floor Option");
                    }
                }
                
                if ($('#chk_roof').prop('checked')) {
                    
                    var roof_price = $("input[name='roof']:checked").val();
                    $('#cat_id_2').val($("input[name='roof']:checked").attr('data-id'));
                    
                    if (roof_price){
                        var roof_sf = $('#sm_2').val();
                        
                        if (roof_sf > 0){
                           sum += parseFloat(roof_price) * parseFloat(roof_sf); 
                        } else {
                            alert("Please Fill Out All Roof Detaills")
                        }
                    } else {
                        alert("Please Select a Roof Option");
                    }
                }
                
                if ($('#chk_rooftop').prop('checked')) {
                    
                    var rooftop_price = $("input[name='rooftop']:checked").val();
                     $('#cat_id_3').val($("input[name='rooftop']:checked").attr('data-id'));
                     
                    if (rooftop_price){
                        var rooftop_sf = $('#sm_3').val();
                        
                        if (rooftop_sf >0){
                            sum += parseFloat(rooftop_price) * parseFloat(rooftop_sf);
                        } else {
                            alert("Please Fill Out All Rooftop Detaills")
                        }  
                    } else {
                        alert("Please Select a Rooftop Option");
                    }
                }
                
                if ($('#chk_pool').prop('checked')) {
                    
                    var pool_price = $("input[name='pool']:checked").val();
                    $('#cat_id_4').val($("input[name='pool']:checked").attr('data-id'));
                      
                    if (pool_price){
                        var pools = $('#in_pool').val();
                        var pool_sf = $('#sm_4').val();
                        
                        if ((pools>0) && (pool_sf>0)){
                            sum += parseFloat(pool_price) * parseFloat(pools) * parseFloat(pool_sf);
                        }else {
                            alert("Please Fill Out All Pool Detaills")
                        }
                    } else {
                        alert("Please Select a Pool Option");
                    }
                }
                
                if ($('#chk_bathroom').prop('checked')) {
                    
                    var bathroom_price = $("input[name='bathroom']:checked").val();
                       $('#cat_id_5').val($("input[name='bathroom']:checked").attr('data-id'));
                       
                    if (bathroom_price){
                        var bathrooms = $('#in_bathroom').val();
                        var bathroom_sf = $('#sm_5').val();
                        
                        if ((bathrooms>0) && (bathrooms_sf>0)){
                            sum += parseFloat(bathroom_price) * parseFloat(bathrooms) * parseFloat(bathroom_sf);
                        }else {
                            alert("Please Fill Out All Bathroom Detaills")
                        }
                    } else {
                        alert("Please Select a Bathroom Option");
                    }
                }
                
                if ($('#chk_win').prop('checked')) {
                    
                    var win_price = $("input[name='win']:checked").val();
                        $('#cat_id_6').val($("input[name='win']:checked").attr('data-id'));
                        
                    if (win_price){
                        var windows = $('#in_win').val();
                        var win_sf = $('#sm_6').val();
                        
                        if ((windows>0) && (win_sf>0)){
                            sum += parseFloat(win_price) * parseFloat(windows) * parseFloat(win_sf);
                        } else {
                            alert("Please Fill Out All Window Detaills")
                        }
                    } else {
                        alert("Please Select a Window Option");
                    }
                }
                
                if ($('#chk_out').prop('checked')) {
                    
                    var out_sf = $('#sm_7').val();
                    var price_sf = $('#price_per_sq_7').val();
                    $('#cat_id_7').val($("input[name='chk_out']:checked").attr('data-id'));
                                        
                    if (out_sf > 0){
                        sum += parseFloat(out_sf * price_sf);
                    } else {
                        alert("Please Fill Out All Outdoor Details");
                    }
                }
                
                if ($('#chk_esc').prop('checked')) {
                    
                    var esc_sf = $('#in_esc').val();
                    var price_sf = $('#price_per_sq_8').val();      
                    $('#cat_id_8').val($("input[name='chk_esc']:checked").attr('data-id'));
                    
                    if (esc_sf > 0){
                        sum += parseFloat(esc_sf * price_sf);
                    } else {
                        alert("Please Fill Out All Escalator Details");
                    }
                }
                
                if ($('#chk_elv').prop('checked')) {
                    
                    var elevator_price = $("input[name='elevator']:checked").val();
//                    console.log(elevator_price);
                     $('#cat_id_9').val($("input[name='elevator']:checked").attr('data-id'));
                     
                    if (elevator_price){
                        var mirror = $("input[name='mirror']:checked").val();
                        var elevators = $('#in_elv').val();
                        if (elevators >0) {
                            
                        if (!mirror) {
                            sum +=  parseFloat(elevator_price) * parseFloat(elevators);
                        } else {
                            sum += ( (parseFloat(elevator_price) + parseFloat(mirror)) * parseFloat(elevators));
                        }
                        } else {
                        alert("Please Fill Out All Elevator Details");
                        }
                    } else {
                        alert("Please Select a Elevator Option");
                    }
                }
                
                if ($('#chk_percentage').prop('checked')){
                    var discount = $("#percentage" ).val();
                    sum = sum - parseFloat(sum*discount/100); 
                }
                
                $('#total').val(sum);
                
            });
            
            var customers = "";
            var start = '<select class="form-control" id="cust_name" name="cust_name">';
            var end = '</select>';
            $.ajax({
                type: "GET",
                url: './getCustomers',
                success: function(data) {
                    console.log(data);                   
                    
                                                                
                    for(var i=0; i<data.length; i++){
                        customers += '<option value="'+data[i]['name']+'">'+data[i]['name']+'</option>';                        
                    }
                    $('#cust_name').html(start+customers+end);
                }
            });
            


            
        });
    </script>
</div>
</body>

</html>