<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Customer Management | Customer Feedback</title>
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
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
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
              <li><a href="RegisterCustomer"><i class="fa fa-user-plus"></i> Register Customer</a></li>
              <li><a href="CustomerLoyalty"><i class="fa fa-thumbs-o-up"></i> Customer Loyalty</a></li>
              <li class="active"><a href="Feedback"><i class="fa fa-commenting"></i>Customer Feedback</a></li>
              <li><a href="ReportsCustomer"><i class="fa fa-file-text"></i>Reports</a></li>
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
      <h1>
        Customer Feedback
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Customer Management</a></li>
        <li class="active">Customer Feedback</li>
      </ol>
    </section>

          <section>
           <div class="col-md-12">    
              <div class="box">
            <div class="box-header">
              <h3 class="box-title">View Customer Feedback</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
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
                  <th>Feedback ID</th>
                  <th>Date</th>
                  <th>Feedback</th>
                  <th></th>
                </tr>
                <tr>
                @foreach ($feedback as $feedback)
                  <td>{{$feedback->cusID}}</td>
                  <td>{{$feedback->feedbackID}}</td>
                  <td>{{$feedback->date}}</td>
                  <td>{{$feedback->feedback}}</td>
                 
                  <td><button type="button" class="btn btn-success" data-toggle="modal" href="#editModal" onclick="fillfeed('{{$feedback->cusID}}'); fillname('{{$feedback->cusID}}');"><i class="fa fa-edit"></i></button></td>
                  
                </tr>
                @endforeach
                
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
      
          </div>
          </section>


          <div class="modal fade" id="editModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel"> View Feedback </h4>
                </div>
                <div class="modal-body">
                    <div class="box box-warning">
                        <div class="box-body">
                            <form role="form" method="POST" action="{{url('Feedback')}}">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Customer ID</label>
                                    <input type="text" id="CusId1" name="CusId1" class="form-control" readonly>
                                    <label>Customer Name</label>
                                    <input type="text" id="CusName1" class="form-control" disabled>
                                    <label>Feedback</label>
                                    <textarea class="form-control" id="feedback" rows="3" disabled></textarea>
                                    <label>Reponse</label>
                                    <textarea class="form-control" id="response" name="response" rows="3"></textarea>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                    <button type="submit" class="btn btn-primary" id="save" onclick="">Repond</button>

                                </div>
                            </form>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>

            </div>
        </div>
    </div>



</body>
<!-- ./wrapper -->


<script type="text/javascript">
  function fillfeed(id) {
    
        $.ajax({
         type: 'get',
         url: 'fillfeed',
         data: {id: id},
         success: function(x) {
             details = JSON.parse(x);
             console.log(details);
             document.getElementById('CusId1').value = details[0].cusID;
             
             document.getElementById('feedback').value = details[0].feedback;
             

         },
             error:function(x,y,z){
              alert(z);
             }
        });
}

 function fillname(id) {
    
        $.ajax({
         type: 'get',
         url: 'fillname',
         data: {id: id},
         success: function(x) {
             details = JSON.parse(x);
             console.log(details);
           
             document.getElementById('CusName1').value = details[0].name;
            
             

         },
             error:function(x,y,z){
              alert(z);
             }
        });
}

</script>












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
<script>
    function alerts() {
                swal({   title: "Are you sure you want to delete?",   text: "You will not be able to recover this record!",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   confirmButtonText: "Delete",   closeOnConfirm: false }, function(){   swal("Deleted!", "Employee Record has been deleted", "success"); });
            }

    function success() {
                swal("Successful", "Data Successfully Saved!", "success")
    }
</script>
</body>
</html>
