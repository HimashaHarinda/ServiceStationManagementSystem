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
  <script>
    function alerts() {
                swal({   title: "Are you sure you want to delete?",   text: "You will not be able to recover this record!",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   confirmButtonText: "Delete",   closeOnConfirm: false }, function(){   swal("Deleted!", "Employee Record has been deleted", "success"); });
            }

    function success() {
                swal("Successful", "Data Successfully Saved!", "success")
    }
</script>
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
        
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-user"></i> <span>Customer Management</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="RegisterCustomer"><i class="fa fa-user-plus"></i> Register Customer</a></li>
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
        Register Customer
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Customer Management</a></li>
        <li class="active">Register Customer</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-xs-12">

          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Basic Information</h3>
            </div>
             <form role="form" method="POST" action="{{url('RegisterCustomer')}}">
                 @if (count($errors) > 0)
                <script>
                    function myFunction() {
                     location.reload();
                      }
               </script>

              <div class="alert alert-danger">
                <strong>Save Failed</strong><br><br>
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            @if(Session::has('flash_message'))
              <?php
                echo '<script type="text/javascript">',
                       'success();',
                       '</script>';
              ?>
            @endif

             <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
           
            <!-- /.box-header -->
            <!-- form start -->
           
              <div class="box-body">
               <div class="col-md-6">
                 <div class="form-group">
                  <label for="EnterCusname">Full Name<font color="red">*</font></label>
                  <input type="text" class="form-control" id="CusName" name="CusName" placeholder="Enter Name" size="10">
                 </div>

                <div class="form-group">
                  <label for="EnterCusEmail1">Email address<font color="red">*</font></label>
                  <input type="text" class="form-control" id="CusEmail" name="CusEmail" placeholder="Enter email">
                </div>

                <div class="form-group">
                  <label for="Cusnumber">Telephone<font color="red">*</font></label>
                  <input type="text" class="form-control" id="Custele" name="cusTele" placeholder="Telephone">
                </div> 

                <div class="form-group">
                  <label for="EnterAdd1">Address</label>
                  <input type="text" class="form-control" id="CusAdd" name="CusAdd" placeholder="Enter Address" size="10">
                </div>

               </div>

               <div class="col-md-6" position=50%>

                <div class="form-group">
                @foreach ($cusid as $cusid)
                  <label for="GenCusID">Customer ID</label>
                  <input type="text" class="form-control" value="{{$cusid->AUTO_INCREMENT}}" id="CusIdGen" disabled="">
               @endforeach
                </div> 
                
                 <div class="form-group">
                  <label for="enterNIC">NIC No.<font color="red">*</font></label>
                  <input type="text" class="form-control" name='CusNIC' id="NIC" placeholder="Enter NIC">
                </div>  

                 <div class="form-group">
                  <label for="EnterCusPassword1">Password<font color="red">*</font></label>
                  <input type="password" class="form-control" name='CusPW' id="CusPassword1" placeholder="Password" >
                 </div>

                 <div class="form-group">
                  <label for="EnterCusPassword2">Confirm Password<font color="red">*</font></label>
                  <input type="password" class="form-control" name='CusPW_confirmation' id="CusPassword2" placeholder="Confirm Password">
                 </div>
          
               </div>

               <div class="col-md-6">
          
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Vehicle Details</h3>
            </div>

             
            <!-- /.box-header -->
            <div class="box-body">
       
            <div class="form-group" style="width: 100px;">
                <label>Vehicle Type<font color="red">*</font></label>
                  <select class="form-control" name="vType">
                    <option>Car</option>
                    <option>Suv</option>
                    <option>Van</option>
                    <option>Bike</option>
                  </select>
            </div>
            
            <div class="form-group" style="width:300px;">
                  <label for="enterVmake">Make<font color="red">*</font></label>
                  <input type="text" class="form-control" name="vMake" placeholder="Enter Vehicle Make" >
            </div>  

            <div class="form-group" style="width:300px;">
                  <label for="enterVmodel">Model<font color="red">*</font></label>
                  <input type="text" class="form-control" name="vModel" placeholder="Enter Vehicle Model" >
            </div>    

            <div class="form-group" style="width:300px;">
                  <label for="enterVnum">Number Plate<font color="red">*</font></label>
                  <input type="text" class="form-control" name="vnumbP" placeholder="Enter Vehicle Number Plate" >
            </div>    
    
      
          
            </div>
          
          </div>
          
          </div>

              </div>
             <div class="box-footer" align="right">
              <button type="submit" class="btn btn-block btn-primary" style="width:100px;" >Submit</button>
          </div>
            </form>
          </div>  

          </div>
          
          </div>
          </section>


          <section class="content" class="cold-md-6">
          <div class="row">
          
           <div class="col-xs-12">    
            <section>
      
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit/ Delete Customer Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending" style="width: 50px;">Customer ID</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 361px;">Customer Name</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 200px;">Telephone</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 200px;">Email</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 200px;">Vehicle Make</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 200px;">Vehicle Model</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 200px;">Number Plate</th>
                </thead>
                <tbody>
                  @foreach($def as $customer)
                <tr role="row" class="odd">
                  <td class="sorting_1">{{$customer->cus_id}}</td>
                  <td>{{$customer->name}}</td>
                  <td>{{$customer->contactNo}}</td>
                  <td>{{$customer->mail}}</td>
                  <td>{{$customer->make}}</td>
                  <td>{{$customer->model}}</td>
                  <td>{{$customer->number_plate}}</td>
                  <td> <a class="btn btn-success" id="Edit" onclick="getCustomer('{{$customer->cus_id}}'); getVehicle('{{$customer->cus_id}}');" data-toggle="modal" href="#editModal"><i class="fa fa-edit"></i></a><button type="button" style="margin-left: 15px;" class="btn btn-danger" value="{{$customer->cus_id}}" onclick="deleteCustomer('{{$customer->cus_id}}')"><i class="fa fa-trash"></button></td>
                </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr><th rowspan="1" colspan="1">Customer ID</th><th rowspan="1" colspan="1">Customer Name</th><th rowspan="1" colspan="1">Telephone</th><th rowspan="1" colspan="1">Email</th><th rowspan="1" colspan="1">Vehicle Make</th><th rowspan="1" colspan="1">Vehicle Model</th><th rowspan="1" colspan="1">Number Plate</th>
              </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-8"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
            </div>
            <!-- /.box-body -->
          </div>
         </section>       
      </div>
      </div>
      </section>


      <script type="text/javascript">


  function getCustomer(id) {
    
        $.ajax({
         type: 'get',
         url: 'fillCustomer',
         data: {id: id},
         success: function(x) {
             details = JSON.parse(x);
             console.log(details);
             document.getElementById('CusIdGen1').value = details[0].cus_id;
             document.getElementById('CusName1').value = details[0].name;
             document.getElementById('CusEmail1').value = details[0].mail;
             document.getElementById('CusNIC1').value = details[0].nic;
             document.getElementById('cusTele1').value = details[0].contactNo;
             document.getElementById('CusAdd1').value = details[0].address;
             


         },
             error:function(x,y,z){
              alert(z);
             }
        });

        
        }

        function getVehicle(id) {
    
        $.ajax({
         type: 'get',
         url: 'fillVehicle',
         data: {id: id},
         success: function(x) {
             details = JSON.parse(x);
             console.log(details);
            
             document.getElementById('vMake1').value = details[0].make;
             document.getElementById('vModel1').value = details[0].model;
             document.getElementById('vnumbP1').value = details[0].number_plate;
             document.getElementById('vType1').value = details[0].type;

         },
             error:function(x,y,z){
              alert(z);
                 }
        });

        
        }

