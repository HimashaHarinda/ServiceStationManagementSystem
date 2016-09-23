<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Starter</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

        <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

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

            <!-- Main Header -->
            <header class="main-header">

                <!-- Logo -->
                <a href="index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>A</b>LT</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Admin</b>LTE</span>
                </a>

                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->
                            <li class="dropdown messages-menu">
                                <!-- Menu toggle button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="label label-success">4</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 4 messages</li>
                                    <li>
                                        <!-- inner menu: contains the messages -->
                                        <ul class="menu">
                                            <li><!-- start message -->
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <!-- User Image -->
                                                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <!-- Message title and timestamp -->
                                                    <h4>
                                                        Support Team
                                                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                    </h4>
                                                    <!-- The message -->
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <!-- end message -->
                                        </ul>
                                        <!-- /.menu -->
                                    </li>
                                    <li class="footer"><a href="#">See All Messages</a></li>
                                </ul>
                            </li>
                            <!-- /.messages-menu -->

                            <!-- Notifications Menu -->
                            <li class="dropdown notifications-menu">
                                <!-- Menu toggle button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning">10</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 10 notifications</li>
                                    <li>
                                        <!-- Inner Menu: contains the notifications -->
                                        <ul class="menu">
                                            <li><!-- start notification -->
                                                <a href="#">
                                                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                                </a>
                                            </li>
                                            <!-- end notification -->
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">View all</a></li>
                                </ul>
                            </li>
                            <!-- Tasks Menu -->
                            <li class="dropdown tasks-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-flag-o"></i>
                                    <span class="label label-danger">9</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 9 tasks</li>
                                    <li>
                                        <!-- Inner menu: contains the tasks -->
                                        <ul class="menu">
                                            <li><!-- Task item -->
                                                <a href="#">
                                                    <!-- Task title and progress text -->
                                                    <h3>
                                                        Design some buttons
                                                        <small class="pull-right">20%</small>
                                                    </h3>
                                                    <!-- The progress bar -->
                                                    <div class="progress xs">
                                                        <!-- Change the css width attribute to simulate progress -->
                                                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">20% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="#">View all tasks</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- The user image in the navbar-->
                                    <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span class="hidden-xs">Alexander Pierce</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header">
                                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                        <p>
                                            Alexander Pierce - Web Developer
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class="user-body">
                                        <div class="row">
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Followers</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Sales</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Friends</a>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">

                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">

                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Alexander Pierce</p>
                            <!-- Status -->
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>

                    <!-- search form (Optional) -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->

                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu">
                        <li class="header">HEADER</li>
                        <!-- Optionally, you can add icons to the links -->
                        <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
                        <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#">Link in level 2</a></li>
                                <li><a href="#">Link in level 2</a></li>
                            </ul>
                        </li>
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
                        Janitorial Managment
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                        <li class="active">Here</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Your Page Content Here -->
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_1" data-toggle="tab">Employee</a></li>
                            <li><a href="#tab_2" data-toggle="tab">Customer</a></li>
                            <li><a href="#tab_3" data-toggle="tab">Packages</a></li>
                            <li><a href="#tab_4" data-toggle="tab">Order</a></li>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1">
                                    <div class="container-fluid">
                                        <div class="clearfix"></div>
                                        <br>
                                        <div class="box">
                                            <div class="box-header">
                                                <h3 class="box-title">Employee Details</h3>
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">
                                                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                                                <thead>
                                                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Address</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Phone</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">JoinedDate</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Position</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">ContractPeriod</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Salary</th></tr>
                                                                </thead>
                                                                <tbody>


                                                                    <tr role="row" class="odd">
                                                                        <td class="sorting_1">Rayn</td>
                                                                        <td>Colombo</td>
                                                                        <td>0778599657</td>
                                                                        <td>02/15/16</td>
                                                                        <td>Cleaner</td>
                                                                        <td>6</td>
                                                                        <td>15,000</td>
                                                                        <td><button class="btn btn-warning">Update</button><button class="btn btn-danger">Delete</button></td>
                                                                    </tr>
                                                                    
                                                                    <tr role="row" class="odd">
                                                                        <td class="sorting_1">Joel</td>
                                                                        <td>Moratuwa</td>
                                                                        <td>0756982221</td>
                                                                        <td>02/15/16</td>
                                                                        <td>Supervisor</td>
                                                                        <td>12</td>
                                                                        <td>40,000</td>
                                                                        <td><button class="btn btn-warning">Update</button><button class="btn btn-danger">Delete</button></td>
                                                                    </tr>
                                                                    
                                                                </tbody>

                                                            </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
                                            </div>
                                            <!-- /.box-body -->
                                        </div>

                                    </div>

                                    <div class="fixed-action-btn" style="bottom: 55px; right: 24px;">
                                        <a class="btn-floating btn-large" rel="tooltip" title="Add New Employee" data-toggle="modal" data-target="#employeeModal" style=" background-color: #F44336" data-toggle="modal" data-target="#caseModal">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>

                                    <!-- Customer Modal -->
                                    <div class="modal fade" id="employeeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">New Employee</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container-fluid">
