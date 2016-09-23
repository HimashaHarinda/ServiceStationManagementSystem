<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inventory Management | Inventory</title>
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"> </script>
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
            <li><a href="AssignService"><i class="fa fa-check-square-o"></i>Assign Service</i></a></li>
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
              <li class="active"><a href="Inventory"><i class="fa fa-cubes"></i>Inventory</a></li>
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
    
  </aside>

  
  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Inventory
        <small>Details about stock</small>
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
              <h2>Current Stock</h2>

              @foreach($Iwidget as $w)
              <h4>Rs.{{$w->tot+0}} </h4>
              @endforeach
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

              <p>Details</p>
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
 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Item Details</h3>
            </div> <div></div>
            <!-- /.box-header -->
            <div class="box-body">

<div class="row">
        <div class="col-sm-6">
            <div class="dataTables_filter" id="example1_filter">  
            </div>
       </div>
  </div>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Item ID</th>
                  <th>Item Name</th>
                  <th>Issue_rate(approx)</th>
                  <th>Re-order level</th>
                  <th>Qty in hand</th>
                  <th>Unit Value(Rs.)</th>
                  <th>Total(Rs.)</th>
                  <th>Availability #Days</th>
                  <th>  <button type="button" onclick="" id="rol"  class="btn btn-warning" data-toggle="modal" data-target="#myModal2"><i class="fa fa-warning"></i></button> </th>
                  <th> <a href="AddNewItem" button class="btn btn-success" type="button"> <i class="fa fa-plus-circle"></i></button> </a> </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                @foreach($items as $item)
                  <tr>
                  <td>{{$item->itemid}}</td>
                  <td>{{$item->itemName}}</td>
                  <td>{{$item->Irate}}</td>
                  <td>{{$item->rol}}</td>
                  <td>{{$item->qty}}</td>
                  <td>{{$item->unitvalue}}</td>
                  <td>{{$item->tot}}</td>
                  <td>{{$item->daysleft}}</td>
                  <td><button type="button" onclick="getItem('{{$item->itemid}}')" id="update" value="{{$item->itemid}}" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i></button></td>
                   
                     <td><button type="button" value="{{$item->itemid}}" class="btn btn-danger" onclick="deleteItem('{{$item->itemid}}')"><i class="fa fa-trash"></i></button></td>
                  </tr>

                @endforeach
             </tbody>
              </table>
              <div class="col-md-2" style="margin-top:10px; margin-left:85%;">
      <a href="PurchaseOrder" button class="btn btn-block btn-info" type="button"><i class="fa fa-share-square-o">&nbsp &nbsp Send PO</i></button></a>

                  </div>
                  </div>
            </div>
            <!-- /.box-body -->
            <div>
          </div>


            <script>
                              function getItem(itemid) {  
                                  document.getElementById('Mitemid').value = itemid;
                                  $.ajax({
                                      type: "get",
                                      url: 'fillItem',
                                      data: {itemid: itemid},
                                      success: function(x) {
                                          var details = JSON.parse(x);
                                        //   document.getElementById('save').value=details[0].eid;
                                          document.getElementById('save').value=details[0].itemid;
                                          document.getElementById('MitemName').value = details[0].itemName;
                                          document.getElementById('MIrate').value = details[0].Irate;
                                          document.getElementById('Mrol').value = details[0].rol;
                                           document.getElementById('Mqty').value = details[0].qty;
                                           document.getElementById('Munitvalue').value = details[0].unitvalue;
                                          document.getElementById('Mtot').value = details[0].tot;
                                           document.getElementById('Mdaysleft').value = details[0].daysleft;
                                          
                                      },
                                      error:function(){
                                      }
                                  })
                              }
                              function updateItem() {
                                  var itemid = document.getElementById('save').value;
                                  var itemName = document.getElementById('MitemName').value;
                                  var Irate = document.getElementById('MIrate').value;
                                  var rol = document.getElementById('Mrol').value;
                                 var qty = document.getElementById('Mqty').value;
                                  var unitvalue = document.getElementById('Munitvalue').value;
                                  var tot = document.getElementById('Mtot').value;
                                 var daysleft = document.getElementById('Mdaysleft').value;




                                   if(!isEmpty(itemName,"Item Name"))
                                      if(!isEmpty(Irate,"Rate"))
                                          if(!isnotnum(Irate,"Rate"))
                                             if(!greaterz(Irate,"Rate"))
                                                 if(!isEmpty(rol,"Re-order Level"))
                                                     if(!isnotnum(rol,"Re-order Level"))
                                                         if(!greaterz(rol,"Re-order Level"))
                                                            if(!isEmpty(unitvalue,"Unit Value"))
                                                                if(!isnotnum(unitvalue,"Unit Value"))
                                                                   if(!greaterz(unitvalue,"Unit Value"))
       
                                            {
                   $.ajax({
                                      type: "get",
                                      url: 'updateItem',
                                      data: {itemid: itemid,itemName:itemName,Irate:Irate,rol: rol,qty:qty,unitvalue:unitvalue,tot:tot,daysleft:daysleft},
                                      success: function() {
                                          swal({
                                              title: "Success!",
                                              text: "successfully updated the Item information",
                                              type: "success",
                                              showCancelButton: false,
                                              confirmButtonColor: '#1D84FF',
                                              confirmButtonText: 'Ok',
                                              closeOnConfirm: true
                                          },
                                          function(isConfirm){
                                              if (isConfirm){
                                                  window.location.href="/Inventory";
                                              }
                                          });
                                      },
                                      error: function(){
                                          swal("Error!","Item information update failed!", "error");
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
                                        else
                                         return false;
    
                                 else
                                   return false;
 
                          else
                          return false;
                      else
                       return false;
                 else
                return false;
       else
      return false;


function validateDate(elem){
if(!isEmpty(elem,"Date")){  
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
      
      if(dd<10){
        dd='0'+dd;
      } 
      if(mm<10){
        mm='0'+mm;
      } 
      var today = yyyy+'-'+mm+'-'+dd;

        if(dates!==today)
      {
          alert("Invalid Date Today is "+today);
          document.getElementById('Pdate').value="";
          return false;
      }
        else
        return true;
        }
  else
  return false;
}
function selectValidate(elem)
  {
    if(elem == "Choose Supplier ID")
    {
      alert("Please Choose Supplier");
      return false;
    }
    else
      return true;
  }
function isEmpty(elem,field) {
  if(elem == "")
      {   
        alert("You cannot have "+field+" field Empty");
        return true;
      }
else
{
  return false;
  }  
}
function isnotnum(elem,field)
{
  if(isNaN(elem))
      {   
        alert("Input field "+field+" should be numeric");
        return true;
      }
else
{
  return false;
  }  
}
function greaterz(elem,field)
{
  if(elem<1)
      {   
        alert("You should have "+field+" greater than 0");
        return true;
      }
else
{
  return false;
  }  
}
              
           } 

</script>
    </section>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModal">Update Item Information</h4>
                    </div>
                    <div class="modal-body">
                        <div class="box box-warning">
                            <div class="box-body">
                                <form role="form">
                                    
                                    <div class="form-group">
                                        <label>Item ID:</label>
                                        <input type="text" class="form-control" id="Mitemid" name="Mitemid" disabled>
                                        <label>Item Name:</label>
                                        <input type="text" class="form-control" id="MitemName" name="MitemName" disabled>
                                        <label>Issue Rate</label>
                                        <input type="text" class="form-control" id="MIrate" name="MIrate">
                                        <label>Re-order Level</label>
                                        <input type="text" class="form-control" id="Mrol" name="Mrol">
                                        <label>Quantity In Hand</label>
                                        <input type="text" class="form-control" id="Mqty" name="Mqty" disabled>
                                         <label>Unit Value</label>
                                        <input type="text" class="form-control" id="Munitvalue" name="Munitvalue">
                                        <label>Total Value</label>
                                        <input type="text" class="form-control" id="Mtot" name="Mtot" disabled>
                                        <label>Availability #Days</label>
                                        <input type="text" class="form-control" id="Mdaysleft" name="Mdaysleft" disabled>
                                        
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="save" onclick="updateItem()">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
       
    </div>  


    <div class="modal modal-danger" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
            
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModal2">Item Critical Level Information</h4>
                    </div>
                    <div class="modal-body">

                          <table id="example2" class="table table-bordered">
                <thead>
                <tr>
                  <th>Item ID</th>
                  <th>Item Name</th>
                  <th>Quantity In Hand</th>
                  <th>Re-Order Level</th>
                  <th>Status</th>
                  </tr></thead>  
                
       @foreach($chckROL as $ch)  
       @if (count($ch) != 0)

   
      
      <tr>
      <td>{{$ch->itemid}}</td>
      <td>{{$ch->itemName}}</td>
      <td>{{$ch->qty}}</td>
      <td>{{$ch->rol}}</td>
      <td>Level Critical</td>
      </tr>

     

      @else

    I <h2>don't have any records!</h2>
      @endif
      @endforeach

       </table>

                    </div>
                    <div class="modal-footer">
                        
                    </div>
                </div>
            </div>
        </div>
       
    </div> 
  <!-- /.content -->
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

<script>
    function alerts() {
                swal({   title: "Are you sure you want to delete?",   text: "You will not be able to recover this record!",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   confirmButtonText: "Delete",   closeOnConfirm: false }, function(){   swal("Deleted!", "Employee Record has been deleted", "success"); });
            }
    function success() {
                swal("Successful", "Data Successfully Saved!", "success")
    }
</script>



<script>
                      function deleteItem(itemid){
                      
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
                                              url:'deleteItem',
                                              data:{itemid:itemid},
                                              success:function(){
                                                  swal({
                                                              title: "Deleted!",
                                                              text: "Successfully deleted the Item record!",
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


</body>
</html>