</script>
      <!-- Modal prompt for update-->
    <div class="modal fade" id="editModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                    <label>Customer ID</label>
                                    <input type="text" id="CusIdGen1" class="form-control" placeholder="Enter ..."  disabled>
                                    <label>Customer Name</label>
                                    <input type="text" id="CusName1" class="form-control" placeholder="Enter ..." >
                                    <label>Email Address</label>
                                    <input type="text" class="form-control" id="CusEmail1" placeholder="Enter ..." value="">
                                    <label>NIC No</label>
                                    <input type="text" class="form-control" id="CusNIC1" placeholder="Enter ..." value="">
                                    <label>Telephone</label>
                                    <input type="text" class="form-control" id="cusTele1" placeholder="Enter ..." value="">
                                    <label>Address</label>
                                    <input type="text" class="form-control" id="CusAdd1" placeholder="Enter ..." value="">
                                    <div class="form-group" style="width: 100px;">
                                        <label>Vehicle Type</label>
                                          <select class="form-control" id="vType1" >
                                            <option selected=""></option>
                                            <option>Car</option>
                                            <option>Suv</option>
                                            <option>Van</option>
                                            <option>Bike</option>
                                          </select>
                                    </div>
                                    <label>Make</label>
                                    <input type="text" class="form-control" id="vMake1" placeholder="Enter ..." value="">
                                    <label>Model</label>
                                    <input type="text" class="form-control" id="vModel1" placeholder="Enter ..." value="">
                                    <label>Number Plate</label>
                                    <input type="text" class="form-control" id="vnumbP1" placeholder="Enter ..." value="">
                                    
                                </div>
                            </form>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="save" onclick="updateCustomer(); updateVehicle();">Save changes</button>
                </div>
            </div>
        </div>
    </div>
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
  
 function updateCustomer() {

           

            var id = document.getElementById('CusIdGen1').value;

            var name = document.getElementById('CusName1').value;

            var mail = document.getElementById('CusEmail1').value;
            var nic = document.getElementById('CusNIC1').value;
            var tele = document.getElementById('cusTele1').value;
            var address = document.getElementById('CusAdd1').value;

              //alert(name);
            
                  $.ajax({
                       type: "get",
                       url: 'updateCustomer',
                       data: {id:id,name:name,mail:mail,nic:nic,tele:tele,address:address},
                       success: function() {
                       swal({
                            title: "Success!",
                            text: "successfully updated the customer information",
                            type: "success",
                            showCancelButton: false,
                            confirmButtonColor: '#1D84FF',
                            confirmButtonText: 'Ok',
                            closeOnConfirm: true
                            },
                       function(isConfirm){
                          if (isConfirm){
                         window.location.href="/RegisterCustomer";
                          }
                       });

                       
                      },
                         error: function(){
                              swal("Error!","Customer information update failed!", "error");
                            
                           }
                      })
                }



            function updateVehicle() {

           

            var id = document.getElementById('CusIdGen1').value;

            var make = document.getElementById('vMake1').value;

            var model = document.getElementById('vModel1').value;
            var plate = document.getElementById('vnumbP1').value;
            

              // alert(plate);
            
                  $.ajax({
                       type: "get",
                       url: 'updateVehicle',
                       data: {id:id,make:make,model:model,plate:plate},
                       success: function() {
                       swal({
                            title: "Success!",
                            text: "successfully updated the  information",
                            type: "success",
                            showCancelButton: false,
                            confirmButtonColor: '#1D84FF',
                            confirmButtonText: 'Ok',
                            closeOnConfirm: true
                            },
                       function(isConfirm){
                          if (isConfirm){
                         window.location.href="/RegisterCustomer";
                          }
                       });

                       
                      },
                         error: function(){
                              swal("Error!","xyz", "error");
                            
                           }
                      })
                }

</script>

<script type="text/javascript">
  
    function deleteCustomer(cusId) {
        swal({
            title: "Are you sure you want to delete?",
                    text: "You will not be able to recover this record!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Delete",
                    closeOnConfirm: false },
                function(confirm){
                        if(confirm) {
                            // alert("test"+cusId);
                            $.ajax({
                                method:'get',
                                url:'deleteCustomer',
                                data:{id:cusId},
                                success:function(){
                                    swal({
                                        title: "Deleted!",
                                        text: "Successfully deleted the employee record!",
                                        type: "warning",
                                        showCancelButton: false,
                                        confirmButtonColor: "#DD6B55",
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
    function success() {
                swal("Successful", "Data Successfully Saved!", "success")
                location.reload();
    }





</script>


</body>
</html>
