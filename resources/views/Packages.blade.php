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


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="../../dist/js/demo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js">
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
                <li class="active"><a href="package"<i class="fa fa-cubes"></i> Categories</a></li>
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
                Categories
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <script>
                function deleteCat(cat_ID) {
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
                                        url: 'deleteCat',
                                        data: {
                                            cat_ID: cat_ID
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

                //getInfo and Update subCat Info
                function getSubCatInfo(cat_ID) {
                    $.ajax({
                        type: "GET",
                        data: {
                            cat_ID: cat_ID
                        },
                        url: './getSubCatInfo',
                        success: function(data) {

                            //console.log(data);
                            $('#SubCatModal').modal('show');
                            $('#combo').hide();
                            $('#type').val(data[0].type).prop("disabled", true);
                            $('#price').val(data[0].price);
                            $('#cat_ID').val(data[0].cat_ID);

                            $('.btn-sub').html('Update');
                        },
                        error: function(error) {
                            alert(error.status + " : " + error.statusText);
                            console.log(JSON.stringify(error));
                        }
                    });

                }

                $('#SubCatModal').on('shown.bs.modal', function() {
                    $('#cat_ID').val('0');
                    $('#combo').show();
                    if ($('#cat_ID').val() == 0) {
                        $('#type').val("");
                        $('#price').val("");
                        $('#cat_ID').val("0");

                        $('.btn-sub').html('Add');
                    }
                })
            </script>

            <div class="container-fluid">
                <div class="clearfix"></div>
                         <br>
                                <div class="box">
                                    <div class="box-body">
                                        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                            <div class="row">
                                                <div class="col-sm-12">

                                                    <!-- <input type="text" id="main_cat" value="1"> -->

                                                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                                        <thead>
                                                        <tr role="row">
                                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Main Category</th>
                                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending">Floor Type</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Price(per square feet)</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach ($categories as $category)
                                                            <tr role="row" class="odd">
                                                                <td>{{ $category->cat_name }}</td>
                                                                <td>{{ $category->type }}</td>
                                                                <td>{{ $category->price }}</td>
                                                                <td>
                                                                    <button class="btn btn-warning" onclick="getSubCatInfo('{{$category->cat_ID}}')">Update</button>
                                                                    <button class="btn btn-danger" value="{{$category->cat_ID}}" onclick="deleteCat('{{$category->cat_ID}}')">Delete</button>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>

                                                    </table>
                                                </div>

                                                <!-- /.box-body -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        
                        </div>

                        
                                
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="fixed-action-btn" style="bottom: 55px; right: 24px;">
                                <a class="btn-floating btn-large" rel="tooltip" title="Add New Category" data-toggle="modal" data-target="#SubCatModal" style=" background-color: #F44336" data-toggle="modal" data-target="#caseModal">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>

                            <div class="modal fade" id="SubCatModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                            </button>
                                            <h4 class="modal-title" id="myModalLabel">Manage Sub Category</h4>
                                        </div>
                                        <div class="modal-body">
                                            
                                            <div class="container-fluid">
                                                <form role="form" method="POST" action="{{url('addSubCat')}}">
                                                    
                                                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                                    <div class="row">
                                                    <div class="form-group" id="combo">

                                                        <input name="cat_ID" id="cat_ID" type="hidden" value="0" />

                                                        <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Select Categoty</div>
                                                        <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                            <select class="form-contorl" id="main-cat">
                                                                <option value="1">Floor cleaning</option>
                                                                <option value="2">Roof cleaning</option>
                                                                <option value="3">Rooftop cleaning</option>
                                                                <option value="4">Pool Cleaning</option>
                                                                <option value="5">Bathroom cleaning</option>
                                                                <option value="6">Window cleaning</option>
                                                                <option value="9">Elevator cleaning </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br />

                                                <div class="row">
                                                    <div class="form-group">
                                                        <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Type</div>
                                                        <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                            <input id="type" name="type" type="text" placeholder="" class="form-control input-md" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br />

                                                <div class="row">
                                                    <div class="form-group">
                                                        <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Price</div>
                                                        <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                            <input id="price" name="price" type="number" min="0" placeholder="(per square feet)" class="form-control input-md" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br />
                                                </form>

                                                
                                                <div class="modal-footer">
                                                    <button type="button" class="close-popup btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary btn-sub" onclick="addSubCatType()">Add</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


        </section>


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


        <script type="text/javascript">
            function addSubCatType() {

                var main_cat = $('#main-cat option:selected').val();
                var type = $('#type').val();
                var price = $('#price').val();
                var sub = $('#cat_ID').val();

                $.ajax({
                    type: "GET",
                    data: {
                        'main_cat': main_cat,
                        'type': type,
                        'price': price,
                        'sub':sub
                    },
                    url: './addSubCat',
                    success: function(data) {
                        console.log(data);
                        location.reload();

                    },
                    error: function(error) {
                        alert(error.status + " : " + error.statusText);
                        console.log(JSON.stringify(error));
                    }
                });

            }
        </script>

</body>

</html>