<!--                                                        <div class="col-md-12 nopadding" style="margin-right: -13px;">
                                                            <div class="alert alert-danger" id="err_msg1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 nopadding" style="margin-right: -13px;">
                                                            <div class="alert alert-success" id="success_msg1">
                                                            </div>
                                                        </div>-->

                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Name</div>
                                                                <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                                    <input id="name" name="name" type="text" placeholder="" class="form-control input-md">                            
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br />
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Address</div>
                                                                <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                                    <input id="address" name="address" type="text" placeholder="" class="form-control input-md">     
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <br />
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Phone</div>
                                                                <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                                    <input id="phone" name="phone" type="text" placeholder="" class="form-control input-md">     
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <br />
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Joined Date</div>
                                                                <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                                    <input id="jDate" name="jDate" type="date" placeholder="" class="form-control input-md">     
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <br />
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Position</div>
                                                                <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                                    <input id="pos" name="position" type="text" placeholder="" class="form-control input-md">     
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <br />
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Contract Period (Months)</div>
                                                                <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                                    <input id="contract" name="contract" type="int" placeholder="" class="form-control input-md">     
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <br />
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Salary</div>
                                                                <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                                    <input id="sal" name="salary" type="text" placeholder="" class="form-control input-md">     
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <br />
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="close-popup btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" onclick="addCaseType()">Save</button>
                                                </div>
                                                <input id="case_id" name="case_id" type="text" hidden="">
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
                                            <div class="box-header">
                                                <h3 class="box-title">Customer Details</h3>
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">
                                                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                                                <thead>
                                                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 181px;">Name</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Address</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 197px;">Phone</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 154px;">E-mail</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">NIC</th></tr>
                                                                </thead>
                                                                <tbody>


                                                                    <tr role="row" class="odd">
                                                                        <td class="sorting_1">Louis</td>
                                                                        <td>Colombo 3</td>
                                                                        <td>0775866644</td>
                                                                        <td>louis@hotmail.com</td>
                                                                        <td>925968425V</td>
                                                                        <td><button class="btn btn-warning">Update</button><button class="btn btn-danger">Delete</button></td>
                                                                    </tr>
                                                                    
                                                                    <tr role="row" class="odd">
                                                                        <td class="sorting_1">Liam</td>
                                                                        <td>Colombo 4</td>
                                                                        <td>0712544477</td>
                                                                        <td>liam@gmail.com</td>
                                                                        <td>936214578V</td>
                                                                        <td><button class="btn btn-warning">Update</button><button class="btn btn-danger">Delete</button></td>
                                                                    </tr>
                                                                    
                                                                </tbody>

                                                            </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                    </div>
                                    
                                    <div class="fixed-action-btn" style="bottom: 55px; right: 24px;">
                                        <a class="btn-floating btn-large" rel="tooltip" title="Add New Customer" data-toggle="modal" data-target="#customerModal" style=" background-color: #F44336" data-toggle="modal" data-target="#caseModal">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>

                                    <!-- Customer Modal -->
                                    <div class="modal fade" id="customerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">New Customer</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container-fluid">
<!--                                                        <div class="col-md-12 nopadding" style="margin-right: -13px;">
                                                            <div class="alert alert-danger" id="err_msg1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 nopadding" style="margin-right: -13px;">
                                                            <div class="alert alert-success" id="success_msg1">
                                                            </div>
                                                        </div>-->

                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Name</div>
                                                                <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                                    <input id="name" name="name" type="text" placeholder="" class="form-control input-md">                            
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br />
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Address</div>
                                                                <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                                    <input id="address" name="address" type="text" placeholder="" class="form-control input-md">     
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <br />
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Phone</div>
                                                                <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                                    <input id="phone" name="phone" type="text" placeholder="" class="form-control input-md">     
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <br />
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">E-mail</div>
                                                                <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                                    <input id="mail" name="mail" type="text" placeholder="" class="form-control input-md">     
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <br />
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">NIC</div>
                                                                <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                                    <input id="nic" name="nic" type="text" placeholder="" class="form-control input-md">     
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <br />
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Password</div>
                                                                <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                                    <input id="pwd" name="pwd" type="password" placeholder="" class="form-control input-md">     
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <br />
                                                        
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="close-popup btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" onclick="addCaseType()">Save</button>
                                                </div>
                                                <input id="case_id" name="case_id" type="text" hidden="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_3">
                                    
                                    <div class="fixed-action-btn" style="bottom: 55px; right: 24px;">
                                        <a class="btn-floating btn-large" rel="tooltip" title="Add New Package" data-toggle="modal" data-target="#packageModal" style=" background-color: #F44336" data-toggle="modal" data-target="#caseModal">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>

                                    <!-- Package Modal -->
                                    <div class="modal fade" id="packageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">New Package</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container-fluid">
