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
    <link rel="stylesheet" href="/dist/css/hexagon.min.css">
</head>
<body class="sidebar-collapse">
<div>

    <!-- Main Header -->
    <header class="main-header">

    </header>
    <!-- Content Wrapper. Contains page content -->
    <div class="">
        <!-- Content Header (Page header) -->
        <section class="content-header" style="align-content: center">
            <h1> Auto Gleam Service Station
            </h1>
        </section>

        <!-- Main content -->
        <div class="row">
            <div class="col-md-10" id="hexas" style="border:1px solid black;display: flex; align-items: center;flex-flow:row wrap;justify-content: space-around;">

                <div class="col-md-4" style="">
                    <div class="hexagon-lg hexagon-primary hexagon-hover">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                    <hexa>My Profile</hexa>
                </div>

                <div class="col-md-4">
                    <div class="hexagon-lg hexagon-info hexagon-hover">
                        <div class="icon">
                            <i class="fa fa-credit-card"></i>
                        </div>
                    </div>
                    <hexa>Employee Loans</hexa>
                </div>

                <div class="col-md-4">
                    <div class="hexagon-lg hexagon-danger hexagon-hover">
                        <div class="icon">
                            <i class="fa fa-calendar-times-o"></i>
                        </div>
                    </div>
                    <hexa>Leave Requisition</hexa>
                </div>
            </div>
            <div class="col-md-10" id="hexas" style="margin-left:30%; margin-top:30px;">

                <div class="col-md-4">
                    <div class="hexagon-lg hexagon-success hexagon-hover">
                        <div class="icon">
                            <i class="fa fa-dollar "></i>
                        </div>
                    </div>
                    <hexa>Salary Information</hexa>
                </div>

                <div class="col-md-4">
                    <div class="hexagon-lg hexagon-warning hexagon-hover">
                        <div class="icon">
                            <i class="fa fa-calendar"></i>
                        </div>
                    </div>
                    <hexa>My Work-Shift</hexa>
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
