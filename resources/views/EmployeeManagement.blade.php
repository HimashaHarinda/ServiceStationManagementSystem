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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="../../dist/js/demo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js">
    </script>
    <script src="http://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

    <script src="https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script src="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"></script>
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js">

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
                <li class="active"><a href="emp"><i class="fa fa-users"></i> Employee Management</a></li>
                <li><a href="cust"><i class="fa fa-user"></i> Customer Management</a></li>
                <li><a href="package"<i class="fa fa-cubes"></i> Categories</a></li>
                <li><a href="order"><i class="fa fa-cart-plus"></i> Order Management</a></li>
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
                Register Employee
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">

            <div class="main">
                <div class="container-fluid">
                    <div class="clearfix"></div>
                    <br>
                    <div class="box">
                        <div class="box-body">
                            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                
                                <div class="row">

                                    <div class="col-sm-12">
                                        <table id="employeeRecords" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="employeeRecords_info">

                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending">Name</th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending">Address</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">NIC</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Phone</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Date of Birth</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">JoinedDate</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Gender</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Position</th>
                                            </thead>
                                            <tbody>
                                            @foreach ($employees as $employee)
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">{{ $employee->name }}</td>
                                                    <td>{{ $employee->address }}</td>
                                                    <td>{{ $employee->NIC }}</td>
                                                    <td>{{ $employee->contact }}</td>
                                                    <td>{{ $employee->dob }}</td>
                                                    <td>{{ $employee->joined_date }}</td>
                                                    <td>{{ $employee->gender }}</td>
                                                    <td>{{ $employee->designation }}</td>

                                                    <td>
                                                        <button class="btn btn-warning" onclick="getEmployeeInfo('{{$employee->eid}}')">Update</button>
                                                        <button class="btn btn-danger" value="{{$employee->eid}}" onclick="deleteEmployee('{{$employee->eid}}')">Delete</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <script>

                                    //Delete Record
                                    function deleteEmployee(eid) {
//                                        alert(eid);
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
                                                            url: 'deleteEmployee',
                                                            data: {
                                                                eid: eid
                                                            },
                                                            success: function() {
                                                                swal({
                                                                            title: "Deleted!",
                                                                            text: "Successfully deleted the employee record!",
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

                                    //getInfo and Update Employee Info
                                    function getEmployeeInfo(eid) {
                                        $.ajax({
                                            type: "GET",
                                            data: {
                                                eid: eid
                                            },
                                            url: './getEmployeeInfo',
                                            success: function(data) {

                                                //console.log(data);
                                                $('#employeeModal').modal('show');
                                                $('#name').val(data[0].name);
                                                $('#address').val(data[0].address);
                                                $('#NIC').val(data[0].NIC).prop("disabled", true);
                                                $('#phone').val(data[0].contact);
                                                $('#pos').val(data[0].designation);
                                                $('#emp_id').val(data[0].eid);

                                                $('.e_dob').hide();
                                                $('.e_jd').hide();
                                                $('.e_gen').hide();
                                                $('.btn-emp').html('Update');
                                            },
                                            error: function(error) {
                                                alert(error.status + " : " + error.statusText);
                                                console.log(JSON.stringify(error));
                                            }
                                        });

                                    }

                                    
                                    $('#employeeModal').on('shown.bs.modal', function() {
                                        $('#emp_id').val('0');
                                        if ($('#emp_id').val() == 0) {
                                            $('#name').val("");
                                            $('#address').val("");
                                            $('#NIC').val("").prop("disabled", fasle);
                                            $('#phone').val("");
                                            $('#pos').val("");
                                            $('#emp_id').val("0");

                                            $('.e_dob').show();
                                            $('.e_jd').show();
                                            $('.e_gen').show();
                                            $('.btn-emp').html('Add');
                                        }
                                    })
                                </script>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <!-- /.box-body -->
                </div>
            </div>
            <div class="fixed-action-btn" style="bottom: 55px; right: 24px;">
                <a class="btn-floating btn-large" rel="tooltip" title="Add New Employee" data-toggle="modal" data-target="#employeeModal" style=" background-color: #F44336" data-toggle="modal" data-target="#caseModal">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
            <!-- Employee Modal -->
            <div class="modal fade" id="employeeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Manage Employee</h4>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <!-- <div class="col-md-12 nopadding" style="margin-right: -13px;">
                              <div class="alert alert-danger" id="err_msg1">
                              </div>
                              </div>
                              <div class="col-md-12 nopadding" style="margin-right: -13px;">
                              <div class="alert alert-success" id="success_msg1">
                              </div>
                              </div> -->
                                <form role="form" method="POST" action="{{url('addEmp')}}" novalidate>

                                    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                                    <input name="emp_id" id="emp_id" type="hidden" value="0" />

                                    <div class="row">
                                        <div class="form-group">
                                            <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Name</div>
                                            <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required>
                                            </div>
                                        </div>
                                    </div>
                                    <br />

                                    <div class="row">
                                        <div class="form-group">
                                            <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Address</div>
                                            <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                <input id="address" name="address" type="text" placeholder="" class="form-control input-md" required>
                                            </div>
                                        </div>
                                    </div>
                                    <br />

                                    <div class="row">
                                        <div class="form-group">
                                            <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">NIC</div>
                                            <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                <input id="NIC" name="NIC" type="text" placeholder="" class="form-control input-md" required min="0">
                                            </div>
                                        </div>
                                    </div>
                                    <br />

                                    <div class="row">
                                        <div class="form-group">
                                            <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Phone</div>
                                            <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                <input id="phone" name="phone" type="number" min="0" placeholder="" class="form-control input-md" required min="0">
                                            </div>
                                        </div>
                                    </div>
                                    <br />

                                    <div class="row">
                                        <div class="form-group">
                                            <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Position</div>
                                            <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                <input id="pos" name="pos" type="number" placeholder="(Supervisor=1, Janitor=2)" class="form-control input-md" required min="0">
                                            </div>
                                        </div>
                                    </div>
                                    <br />

                                    <div class="row e_dob">
                                        <div class="form-group ">
                                            <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Date of Birth</div>
                                            <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                <input id="dob" name="dob" type="date" placeholder="" class="form-control input-md" required>
                                            </div>
                                        </div>
                                    </div>
                                    <br />

                                    <div class="row e_jd">
                                        <div class="form-group">
                                            <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Joined Date</div>
                                            <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                <input id="jDate" name="jDate" type="date" placeholder="" class="form-control input-md" required>
                                            </div>
                                        </div>
                                    </div>
                                    <br />

                                    <div class="row e_gen">
                                        <div class="form-group">
                                            <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Gender</div>
                                            <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="gender" value="male">Male</label>
                                                    <label>
                                                        <input type="radio" name="gender" value="female">Female</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br />

                                    <div class="modal-footer">
                                        <button type="button" class="close-popup btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary btn-emp">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </Section>
    </div>





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




</body>

</html>