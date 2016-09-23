<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Employee</title>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>
<body class="hold-transition skin-blue fixed">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>S&E</b>Services</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>S&E</b>Services</span>
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
            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                        <li><a href="#"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                        <li><a href="#"><i class="fa fa-group"></i> <span>Customers</span></a></li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-calendar-times-o"></i><span>Employees</span>
                                <span class="pull-right-container">
                             <i class="fa fa-angle-left pull-right"></i>
                        </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="AddEmployee"><i class="fa fa-user-plus"></i>Recruitment</a></li>
                                <li class="active"><a href="employee"><i class="fa fa-book"></i>Information</a></li>
                                <li><a href="payroll"><i class="fa fa-dollar"></i>Payroll Management</a></li>
                                <li><a href="leave"><i class="fa fa-calendar-minus-o"></i>Attendance</a></li>
                                <li><a href="EmployeeLoans"><i class="fa  fa-credit-card"></i>Employee Loans</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-car"></i> <span>Vehicle Grooming Services</span></a></li>
                        <li><a href="#"><i class="fa fa-certificate"></i> <span>Janitorial Services</span></a></li>
                        <li><a href="#"><i class="fa fa-calendar"></i> <span>Work Shifts</span></a></li>
                        <li><a href="#"><i class="fa fa-cubes"></i> <span>Inventory</span></a></li>
                <li><a href="#"><i class="fa fa-credit-card"></i> <span>Finances</span></a></li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Employee Management
            </h1>
            <ol class="breadcrumb">
                <li><a href="/main"><i class="fa fa-user"></i> Employee</a></li>
                <li class="active">Info</li>
            </ol>
        </section>

        <!-- Main content -->

        <div class="row" style="margin-top: 25px">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="col-xs-4 form-group">
                            <select class="form-control" style="width: 75%;">
                                <option>Filter</option>
                                <option>Employee ID</option>
                                <option>Employee Name</option>
                                <option>Designation</option>
                                <option>Branch</option>
                                <option>Date Joined</option>
                            </select>
                        </div>
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
                                <th>ID</th>
                                <th>Employee Name</th>
                                <th>Designation</th>
                                <th>Contact Number</th>
                                <th>Branch</th>
                                <th>Date Joined</th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>EMP001</td>
                                <td>John Doe</td>
                                <td>Manager</td>
                                <td>0112-236956</td>
                                <td>Moratuwa</td>
                                <td>11-7-2014</td>
                                <td><button type="button" class="btn btn-success"><i class="fa fa-eye"></i></button></td>
                                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button></td>
                                <td><button type="button" class="btn btn-danger" onclick="alerts()"><i class="fa fa-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td>EMP294</td>
                                <td>Alexander Pierce</td>
                                <td>Manager</td>
                                <td>0112-236956</td>
                                <td>Moratuwa</td>
                                <td>6-7-2014</td>
                                <td><button type="button" class="btn btn-success"><i class="fa fa-eye"></i></button></td>
                                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button></td>
                                <td><button type="button" class="btn btn-danger" onclick="alerts()"><i class="fa fa-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td>EMP657</td>
                                <td>Bob Doe</td>
                                <td>Manager</td>
                                <td>0112-236956</td>
                                <td>Moratuwa</td>
                                <td>5-7-2014</td>
                                <td><button type="button" class="btn btn-success"><i class="fa fa-eye"></i></button></td>
                                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button></td>
                                <td><button type="button" class="btn btn-danger" onclick="alerts()"><i class="fa fa-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td>EMP175</td>
                                <td>Mike Doe</td>
                                <td>Manager</td>
                                <td>0112-236956</td>
                                <td>Moratuwa</td>
                                <td>5-7-2014</td>
                                <td><button type="button" class="btn btn-success"><i class="fa fa-eye"></i></button></td>
                                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button></td>
                                <td><button type="button" class="btn btn-danger" onclick="alerts()"><i class="fa fa-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td>EMP001</td>
                                <td>John Doe</td>
                                <td>Manager</td>
                                <td>0112-236956</td>
                                <td>Moratuwa</td>
                                <td>11-7-2014</td>
                                <td><button type="button" class="btn btn-success"><i class="fa fa-eye"></i></button></td>
                                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button></td>
                                <td><button type="button" class="btn btn-danger" onclick="alerts()"><i class="fa fa-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td>EMP294</td>
                                <td>Alexander Pierce</td>
                                <td>Manager</td>
                                <td>0112-236956</td>
                                <td>Moratuwa</td>
                                <td>6-7-2014</td>
                                <td><button type="button" class="btn btn-success"><i class="fa fa-eye"></i></button></td>
                                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button></td>
                                <td><button type="button" class="btn btn-danger" onclick="alerts()"><i class="fa fa-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td>EMP657</td>
                                <td>Bob Doe</td>
                                <td>Manager</td>
                                <td>0112-236956</td>
                                <td>Moratuwa</td>
                                <td>5-7-2014</td>
                                <td><button type="button" class="btn btn-success"><i class="fa fa-eye"></i></button></td>
                                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button></td>
                                <td><button type="button" class="btn btn-danger" onclick="alerts()"><i class="fa fa-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td>EMP175</td>
                                <td>Mike Doe</td>
                                <td>Manager</td>
                                <td>0112-236956</td>
                                <td>Moratuwa</td>
                                <td>5-7-2014</td>
                                <td><button type="button" class="btn btn-success"><i class="fa fa-eye"></i></button></td>
                                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button></td>
                                <td><button type="button" class="btn btn-danger" onclick="alerts()"><i class="fa fa-trash"></i></button></td>
                            </tr>
                            </tbody></table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- Modal prompt for update-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Update Employee Information</h4>
                    </div>
                    <div class="modal-body">
                        <div class="box box-warning">
                            <div class="box-body">
                                <form role="form">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Employee ID:</label>
                                        <input type="text" class="form-control" placeholder="Enter ..." value="EMP001" disabled>
                                        <label>Employee Name:</label>
                                        <input type="text" class="form-control" placeholder="Enter ..." value="John Doe">
                                        <label>Employee Designation:</label>
                                        <input type="text" class="form-control" placeholder="Enter ..." value="Manager">
                                        <label>Contact Number:</label>
                                        <input type="text" class="form-control" placeholder="Enter ..." value="0112-233659">
                                        <label>Branch:</label>
                                        <input type="text" class="form-control" placeholder="Enter ..." value="Moratuwa">
                                        <label>Date Joined:</label>
                                        <input type="text" class="form-control" placeholder="Enter ..." value="01-02-2000">
                                        <label>Gender:</label>
                                        <div class="form-group">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                                    Female
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-------Modal end----------->
        <script>
            function alerts() {
                swal({   title: "Are you sure?",   text: "You will not be able to recover this record!",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   confirmButtonText: "Delete",   closeOnConfirm: false }, function(){   swal("Deleted!", "Employee Record has been deleted", "success"); });
            }
        </script>
        <!-- /.content -->
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
