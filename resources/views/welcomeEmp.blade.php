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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <link rel="stylesheet" href="../../plugins/hexagon/hexagon.min.css">
  <link rel="stylesheet" href="../../plugins/hexagon/hexacss.css">
  <link rel="stylesheet" href="../../plugins/hexagon/float.css">
 
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
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
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">=
              <li class="active"><a href="#"><i class="fa fa-user"></i> <span>Employee Profile</span></a></li>
              <li><a href=""><i class="fa fa-calendar-times-o"></i><span>Employee Leave</span></a></li>
              <li><a href="#"><i class="fa fa-dollar "></i> <span>Salary Information</span></a></li>
              <li class=""><a href="#"><i class="fa fa-credit-card"></i> <span>Employee Loans</span></a></li>
          </ul>
          <!-- /.sidebar-menu -->
      </section>
  </aside>

 
  <div class="content-wrapper">

  <section class="content-header">
      <h1 style="text-align:center;">
        Auto Gleam Employee Portal
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

    <section class="content">

      <div class="box box-success" id="hexas">
            <div class="box-header with-border">
              <h3 class="box-title">Main Menu</h3>
            </div>

      <div class="box-body" id="hexas" style="display: flex; align-items: center;flex-flow:row wrap;justify-content: space-around;">
          <a href="EmpMyProfile">
          <div class="col-sm-2 col-md-1">
            <div id="floating" style="width:111px;">
            <div class="hexagon-md hexagon-primary hexagon-hover">
                  <i class="fa fa-user"></i>
            </div>
             <div style="margin-top:30%;">
                <hexa> My Profile</hexa>
             </div>
            </div>
           </div>
          </a>
        <a href="#"><div class="col-sm-2 col-md-1">
           <div id="floating" style="width:111px;" >
            <div class="hexagon-md hexagon-danger hexagon-hover">
                  <i class="fa fa-credit-card"></i>
            </div>
             <div style="margin-top:30%;">
                <hexa>Employee Loans</hexa>
             </div>
          </div>   
        </div></a>
        <a href="#"><div class="col-sm-2 col-md-1">
          <div id="floating" style="width:111px;">
            <div class="hexagon-md hexagon-success hexagon-hover">
                  <i class="fa fa-calendar"></i>
            </div>
             <div style="margin-top:30%;">
                <hexa>My Work-Shift</hexa>
             </div>
          </div>
        </div></a>
      </div>
      </div>

  </section>
  </div>
</div>
   

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
