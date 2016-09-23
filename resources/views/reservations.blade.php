<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Servcie Management | Reservations</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- fullCalendar 2.2.5-->
  <link rel="stylesheet" href="../plugins/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href="../plugins/fullcalendar/fullcalendar.print.css" media="print">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!--sweet alerts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|

-->

<script type="text/javascript">

      function successadd() {
                swal("Added Successfully", "New Service reservation has been added", "success");
      }
      function successupdate() {
                swal("Updated Successfully", "Service reservation has been updated", "success");
      }


      function formValidate(){

       var servid = document.getElementById('servid').value;
       var cusname = document.getElementById('cusname').value;
       var type = document.getElementById('type').value;
       var slotid = document.getElementById('slotid').value;
       
      

        if(!isEmpty(servid))
          if(!isEmpty(cusname))
            if(!isEmpty(slotid))
                  if(!isEmpty(type))
                    return true;
                  
                  else
                    return false;  
                  else
                    return false;
                  else
                    return false;
                  else
                    return false;
        
          
        }
    
    function isdigit(elem)
    {
       
       if(isNaN(elem))
       {  
          alert("Amount you entered is not numeric");
          return false;
       }
       else
          return true;
    }


    function isEmpty(elem,field) {

        if(elem == "")
        {   alert("One or more empty fields");
           //alert("You cannot have one or multiple fields Empty");
           return true;
        }
        else
        {
          return false;
        }  
    } 




    function clearSlot(service_id)
    {
        swal({
                                      title: "Are you sure you want to finish this ongoing service?",
                                      text: "You will not be able to recover this record!",
                                      type: "warning",
                                      showCancelButton: true,
                                      confirmButtonColor: "#DD6B55",
                                      confirmButtonText: "Confirm",
                                      closeOnConfirm: false },
                                  function(confirm){
                                      if(confirm) {

                                          $.ajax({
                                              method:'get',
                                              url:'clearSlot',
                                              data:{service_id:service_id},
                                              success:function(){
                                                  swal({
                                                              title: "Cleared!",
                                                              text: "Successfully cleared the service slot!",
                                                              type: "success",
                                                              showCancelButton: false,
                                                              confirmButtonColor: "#5cb85c",
                                                              confirmButtonText: "Ok",
                                                              closeOnConfirm: false },
                                                          function (confirm) {
                                                              location.reload();
                                                          });
                                              },
                                              error:function(x,y,thrownError){
                                                  console.log(thrownError);
                                              }
                                          });
                                      }else{
                                      }
                                  }
                          );
    }

    function serviceNext(service_id)
    {
          swal({
                                      title: "Are you sure you want to start the next service?",
                                      type: "warning",
                                      showCancelButton: true,
                                      confirmButtonColor: "#DD6B55",
                                      confirmButtonText: "Confirm",
                                      closeOnConfirm: false },
                                  function(confirm){
                                      if(confirm) {

                                          $.ajax({
                                              method:'get',
                                              url:'serviceNext',
                                              data:{service_id:service_id},
                                              success:function(){
                                                  swal({
                                                              title: "Done!",
                                                              text: "Successfully added to the service slot!",
                                                              type: "success",
                                                              showCancelButton: false,
                                                              confirmButtonColor: "#5cb85c",
                                                              confirmButtonText: "Ok",
                                                              closeOnConfirm: false },
                                                          function (confirm) {
                                                              location.reload();
                                                          });
                                              },
                                              error:function(x,y,thrownError){
                                                  console.log(thrownError);
                                              }
                                          });
                                      }else{
                                      }
                                  }
                          );
    }
</script>