<!--                                                        <div class="col-md-12 nopadding" style="margin-right: -13px;">
                                                            <div class="alert alert-danger" id="err_msg1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 nopadding" style="margin-right: -13px;">
                                                            <div class="alert alert-success" id="success_msg1">
                                                            </div>
                                                        </div>-->

                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Name</div>
                                                                <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                                    <input id="name" name="name" type="text" placeholder="" class="form-control input-md">                            
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br />
                                                        
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="close-popup btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" onclick="addCaseType()">Save</button>
                                                </div>
                                                <input id="case_id" name="case_id" type="text" hidden="">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane" id="tab_4">

                                    <div class="container-fluid">
                                        <div class="clearfix"></div>
                                        <br>
                                        <div class="box">
                                            <div class="box-header">
                                                <h3 class="box-title">Order Details</h3>
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">
                                                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                                                <thead>
                                                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">OrderID</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Order Date</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Appointment Date</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">CustomerName</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Amount</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">PackageID</th></tr>
                                                                </thead>
                                                                <tbody>


                                                                    <tr role="row" class="odd">
                                                                        <td class="sorting_1">O001</td>
                                                                        <td>12/15/16</td>
                                                                        <td>12/20/16</td>
                                                                        <td>Louis</td>
                                                                        <td>12,560</td>
                                                                        <td>P001</td>
                                                                        <td><button class="btn btn-warning">Update</button><button class="btn btn-danger">Delete</button></td>
                                                                    </tr>
                                                                    
                                                                    <tr role="row" class="odd">
                                                                        <td class="sorting_1">O002</td>
                                                                        <td>11/15/16</td>
                                                                        <td>11/20/16</td>
                                                                        <td>Liam</td>
                                                                        <td>15,692</td>
                                                                        <td>P002</td>
                                                                        <td><button class="btn btn-warning">Update</button><button class="btn btn-danger">Delete</button></td>
                                                                    </tr>
                                                                    
                                                                </tbody>

                                                            </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="fixed-action-btn" style="bottom: 55px; right: 24px;">
                                        <a class="btn-floating btn-large" rel="tooltip" title="Add New Order" data-toggle="modal" data-target="#orderModal" style=" background-color: #F44336" data-toggle="modal" data-target="#caseModal">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>

                                    <!-- Employee Modal -->
                                    <div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">New Order</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container-fluid">
<!--                                                        <div class="col-md-12 nopadding" style="margin-right: -13px;">
                                                            <div class="alert alert-danger" id="err_msg1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 nopadding" style="margin-right: -13px;">
                                                            <div class="alert alert-success" id="success_msg1">
                                                            </div>
                                                        </div>-->

                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">OrderID</div>
                                                                <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                                    <input id="id" name="id" type="text" placeholder="" class="form-control input-md">                            
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br />
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Order Date</div>
                                                                <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                                    <input id="date" name="date" type="date" placeholder="" class="form-control input-md">     
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <br />
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Appointment Date</div>
                                                                <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                                    <input id="appDate" name="appDate" type="date" placeholder="" class="form-control input-md">     
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <br />
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Customer Name</div>
                                                                <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                                    <input id="cust" name="custName" type="text" placeholder="" class="form-control input-md">     
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <br />
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Amount</div>
                                                                <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                                    <input id="amount" name="amount" type="text" placeholder="" class="form-control input-md">     
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <br />
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">PackageID</div>
                                                                <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                                                    <input id="pack" name="package" type="text" placeholder="" class="form-control input-md">     
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <br />
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="close-popup btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" onclick="addCaseType()">Save</button>
                                                </div>
                                                <input id="case_id" name="case_id" type="text" hidden="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                    </div>

                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="pull-right hidden-xs">
                    Anything you want
                </div>
                <!-- Default to the left -->
                <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane active" id="control-sidebar-home-tab">
                        <h3 class="control-sidebar-heading">Recent Activity</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript::;">
                                    <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                        <p>Will be 23 on April 24th</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.control-sidebar-menu -->

                        <h3 class="control-sidebar-heading">Tasks Progress</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript::;">
                                    <h4 class="control-sidebar-subheading">
                                        Custom Template Design
                                        <span class="pull-right-container">
                                            <span class="label label-danger pull-right">70%</span>
                                        </span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.control-sidebar-menu -->

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    <!-- Settings tab content -->
                    <div class="tab-pane" id="control-sidebar-settings-tab">
                        <form method="post">
                            <h3 class="control-sidebar-heading">General Settings</h3>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Report panel usage
                                    <input type="checkbox" class="pull-right" checked>
                                </label>

                                <p>
                                    Some information about this general settings option
                                </p>
                            </div>
                            <!-- /.form-group -->
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
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
