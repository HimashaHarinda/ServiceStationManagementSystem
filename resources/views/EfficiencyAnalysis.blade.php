<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Service Management | Efficiency Analysis</title>
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
                        <li></li><a href="RegisterCustomer"><i class="fa fa-user-plus"></i> Register Customer</a></li>
                        <li><a href="CustomerLoyalty"><i class="fa fa-thumbs-o-up"></i> Customer Loyalty</a></li>
                        <li><a href="Feedback"><i class="fa fa-commenting"></i>Customer Feedback</a></li>
                        <li><a href="Reports"><i class="fa fa-file-text"></i>Reports</a></li>
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

                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-bar-chart"></i><span>Work-Shift Management</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="CreateShifts"><i class="fa fa-male"></i>Create Shifts</a></li>
                        <li><a href="AssignEmployees"><i class="fa fa-plus-circle"></i>Assign Employees</a></li>
                        <li><a href="ReplaceEmployees"><i class="fa fa-exchange"></i>Replace Employees</a></li>
                        <li><a href="RemoveEmployees"><i class="fa fa-fw fa-close">&nbsp;&nbsp;&nbsp;</i>Remove Employees</a></li>
                        <li class="active"><a href="EfficiencyAnalysis"><i class="fa fa-fw fa-bar-chart">&nbsp;&nbsp;&nbsp;</i>Efficiency Analysis</a></li>
                        <li><a href="OverWorkedEmployees"><i class="fa fa-fw fa-calendar-minus-o">&nbsp;&nbsp;&nbsp;</i>Over Worked Employees</a></li>

                    </ul>
                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="height: 100%">
        <!-- Content Header (Page header) -->
        <section class="content-header" >
            <h1>
                Efficiency Analysis
            </h1>
            <ol class="breadcrumb">
                <li><a href="/main"><i class="fa fa-user"></i>WorkShift</a></li>
                <li class="active">EfficiencyAnalysis</li>
            </ol>
        </section>

        <!-- Main content -->
       <section>

        <div class="main">

        @if ($x == null)
        <div class="col-md-12" style="margin-top: 20px">

            <div class="callout callout-info">
                            <h4>The Efficiency percentages for last month should be calculated.</h4>

                             <form role="form" method="POST" action="{{url('calculatefficiencyDetails')}}">
                                 <input name="_token" type="hidden" value="{{ csrf_token() }}"/>


                                        <button type="submit" class="btn btn-success btn-flat" style="margin-right: 200px;">Calculate</button>


                             </form>

            </div>
            </div>


        @else
        <div class="col-md-12" style="margin-top: 20px">
        <div class="callout callout-success">
                        <h4>Efficiency percentages are calculated. </h4>
        </div>
        </div>
        @endif

                <div class="col-md-12">

                    <div class="box box-success">
                        <div class="box-header with-border">
                                   <h3 class="box-title">Select Branch</h3>
                               </div>


                                <div class="box-body">


                                 <div class="col-md-6">

                                 <form role="form" method="POST" action="{{url('getefficiencyDetails')}}">
                                                                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                                          <div class="form-group">
                                            <div class="input-group margin">
                                              <select class="form-control" name="selectBranch2">

                                              @foreach ($branches as $branch)
                                                <option>{{ $branch->bname }}</option>
                                              @endforeach
                                              </select>

                                              <span class="input-group-btn">
                                                <button type="submit" class="btn btn-info btn-flat">Go!</button>
                                              </span>
                                            </div>
                                          </div>
                                         </form>
                                      </div>

                                </div>

                        </div>
                    </div>
                    </div>


                    <div class=""row>
                    <div class="col-md-12">


                                    <div class="box box-success">

                                        <div class="box-header with-border">
                                            <h3 class="box-title">Assigned Employees</h3>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body1 no-padding">
                                            <table class="table table-condensed">

                                            <tbody>

                                                <tr>

                                                    <th style="width: 400px;">Employee Name</th>
                                                    <th style="width:350px;">Contact No</th>
                                                    <th style="width:300px">Day Shift</th>
                                                    <th style="width:200px">Efficiency<th>

                                                </tr>



                                                    @if ($efficiency != null)

                                                        @foreach ($efficiency as $employee)
                                                        <tr>
                                                            <td>{{ $employee->name }}</td>
                                                            <td>{{$employee->contact}}</td>
                                                            <td>{{$employee->day}}</td>
                                                             @if (($employee->Efficiency)>=80)
                                                                 <td><span class="badge bg-green">{{$employee->Efficiency}}%</span></td>
                                                             @elseif(($employee->Efficiency)>=60)
                                                                 <td><span class="badge bg-blue">{{$employee->Efficiency}}%</span></td>
                                                             @elseif(($employee->Efficiency)>=40)
                                                                 <td><span class="badge bg-yellow">{{$employee->Efficiency}}%</span></td>
                                                             @else
                                                                 <td><span class="badge bg-red">{{$employee->Efficiency}}%</span></td>
                                                             @endif
                                                         </tr>

                                                        @endforeach

                                                    @endif




                                            </tbody>

                                        </table>

                                    </div>
                                <!-- /.box-body -->
                                </div>
                    </div>
                    </div>






       </section>
                    <!-- /.box-body -->

                </div>
            </div>
        </div>
    </div>
    <!-- ./wrapper -->




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
