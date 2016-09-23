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
        <li class="active"><a href="#"><i class="fa fa-user"></i> <span>Employees</span></a></li>
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
        <li><a href="#"><i class="fa fa-user"></i> Employee</a></li>
        <li class="active">Main</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <a href="/employee">
        <div class="col-lg-4 col-xs-12" style="height: 150px; margin-top: 50px">
          <!-- small box -->
          <div class="small-box bg-red" style="height: 100%; padding: 25px">
            <div class="inner">
              <p style="font-size: xx-large;">Employee Information</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-people"></i>
            </div>
          </div>
        </div>
      </a>
      <a href="payroll">
        <div class="col-lg-4 col-xs-12" style="height: 150px; margin-top: 50px">
          <!-- small box -->
          <div class="small-box bg-aqua" style="height: 100%; padding: 25px">
            <div class="inner">
              <p style="font-size: xx-large;">Payroll Management</p>
            </div>
            <div class="icon" >
              <i class="ion ion-cash"></i>
            </div>
          </div>
        </div>
      </a>
      <a href="leave">
        <div class="col-lg-4 col-xs-12" style="height: 150px;margin-top: 50px">
          <!-- small box -->
          <div class="small-box bg-yellow" style="height: 100%; padding: 25px">
            <div class="inner">
              <p style="font-size: xx-large;">Leave <br> Management</p>
            </div>
            <div class="icon">
              <i class="ion ion-calendar"></i>
            </div>
          </div>
        </div>
      </a>
      <a href="#">
        <div class="col-lg-4 col-xs-12" style="height: 150px; margin-top: 50px">
          <!-- small box -->
          <div class="small-box bg-green" style="height: 100%; padding: 25px">
            <div class="inner">
              <p style="font-size: xx-large;">Employee Recruitment</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
        </div>
      </a>
      <a href="/loans">
        <div class="col-lg-4 col-xs-12" style="height: 150px; margin-top: 50px">
          <!-- small box -->
          <div class="small-box bg-purple" style="height: 100%; padding: 25px">
            <div class="inner">
              <p style="font-size: xx-large;">Employee <br>Loans</p>
            </div>
            <div class="icon">
              <i class="ion ion-document-text"></i>
            </div>
          </div>
        </div>
      </a>
    </section>
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
