<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Service Management | Replace Employees</title>
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
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"> </script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>


 
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
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Auto</b>Gleam</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
     
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
                        <li class="active"><a href="ReplaceEmployees"><i class="fa fa-exchange"></i>Replace Employees</a></li>
                        <li><a href="RemoveEmployees"><i class="fa fa-fw fa-close">&nbsp;&nbsp;&nbsp;</i>Remove Employees</a></li>
                        <li><a href="EfficiencyAnalysis"><i class="fa fa-fw fa-bar-chart">&nbsp;&nbsp;&nbsp;</i>Efficiency Analysis</a></li>
                        <li><a href="OverWorkedEmployees"><i class="fa fa-fw fa-calendar-minus-o">&nbsp;&nbsp;&nbsp;</i>Over Worked Employees</a></li>

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
        Replace Employees
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Work Shift</a></li>
        <li class="active">Replace Employees</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="main">



  <div>

     <div class="box box-warning">
              <div class="box-header with-border">
              <h3 class="box-title">Replacing Unavailable Employees</h3>
              </div>

              <div class="box-body">
            
            <div class="row">
            <div class="col-md-4">

            
            <form role="form" method="POST" action="{{url('selectShift')}}"> 
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

            <div class="form-group">
            <div style="padding:10px;">
            <div class="input-group input-group-sm">
                <select class="form-control" id="SelectShift" name="SelectShift">
                @if ($unavailableshiftplans!=null)
                @foreach ($unavailableshiftplans as $plan)
                    <option>Shift Plan {{$plan->SPID}}</option>;
                @endforeach
                @endif
              </select>
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-info btn-flat">Go!</button>
                    </span>
              </div>
              </div>
              </div>
              </form>
            
            </div>
            </div>

            <div class="row">

              <div class="col-md-12">

            <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-md-12"></div><div class="col-md-12"></div></div><div class="row"><div class="col-md-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">

             <tbody><tr>
                  <th style="width: 250px;">Name</th>
                  <th style="width: 200px;">Unavailable From</th>
                  <th style="width: 200px;">Unavailable Till</th>
                  <th style="width: 200px;">Efficiency</th>
                  <th align="centre"></th>
                </tr>
                  <form role="form" method="POST" action="{{url('getEmployee')}}">
                                                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                  <input type="hidden" name="planid" value="{{$pid}}">
                @if ($unavailableEmployees != null)
                 @foreach ($unavailableEmployees as $employee)
                    <tr>

                      <td>{{ $employee->name }}</td>
                      <td>{{$employee->start_date}}</td>
                      <td>{{$employee->end_date}}</td>
                      @if (($employee->Efficiency)>=80)
                        <td><span class="badge bg-green">{{$employee->Efficiency}}%</span></td>
                      @elseif(($employee->Efficiency)>=60)
                        <td><span class="badge bg-blue">{{$employee->Efficiency}}%</span></td>
                      @elseif(($employee->Efficiency)>=40)
                        <td><span class="badge bg-yellow">{{$employee->Efficiency}}%</span></td>
                      @else
                        <td><span class="badge bg-red">{{$employee->Efficiency}}%</span></td>
                      @endif
                      <td><button type="submit" value="{{$employee->leave_id}}" name="submit" class="btn btn-primary">OK</button></td>
                </tr>
                @endforeach
                @endif
                </form>
               
                </tbody>

            </table>
            </div>
            </div>
            </div>
            </div>
            </div>

                        <div class="row">

                          <div class="col-md-12">

                        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-md-12"></div><div class="col-md-12"></div></div><div class="row"><div class="col-md-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">

                         <tbody><tr>
                              <th style="width: 250px;">Name</th>
                              <th style="width: 200px;">Day Shift</th>
                              <th style="width: 200px;">Time Shift</th>
                              <th style="width: 200px;">Efficiency</th>
                              <th></th>

                              <!--<th style="width: 200px;">Efficiency</th>!-->

                            </tr>
                            @if ($replaceableEmployees != null)
                             @foreach ($replaceableEmployees as $employee)
                                @if ($employee->eid != $emp)
                                <tr>
                                  <td>{{ $employee->name }}</td>
                                  <td>{{$employee->day}}</td>
                                  <td>{{$employee->Tim}}</td>
                                   @if (($employee->Efficiency)>=80)
                                    <td><span class="badge bg-green">{{$employee->Efficiency}}%</span></td>
                                   @elseif(($employee->Efficiency)>=60)
                                    <td><span class="badge bg-blue">{{$employee->Efficiency}}%</span></td>
                                   @elseif(($employee->Efficiency)>=40)
                                    <td><span class="badge bg-yellow">{{$employee->Efficiency}}%</span></td>
                                   @else
                                    <td><span class="badge bg-red">{{$employee->Efficiency}}%</span></td>
                                   @endif
                                  <td><button type="button" value="{{$employee->eid}}" class="btn btn-success" onclick="UpdateEmployeeShift('{{$employee->eid}}','{{$pid}}','{{$emp}}','{{$leaveid}}')">Replace</button></td>
                                </tr>
                                @endif
                            @endforeach
                            @endif

                            </tbody>

                        </table>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>


              
            </div>
          </div>
          </div>
    


                <div class="box box-warning">
                            <div class="box-header">
                              <h3 class="box-title">Reassignable Employees</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body no-padding">
                              <table class="table table-condensed">
                                <tbody><tr>
                                  <th>Name</th>
                                  <th>Back to Work Date</th>
                                  <th>efficiency</th>
                                  <th></th>
                                </tr>
                                @if ($reassignableemployees!=null)
                                @foreach($reassignableemployees as $reassign)
                                <tr>
                                  <td>{{$reassign->name}}</td>
                                  <td>{{$reassign->end_date}}</td>
                                   @if (($reassign->Efficiency)>=80)
                                    <td><span class="badge bg-green">{{$reassign->Efficiency}}%</span></td>
                                   @elseif(($reassign->Efficiency)>=60)
                                    <td><span class="badge bg-blue">{{$reassign->Efficiency}}%</span></td>
                                   @elseif(($reassign->Efficiency)>=40)
                                    <td><span class="badge bg-yellow">{{$reassign->Efficiency}}%</span></td>
                                   @else
                                    <td><span class="badge bg-red">{{$reassign->Efficiency}}%</span></td>
                                   @endif
                                  <td><button type="button" value="{{$reassign->ID}}" class="btn btn-success" onclick="ReEnterEmployeeShift('{{$reassign->ID}}')">Replace</button></td>
                                </tr>
                                @endforeach
                                @endif

                              </tbody></table>
                            </div>
                            <!-- /.box-body -->
                          </div>

              </div>



      

    </section>
  
 <script>
        function ReEnterEmployeeShift(reId) {

             swal({
                 title: "Are you sure you want to Reassign?",
                         text: "",
                         type: "success",
                         showCancelButton: true,
                         confirmButtonColor: "#00CC00",
                         confirmButtonText: "Reassign",
                         closeOnConfirm: false },
                     function(confirm){

                             if(confirm) {

                                 $.ajax({
                                     method:'get',
                                     url:'ReEnterEmployeeShift',
                                     data:{rid:reId},
                                     success:function(){
                                         swal({
                                             title: "Replaced!",
                                             text: "Successfully replaced the employee record!",
                                             type: "success",
                                             showCancelButton: false,
                                             confirmButtonColor: "#00CC00",
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

  <script>
         function UpdateEmployeeShift(empId,planid,RempId,leaveid) {

              swal({
                  title: "Are you sure you want to Replace?",
                          text: "",
                          type: "success",
                          showCancelButton: true,
                          confirmButtonColor: "#00CC00",
                          confirmButtonText: "Replace",
                          closeOnConfirm: false },
                      function(confirm){

                              if(confirm) {

                                  $.ajax({
                                      method:'get',
                                      url:'UpdateEmployeeShift',
                                      data:{eid:empId,pid:planid,Reid:RempId,lid:leaveid},
                                      success:function(){
                                          swal({
                                              title: "Replaced!",
                                              text: "Successfully replaced the employee record!",
                                              type: "success",
                                              showCancelButton: false,
                                              confirmButtonColor: "#00CC00",
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
<!--
<script>
       function getEmployee(empId,planid) {


                                $.ajax({
                                    method:'get',
                                    url:'getEmployee',
                                    data:{eid:empId,pid:planid},
                                    success:function(){
                                        location.reload();
                                    },
                                    error:function(x,y,thrownError){
                                        console.log(thrownError);
                                    }
                                });

                    }


</script>
!-->
  </div>

  
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

<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

<!-- <script src="jquery-1.12.4.min.js"></script> -->


</body>

</html>
