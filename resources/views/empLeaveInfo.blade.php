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
            <ul class="sidebar-menu">=
                <li><a href="#"><i class="fa fa-user"></i> <span>Employee Profile</span></a></li>
                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-calendar-times-o"></i><span>Employee Leave</span>
                        <span class="pull-right-container">
                             <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i>Apply for leave</a></li>
                        <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Leave Information</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-dollar "></i> <span>Salary Information</span></a></li>
                <li class=""><a href="#"><i class="fa fa-credit-card"></i> <span>Employee Loans</span></a></li>
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
                Employee Leave Information
            </h1>
            <ol class="breadcrumb">
                <li><a href="/main"><i class="fa fa-user"></i> Employee</a></li>
                <li class="active">Leave Management</li>
            </ol>
        </section>

        <!-- Main content -->
        <div style="margin-top: 25px">
            <div class="col-xs-6" >
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Pending for approval</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <table class="table table-condensed">
                            <tbody><tr>
                                <th>Leave Type</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Reason</th>
                                <th>Status</th>
                            </tr>
                            <tr>
                                <td>Annual</td>
                                <td>01-02-2016</td>
                                <td>23-02-2016</td>
                                <td>Annual</td>
                                <td><span class="label label-warning">Pending</span></td>
                                <td><button type="button" class="btn btn-danger" onclick="alerts()"><i class="fa fa-close"></i></button></td>
                            </tr>
                            </tbody></table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <div class="col-xs-6">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Leave Details</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <table class="table table-condensed">
                            <tbody><tr>
                                <th>Leave Type</th>
                                <th>Leaves Taken</th>
                                <th>Leaves Remaining</th>
                                <th>Leaves Pending</th>
                            </tr>
                            <tr>
                                <td>Medical</td>
                                <td>6</td>
                                <td>3</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Casual</td>
                                <td>4</td>
                                <td>4</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Short Leave</td>
                                <td>4</td>
                                <td>3</td>
                                <td>1</td>
                            </tr>
                            </tbody></table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Leave History</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-condensed">
                        <tbody><tr>
                            <th>Leave Type</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Reason</th>
                            <th>Status</th>
                            <th>Comments</th>
                        </tr>
                        <tr>
                            <td>Medical</td>
                            <td>06-08-2015</td>
                            <td>06-08-2015</td>
                            <td>Flu</td>
                            <td><span class="label label-success">Approved</span></td>
                        </tr>
                        <tr>
                            <td>Casual</td>
                            <td>06-08-2015</td>
                            <td>06-08-2015</td>
                            <td>Flu</td>
                            <td><span class="label label-danger">Declined</span></td>
                        </tr>
                        <tr>
                            <td>Medical</td>
                            <td>06-08-2015</td>
                            <td>06-08-2015</td>
                            <td>Flu</td>
                            <td><span class="label label-success">Approved</span></td>
                        </tr>
                        </tbody></table>
                </div>
            </div>
        </div>
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
