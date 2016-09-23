<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Employee Management | Information</title>
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
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <style>
    .datepicker{z-index:1151 !important;}
    </style>
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
                <li><a href="RegisterCustomer"><i class="fa fa-user-plus"></i> Register Customer</a></li>
                <li><a href="CustomerLoyalty"><i class="fa fa-thumbs-o-up"></i> Customer Loyalty</a></li>
                <li><a href="Feedback"><i class="fa fa-commenting"></i>Customer Feedback</a></li>
                <li><a href="Reports"><i class="fa fa-file-text"></i>Reports</a></li>
                <li><a href="CustomerDeficit"><i class="fa fa-minus-square"></i>Customer Deficits</a></li>
            </ul>
        </li>

        <li class="treeview">
          <a href="#">
           <i class="fa fa-user"></i> <span>Service Management</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
            <ul class="treeview-menu">
                <li><a href="ReservationsService"><i class="fa fa-circle-o"></i>Reservations</a></li>
                <li><a href="AssignService"><i class="fa fa-circle-o"></i>Assign Service</a></li>
                <li><a href="ServicePlans"><i class="fa fa-circle-o"></i>Service Plans</a></li>
                <li><a href="ServiceLogs"><i class="fa fa-circle-o"></i>Service Logs</a></li>
                <li><a href="ReportsServices"><i class="fa fa-circle-o"></i>Service Reports</a></li>
            </ul>
       </li>

        <li class="treeview active">
         <a href="#">
          <i class="fa fa-users"></i><span>Employee Management</span>
          
            <i class="fa fa-angle-left pull-right"></i>
           </span>
           </a>
            <ul class="treeview-menu">
              <li><a href="AddEmployee"><i class="fa fa-user-plus"></i>Recruitment</a></li>
              <li class="active"><a href="EmployeeInformation"><i class="fa fa-book"></i>Information</a></li>
              <li><a href="payroll"><i class="fa fa-dollar"></i>Payroll Management</a></li>
              <li><a href="leave"><i class="fa fa-calendar-minus-o"></i>Attendance</a></li>
              <li><a href="EmployeeLoans"><i class="fa fa-credit-card"></i>Employee Loans</a></li>
            </ul>
       </li>

       <li class="treeview">
         <a href="Janitorial">
          <i class="fa fa-bar-chart"></i><span>Janitorial Management</span>
            <i class="fa fa-angle-left pull-right"></i>
         </a>
           <ul class="treeview-menu">
               <li><a href="emp">Employee Management</a>
               </li>
               <li><a href="cust">Customer Management</a>
               </li>
               <li><a href="package">Categories</a>
               </li>
               <li><a href="order">Order Management</a>
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
      <div style="padding:15px">
          <div class="box">
              <div class="box-header">
                  <h3 class="box-title"></h3>
              </div>
              <div class="row">
                  <div class="col-xs-12">
                      <div class="col-xs-2">
                          <a onclick="window.open('AllEmployeesReport')"><button type="button" class="btn btn-block btn-success btn-flat">Export to PDF</button></a>
                      </div>
                  </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                      <div class="row">
                          <div class="col-sm-12">
                              <table id="all-employee-records-table" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                  <thead>
                                  <tr role="row">
                                      <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" style="width: 181px;">Employee Id</th>
                                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 224px;">Name</th>
                                      {{--<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 197px;">Address</th>--}}
                                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 154px;">Contact</th>
                                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 112px;">NIC</th>
                                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 112px;">Joined Date</th>
                                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 112px;">Service Type</th>
                                      {{--<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 112px;">Gender</th>--}}
                                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 112px;">Branch</th>
                                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 112px;">Designation</th>
                                      {{--<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 112px;">Manager</th>--}}
                                      <th rowspan="1" style="width: 112px;"></th>
                                      <th rowspan="1" style="width: 112px;"></th>
                                      <th rowspan="1" style="width: 112px;"></th>

                                  </tr>
                                  </thead>
                                  <tbody id="all-employee-records-tbody">

                                  </tbody>
                                  <tfoot>

                                  </tfoot>
                              </table>
                          </div>
                      </div>
                      <div class="row">

                          <div class="col-sm-7">
                              <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                  <ul class="pagination">
                                      <li class="paginate_button previous disabled" id="example1_previous">
                                          <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a>
                                      </li>
                                      <li class="paginate_button active">
                                          <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a>
                                      </li>
                                      <li class="paginate_button ">
                                          <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a>
                                      </li>
                                      <li class="paginate_button ">
                                          <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a>
                                      </li>
                                      <li class="paginate_button ">
                                          <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
              </div>

              <script>
                  function getEmployee(id) {
                      document.getElementById('employee-id').value = id;
                      $.ajax({
                          type: "get",
                          url: 'fillEmployee',
                          data: {id: id},
                          success: function(x) {
                              var details = JSON.parse(x);
                              document.getElementById('save').value=details[0].eid;
                              document.getElementById('employee-name').value = details[0].name;
                              document.getElementById('optionsRadios1').checked = details[0].gender;
                              document.getElementById('contact').value = details[0].contact;
                              document.getElementById('dob').value = details[0].dob;
                              document.getElementById('dateJoined').value = details[0].joined_date;
                              document.getElementById('address').value = details[0].address;
                              document.getElementById('designation').value = details[0].designation;
                              document.getElementById('branch').value = details[0].branch;
                              document.getElementById('manager').value = details[0].manager;
                          },
                          error:function(){

                          }
                      })
                  }

                  function updateEmployee() {
                      var id = document.getElementById('save').value;
                      var ename = document.getElementById('employee-name').value;
                      var gender = document.querySelector('input[name="optionsRadios"]:checked').value;
                      var contact = document.getElementById('contact').value;
                      var dob = document.getElementById('dob').value;
                      var address = document.getElementById('address').value;
                      var dateJoined = document.getElementById('dateJoined').value;
                      var designation = document.getElementById('designation').value;
                      var branch = document.getElementById('branch').value;
                      var manager = document.getElementById('manager').value;

                      if(ename==null||ename==""|| !ename.match("^[a-zA-Z\s]*$")){
                          alert("Invalid Name");
                          return false;
                      }
                      /*else if(contact == null|| contact == ""|| !contact.match("^\d{4}\d{3}\d{3}$")){
                          alert("Invalid contact number");
                          return false;
                      }*/
                      else if(address==null||address==""|| !address.match("^[a-zA-Z\s]*$")){
                          alert("Invalid address");
                          return false;
                      }
                      if(designation=="Select Designation"){
                          alert("Please select a designation");
                          return false;
                      }
                      else if(branch=="Select Branch"){
                          alert("Please select a branch");
                          return false;
                      }
                      else if(manager=="Select Manager"){
                          alert("Please select a manager");
                          return false;
                      }
                      $.ajax({
                          type: "get",
                          url: 'updateEmployee',
                          data: {id: id,ename:ename,gender:gender,contact:contact,dob:dob,address: address,dateJoined:dateJoined,designation:designation,branch:branch,manager:manager},
                          success: function() {
                              swal({
                                          title: "Success!",
                                          text: "successfully updated the employee information",
                                          type: "success",
                                          showCancelButton: false,
                                          confirmButtonColor: '#1D84FF',
                                          confirmButtonText: 'Ok',
                                          closeOnConfirm: true
                                      },
                                      function(isConfirm){
                                          if (isConfirm){
                                              window.location.href="/EmployeeInformation";
                                          }
                                      });
                          },
                          error: function(){
                              swal("Error!","Employee information update failed!", "error");
                          }
                      })
                  }
              </script>
              <!-- /.box-body -->
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
                                        <input type="text" class="form-control" id="employee-id" disabled>
                                        <label>Employee Name:</label>
                                        <input type="text" class="form-control" required pattern="^[a-zA-Z\s]*$" title ='only letters allowed' id="employee-name">
                                        <label>Date of Birth:</label>
                                        <div class="input-group" >
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="date" class="form-control pull-right datepicker" placeholder="date of birth" name="dob" id="dob" class="form-control" >
                                        </div>
                                        <label>Gender:</label><br>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="male" checked="">
                                        Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="female" checked="">
                                        Female<br>
                                        <label>Contact Number:</label>
                                        <input type="text" required pattern="^\d{4}\d{3}\d{3}$" title='(Format: XXXXXXXXXX)' class="form-control" id="contact">
                                        <label>Address:</label>
                                        <input type="text" class="form-control" id="address">
                                        <label>Employee Designation:</label>
                                        <select class="form-control" name="designation" id="designation">
                                            <option>Select Designation</option>
                                            @foreach($designations as $designation)
                                                <option value="{{ $designation->id }}">{{$designation->title}}</option>
                                            @endforeach
                                        </select>
                                        <label>Branch:</label>
                                        <select class="form-control" name="branch" id="branch">
                                            <option>Select Branch</option>
                                            @foreach($branches as $branch)
                                                <option value="{{ $branch->id }}">{{$branch->bname}}</option>
                                            @endforeach
                                        </select>
                                        <label>Date Joined:</label>
                                        <input type="text" class="form-control" id="dateJoined">
                                        <label>Manager:</label>
                                        <select class="form-control" name="manager" id="manager">
                                            <option>Select Manager</option>
                                            @foreach($managers as $manager)
                                                <option value="{{ $manager->eid }}">{{$manager->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" onclick="return updateEmployee()" id="save" >Save changes</button>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
<!-- ./wrapper -->
</div>
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
<script src="plugins/datatables/jquery.dataTables.min.js"></script>

<script src="../../dist/js/demo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>


<script>
//    $('#dob').datepicker({
//        autoclose: true
//
//    });
    function deleteEmployee(empId) {

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
                            alert("test"+empId);
                            $.ajax({
                                method:'get',
                                url:'deleteEmployee',
                                data:{eid:empId},
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

$('#all-employee-records-table').DataTable( {

    responsive: true,
    "ajax": {
        "type":"get",
        "url": "getAllEmployeesForInfo",
    },
    "pageLength": 100,

    columns: [
        { "data": "eid" },
        { "data": "name" },
        { "data": "contact" },
        { "data": "nic" },
        { "data": "joined_date" },
        { "data": "service_type" },
        { "data": "branch" },
        { "data": "title" },
        {"data" : null,
            "mRender": function(data, type, full) {
                return '<button type="button" onclick="getEmployee(\''+data.eid+'\')" id="update" value="'+data.eid+'" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button>';
            }
        },
        {"data" : null,
            "mRender": function(data, type, full) {


                return '<button type="button" value="'+data.eid+'" class="btn btn-danger" onclick="deleteEmployee(\''+data.eid+'\')"><i class="fa fa-trash"></i></button>';
            }
        }
    ]


} );

</script>
</body>
</html>