<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
      <a href="welcome" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>AGM</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Auto</b>Gleam</span>
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
            <!-- Sidebar user panel -->

            <ul class="sidebar-menu">


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user"></i> <span>Customer Management</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="RegisterCustomer"><i class="fa fa-user-plus"></i> Register Customer</a></li>
                        <li><a href="CustomerLoyalty"><i class="fa fa-thumbs-o-up"></i> Customer Loyalty</a></li>
                        <li><a href="Feedback"><i class="fa fa-commenting"></i>Customer Feedback</a></li>
                        <li><a href="Reports"><i class="fa fa-file-text"></i>Reports</a></li>
                        <li><a href="CustomerDeficit"><i class="fa fa-minus-square"></i>Customer Deficits</a></li>
                    </ul>
                </li>

                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-car"></i> <span>Service Management</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="reservations"><i class="fa fa-square-o"></i>Add/update Reservations</a></li>
                        <li ><a href="slot01"><i class="fa fa-square-o"></i>Slot 01</a></li>
                        <li ><a href="slot02"><i class="fa fa-square-o"></i>Slot 02</a></li>
                        <li ><a href="slot03"><i class="fa fa-square-o"></i>Slot 03</a></li>
                        <li ><a href="slot04"><i class="fa fa-square-o"></i>Slot 04</a></li>
                        <li><a href="assignments"><i class="fa fa-male"></i>Assignments</a></li>
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

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-bar-chart"></i><span>Work-Shift Management</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="CreateShifts"><i class="fa fa-male"></i>Create Shifts</a></li>
                        <li><a href="AssignEmployees"><i class="fa fa-plus-circle"></i>Assign Employees</a></li>
                        <li><a href="ReplaceEmployees"><i class="fa fa-exchange"></i>Replace Employees</a></li>
                        <li><a href="RemoveEmployees"><i class="fa fa-fw fa-close">&nbsp;&nbsp;&nbsp;</i>Remove Employees</a></li>
                        <li><a href="EfficiencyAnalysis"><i class="fa fa-fw fa-bar-chart">&nbsp;&nbsp;&nbsp;</i>Efficiency Analysis</a></li>
                        <li><a href="OverWorkedEmployees"><i class="fa fa-fw fa-calendar-minus-o">&nbsp;&nbsp;&nbsp;</i>Over Worked Employees</a></li>>
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
      <p class="lead">
        On-going Services
        
      </p>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>Slot 01</h3>
              @foreach ($slot1 as $s1)
              <h4>Now :</h4>
              <h6>Service ID : {{ $s1->service_id }}</h6>
              <h6>Customer Name : {{ $s1->customer }}</h6>
              <h6>Employee Name : {{ $s1->employeeName }}</h6>
              <button type="button" value="{{ $s1->service_id }}" class="btn btn-block btn-success btn-xs" onclick="clearSlot('{{ $s1->service_id }}')">Finished</button>
              @endforeach

              @foreach($slot11 as $s11)
              <h4>Next :</h4>
              <h6>Service Id : {{ $s11->service_id }}</h6>
              <h6>Customer Name : {{ $s11->customer }}</h6>
              <h6>Assigned Employee : {{ $s11->employeeName }}</h6>
              <h6>Date : {{ $s11->reservDate }}</h6>
              <h6>Time : {{ $s11->reservTime }}</h6>
              <button type="button" value="{{ $s11->service_id }}"  class="btn btn-block btn-primary btn-xs" onclick="serviceNext('{{ $s11->service_id }}')">Next</button>
              @endforeach
              </div>
            <div class="icon">
              <i class="ion ion-wrench"></i>
            </div>
            <a href="slot01" class="small-box-footer">
              Pending Services <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Slot 02</h3>

              @foreach ($slot2 as $s2)
              <h4>Now :</h4>
              <h6>Service ID : {{ $s2->service_id }}</h6>
              <h6>Customer Name : {{ $s2->customer }}</h6>
              <h6>Employee Name : {{ $s2->employeeName }}</h6>
              <button type="button" value="{{ $s2->service_id }}" class="btn btn-block btn-success btn-xs" onclick="clearSlot('{{ $s2->service_id }}')">Finished</button>
              @endforeach

              @foreach($slot22 as $s22)
              <h4>Next :</h4>
              <h6>Service Id : {{ $s22->service_id }}</h6>
              <h6>Customer Name : {{ $s22->customer }}</h6>
              <h6>Assigned Employee : {{ $s22->employeeName }}</h6>
              <h6>Date : {{ $s22->reservDate }}</h6>
              <h6>Time : {{ $s22->reservTime }}</h6>
              <button type="button" value="{{ $s22->service_id }}"  class="btn btn-block btn-primary btn-xs" onclick="serviceNext('{{ $s22->service_id }}')">Next</button>
              @endforeach

            </div>
            <div class="icon">
              <i class="ion ion-wrench"></i>
            </div>
            <a href="slot02" class="small-box-footer">
              Pending Services <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Slot 03</h3>

              @foreach ($slot3 as $s3)
              <h4>Now :</h4>
              <h6>Service ID : {{ $s3->service_id }}</h6>
              <h6>Customer Name : {{ $s3->customer }}</h6>
              <h6>Employee Name : {{ $s3->employeeName }}</h6>
              <button type="button" value="{{ $s3->service_id }}" class="btn btn-block btn-success btn-xs" onclick="clearSlot('{{ $s3->service_id }}')">Finished</button>
              @endforeach

              @foreach($slot33 as $s33)
              <h4>Next :</h4>
              <h6>Service Id : {{ $s33->service_id }}</h6>
              <h6>Customer Name : {{ $s33->customer }}</h6>
              <h6>Assigned Employee : {{ $s33->employeeName }}</h6>
              <h6>Date : {{ $s33->reservDate }}</h6>
              <h6>Time : {{ $s33->reservTime }}</h6>
              <button type="button" value="{{ $s33->service_id }}"  class="btn btn-block btn-primary btn-xs" onclick="serviceNext('{{ $s33->service_id }}')">Next</button>
              @endforeach

            </div>
            <div class="icon">
              <i class="ion ion-wrench"></i>
            </div>
            <a href="slot03" class="small-box-footer">
              Pending Services <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Slot 04</h3>

              @foreach ($slot4 as $s4)
              <h4>Now :</h4>
              <h6>Service ID : {{ $s4->service_id }}</h6>
              <h6>Customer Name : {{ $s4->customer }}</h6>
              <h6>Employee Name : {{ $s4->employeeName }}</h6>
              <button type="button" value="{{ $s4->service_id }}" class="btn btn-block btn-success btn-xs" onclick="clearSlot('{{ $s4->service_id }}')">Finished</button>
              @endforeach

              @foreach($slot44 as $s44)
              <h4>Next :</h4>
              <h6>Service Id : {{ $s44->service_id }}</h6>
              <h6>Customer Name : {{ $s44->customer }}</h6>
              <h6>Assigned Employee : {{ $s44->employeeName }}</h6>
              <h6>Date : {{ $s44->reservDate }}</h6>
              <h6>Time : {{ $s44->reservTime }}</h6>
              <button type="button" value="{{ $s44->service_id }}"  class="btn btn-block btn-primary btn-xs" onclick="serviceNext('{{ $s44->service_id }}')">Next</button>
              @endforeach

            </div>
            <div class="icon">
              <i class="ion ion-wrench"></i>
            </div>
            <a href="slot04" class="small-box-footer">
              Pending Services <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<p class="lead">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        

        
      </p>



      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Insert Reservations</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" onsubmit="return formValidate()" method="post" action="addreserv" id="addreserv">
              <div class="box-body">
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Customer Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="cusname" id="cusname" placeholder="Customer Name">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Employee Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="empname" id="empname" placeholder="Optional">
                  </div>
                </div>

                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Slot ID</label>

                  <div class="col-sm-10">
                    <input type="number" max="4" min="0" class="form-control" name="slotid" id="slotid" placeholder="Slot ID">
                  </div>
                  </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Package id</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="pid" id="pid" placeholder="Optional">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Payment Method</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="pmethod" id="pmethod" placeholder="Optional">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Reservation Date</label>

                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="date" id="date" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Reservation Time</label>

                  <div class="col-sm-10">
                    <input type="time" class="form-control" name="time" id="time" >
                  </div>
              <!-- /.box-body -->
              <br>
              <br>
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right" onclick="successadd()">Add</button>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
      </div>
      </div>





      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Update Reservations</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" onsubmit="return formValidate()" method="post" action="updatereserv" id="updatereserv">
              <div class="box-body">
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Service ID</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="servid" id="servid" placeholder="Service ID">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Slot ID</label>

                  <div class="col-sm-10">
                    <input type="number" max="4" min="0" class="form-control" name="slotid" id="slotid" placeholder="Slot ID">
                  </div>
                  </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Package id</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="pid" id="pid" placeholder="Optional">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Payment Method</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="pmethod" id="pmethod" placeholder="Optional">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Reservation Date</label>

                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="date" id="date" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Reservation Time</label>

                  <div class="col-sm-10">
                    <input type="time" class="form-control" name="time" id="time" >
                  </div>
              <!-- /.box-body -->
              <br>
              <br>
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right" onclick="successupdate()">Update</button>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
      </div>
      </div>





        
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->







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
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Slimscroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../plugins/fullcalendar/fullcalendar.min.js"></script>
<!-- Page specific script -->

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
<script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        };

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject);

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex: 1070,
          revert: true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        });

      });
    }

    ini_events($('#external-events div.external-event'));

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date();
    var d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear();
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'today',
        month: 'month',
        week: 'week',
        day: 'day'
      },
      //Random default events
      events: [
        
      ],
      editable: true,
      droppable: false, // this allows things to be dropped onto the calendar !!!
      drop: function (date, allDay) { // this function is called when something is dropped

        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject');

        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject);

        // assign it the date that was reported
        copiedEventObject.start = date;
        copiedEventObject.allDay = allDay;
        copiedEventObject.backgroundColor = $(this).css("background-color");
        copiedEventObject.borderColor = $(this).css("border-color");

        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove();
        }

      }
    });

    /* ADDING EVENTS */
    var currColor = "#3c8dbc"; //Red by default
    //Color chooser button
    var colorChooser = $("#color-chooser-btn");
    $("#color-chooser > li > a").click(function (e) {
      e.preventDefault();
      //Save color
      currColor = $(this).css("color");
      //Add color effect to button
      $('#add-new-event').css({"background-color": currColor, "border-color": currColor});
    });
    $("#add-new-event").click(function (e) {
      e.preventDefault();
      //Get value and make sure it is not null
      var val = $("#new-event").val();
      if (val.length == 0) {
        return;
      }

      //Create events
      var event = $("<div />");
      event.css({"background-color": currColor, "border-color": currColor, "color": "#fff"}).addClass("external-event");
      event.html(val);
      $('#external-events').prepend(event);

      //Add draggable funtionality
      ini_events(event);

      //Remove event from text input
      $("#new-event").val("");
    });
  });
</script>
</body>
</html>
