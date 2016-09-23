<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inventory Management | Supplier</title>
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

    <script src="../../dist/js/demo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"> </script>

    <script>
   function alerts() {
                swal({   title: "Are you sure you want to delete?",   text: "You will not be able to recover this record!",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   confirmButtonText: "Delete",   closeOnConfirm: false }, function(){   swal("Deleted!", "Employee Record has been deleted", "success"); });
            }
    function emptyField(field) {
                swal("Invalid Field : "+field, "You Cannot Have "+field+" Field Empty", "warning");
    }
    function invalidl(field) {
                swal("Invalid Field : "+field, "You Can Have Only Numeric Values In "+field+" field ", "warning");
    }
      function nonNeg(field) {
                swal("Invalid Field : "+field, "You Can Have Only Positive Values In "+field+" field ", "warning");
    }
function formValidate(){
       var emailID = document.getElementById('Semail').value;
       var Sname = document.getElementById('Sname').value;
       var Addr = document.getElementById('Saddress').value;
       var phone = document.getElementById('Stel').value;
    
      if(!isEmpty(Sname,"Supplier Name"))
       if(emailValidate(emailID))
          if(validatePhone(phone))
            if(!isEmpty(Addr,"Supplier Address"))
                { 
                  success();
                   return true;
                 }
                   else
                   return false;
                 else
                  return false;
                else
                  return false;
                else
                  return false;
 
       
      
    function emailValidate(elem){         
        
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
        
      if(!isEmpty(elem,"Email"))
      {     
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please enter correct Email Address");
            document.getElementById('Semail').value="";
            return false;      
         }
        else
         return true;
     }
     return false;
       
       }
    function isEmpty(elem,field) {
        if(elem=="")
        {    
           alert("You cannot have "+field+" field Empty");
           return true;
        }
        else
        {
          return false;
        }  
    } 
    function validatePhone(elem){  
        var expr = /^[0-9]+$/;
      if(!isEmpty(elem,"Phone no."))
      {  
         if(!elem.match(expr))
         {
            alert("Invalid Phone : Only numeric values");
            document.getElementById('Stel').value="";
            return false;
         }
         if(elem.length!=10)
         {
            alert("Invalid Phone : Length of digits should be 10");
            document.getElementById('Stel').value="";
            return false;
         }
         else
          return true;
      }
      return false;
          
          }
      
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
           <i class="fa fa-car"></i> <span>Service Management</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="ReservationsService"><i class="fa fa-calendar"></i>Reservations</a></li>
            <li><a href="AssignService"><i class="fa fa-check-square-o"></i>Assign Service</a></li>
            <li><a href="ServicePlans"><i class="fa fa-map-o"></i>Service Plans</a></li>
            <li><a href="ServiceLogs"><i class="fa fa-clone"></i>Service Logs</a></li>
            <li><a href="ReportsServices"><i class="fa fa-file-text-o"></i>Service Reports</a></li>
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
    <i class="fa fa-link"></i> <span> Janitorial Management </span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>

        <ul class="treeview-menu">
          <li><a href="emp"><i class="fa fa-users"></i> Employee Management</a></li>
                <li><a href="cust"><i class="fa fa-user"></i> Customer Management</a></li>
                <li><a href="package"<i class="fa fa-cubes"></i> Categories</a></li>
                <li><a href="order"><i class="fa fa-cart-plus"></i> Order Management</a></li>
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

        <li class="treeview active ">
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
              <li class="active"><a href="Supplier"><i class="fa fa-truck"></i>Suppliers</a></li>
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
    
  </aside>

  
  <div class="content-wrapper">
    

    <section class="content-header">
      <h1>
        Suppliers
        <small>Details</small>
      </h1>
      <ol class="breadcrumb">
       
      </ol>
    </section>

 <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>View</h3>

              <p>Stock Details</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="Inventory" class="small-box-footer">Click here <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Purchases</h3>

              <p>Add item</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="Purchases" class="small-box-footer">Click here <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Sales</h3>

              <p>Sales Item</p>
            </div>
            <div class="icon">
              <i class="fa fa-sign-out"></i>
            </div>
            <a href="Sales" class="small-box-footer">Click here <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Suppliers</h3>

             @foreach($Supwidget as $sup)
              <h4>{{$sup->number+0}} suppliers </h4>
              @endforeach
            </div>
            <div class="icon">
              <i class="fa fa-user-plus"></i>
            </div>
            <a href="Supplier" class="small-box-footer">Click here<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

    <!-- Main content -->
    <section class="content">
    <P> </P>
      <!-- Your Page Content Here -->

 <div  align="center">

          <!-- Horizontal Form -->
          <div class="box box-info" style="width: 58%" >
            <div class="box-header with-border">
              <h3 class="box-title">Add Supplier Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- onsubmit =" return formValidate()" action="{{ route('supplierForm') }}" method="post" -->
            <form class="form-horizontal" name="supplierForm" id="supplierForm" onsubmit =" return formValidate()" action="{{ route('supplierForm') }}" method="post">
              <div class="box-body">
                
            
                <div class="form-group">
                  <label for="inputITEMID" class="col-sm-2 control-label">Supplier Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Sname" name="Sname" placeholder="Supplier Name" style="width:80%">
                  </div>
                </div>


                <div class="form-group">
                  <label for="inputITEMID" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Semail" name="Semail" placeholder="Email" style="width:80%">
                  </div>
                </div>


                 <div class="form-group">
                  <label for="inputITEMID" class="col-sm-2 control-label">Telephone</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Stel" name="Stel" placeholder="Telephone" style="width:80%">
                  </div>
                </div>


                    <div class="form-group">
                  <label for="inputITEMID" class="col-sm-2 control-label">Address</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Saddress" name="Saddress" placeholder="Address" style="width:80%">
                  </div>
                </div>



                



               
              </div>
              <!-- /.box-body -->
              
              <div class="box-footer">
            <!--    <button type="submit" class="btn btn-default">Cancel</button> -->
                <button type="submit" class="btn btn-primary pull-center name=addp" >Add Supplier</button>
                   <input type="hidden" name="_token" value="{{ Session::token() }}">
                <button type="reset" class="btn btn-danger pull-center"> Clear </button>




              </div>
              
              <!-- /.box-footer -->
            </form>
          </div>



</div>

 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Supplier Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">



<div class="row">
       <div class="col-sm-6">
       <div class="dataTables_filter" id="example1_filter">
       </div></div></div>
           
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>SID</th>
                  <th>Supplier Name</th>
                  <th>E-mail</th>
                  <th>Telephone</th>
                  <th>Address</th>

                </tr>
                </thead>
                <tbody>
                @foreach($suppliers as $supplier)
                    <tr>
                        <td>{{$supplier->ssid}}</td>
                        <td>{{$supplier->Sname}}</td>
                        <td>{{$supplier->Semail}}</td>
                        <td>{{$supplier->Stel}}</td>
                        <td>{{$supplier->Saddress}}</td>

                    <td><button type="button" onclick="getSupplier('{{$supplier->ssid}}')" id="update" value="{{$supplier->ssid}}" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button></td>
                    <td><button type="button" value="{{$supplier->ssid}}" class="btn btn-danger" onclick="deleteSupplier('{{$supplier->ssid}}')"><i class="fa fa-trash"></i></button></td>

                    </tr>

                @endforeach
      
                </tbody></table>
                  <script>
                      function deleteSupplier(ssid){
                      
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
                                          $.ajax({
                                              method:'get',
                                              url:'deleteSupplier',
                                              data:{ssid:ssid},
                                              success:function(){
                                                  swal({
                                                              title: "Deleted!",
                                                              text: "Successfully deleted the supplier record!",
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
                  </script>








                   <script>
                              function getSupplier(ssid) {  
                                  document.getElementById('Ussid').value = ssid;
                                  $.ajax({
                                      type: "get",
                                      url: 'fillSupplier',
                                      data: {ssid: ssid},
                                      success: function(x) {
                                          var details = JSON.parse(x);
                                        //   document.getElementById('save').value=details[0].eid;
                                          document.getElementById('save').value=details[0].ssid;
                                          document.getElementById('USname').value = details[0].Sname;
                                          document.getElementById('USemail').value = details[0].Semail;
                                          document.getElementById('UStel').value = details[0].Stel;
                                           document.getElementById('USaddress').value = details[0].Saddress;
                                          
                                      },
                                      error:function(){
                                      }
                                  })
                              }






                              function updateSupplier() {
                                  var ssid = document.getElementById('save').value;
                                  var Sname = document.getElementById('USname').value;
                                  var Semail = document.getElementById('USemail').value;
                                  var Stel = document.getElementById('UStel').value;
                                 var Saddress = document.getElementById('USaddress').value;


                        

     if(!isEmpty(Sname,"Supplier Name"))
       if(emailValidate(Semail))
          if(validatePhone(Stel))
            if(!isEmpty(Saddress,"Supplier Address"))
                { 
                         $.ajax({
                                      type: "get",
                                      url: 'updateSupplier',
                                      data: {ssid: ssid,Sname:Sname,Semail:Semail,Stel: Stel,Saddress:Saddress},
                                      success: function() {
                                          swal({
                                              title: "Success!",
                                              text: "successfully updated the Supplier information",
                                              type: "success",
                                              showCancelButton: false,
                                              confirmButtonColor: '#1D84FF',
                                              confirmButtonText: 'Ok',
                                              closeOnConfirm: true
                                          },
                                          function(isConfirm){
                                              if (isConfirm){
                                                  window.location.href="/Supplier";
                                              }
                                          });
                                      },
                                      error: function(){
                                          swal("Error!","Supplier information update failed!", "error");
                                      }
                                  })

                   return true;
                 }
                   else
                   return false;
                 else
                  return false;
                else
                  return false;
                else
                  return false;








          function emailValidate(elem){         
        
         atpos = elem.indexOf("@");
         dotpos = elem.lastIndexOf(".");
        
      if(!isEmpty(elem,"Email"))
      {     
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please enter correct Email Address");
            document.getElementById('USemail').value="";
            return false;      
         }
        else
         return true;
     }
     return false;
       
       }
    function isEmpty(elem,field) {
        if(elem =="")
        {    
          emptyField(field);
           //alert("You cannot have "+field+" field Empty");
           return true;
        }
        else
        {
          return false;
        }  
    } 
    function validatePhone(elem){  
        var expr = /^[0-9]+$/;
      if(!isEmpty(elem,"Phone no."))
      {  
         if(!elem.match(expr))
         {
            alert("Invalid Phone : Only numeric values");
            document.getElementById('UStel').value="";
            return false;
         }
         if(elem.length!=10)
         {
            alert("Invalid Phone : Length of digits should be 10");
            document.getElementById('UStel').value="";
            return false;
         }
         else
          return true;
      }
      return false;
          
          }



                              }

           
                          </script>

            </div>
          </div>

</div>

    </section>
    <!-- /.content -->
  </div>

    </section>   

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModal">Update Supply Information</h4>
                    </div>
                    <div class="modal-body">
                        <div class="box box-warning">
                            <div class="box-body">
                                <form role="form">
                                    
                                    <div class="form-group">
                                        <label>Supplier ID:</label>
                                        <input type="text" class="form-control" id="Ussid" name="Ussid" disabled>
                                        <label>Supplier Name:</label>
                                        <input type="text" class="form-control" id="USname" name="USname" disabled>
                                        <label>Supplier Email</label>
                                        <input type="text" class="form-control" id="USemail" name="USemail">
                                        <label>Supplier Telephone</label>
                                        <input type="text" class="form-control" id="UStel" name="UStel">
                                        <label>Supplier Address</label>
                                        <input type="text" class="form-control" id="USaddress" name="USaddress">
                                        
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="save" onclick="updateSupplier()">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
       
    </div>  

    <!-- /.content -->
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



<script>
    function alerts() {
                swal({   title: "Are you sure you want to delete?",   text: "You will not be able to recover this record!",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   confirmButtonText: "Delete",   closeOnConfirm: false }, function(){   swal("Deleted!", "Employee Record has been deleted", "success"); });
            }
    function success() {
                swal("Successful", "Supplier Successfully Saved!", "success");
    }
</script>

</body>
</html>