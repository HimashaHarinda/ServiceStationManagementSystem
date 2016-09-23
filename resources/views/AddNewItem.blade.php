<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add New Item</title>
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

   function success() {
                swal("Successful", "New Item Successfully Saved!", "success");
    }

  function formValidate(){


 var items = document.getElementById('itemName').value;
 var rate = document.getElementById('Irate').value;
 var rol = document.getElementById('rol').value;
 var price = document.getElementById('unitvalue').value;

  if(!isEmpty(items,"Item Name"))
      if(!isEmpty(rate,"Rate"))
        if(!isnotnum(rate,"Rate"))
          if(!greaterz(rate,"Rate"))
            if(!isEmpty(rol,"Re-order Level"))
              if(!isnotnum(rol,"Re-order Level"))
                if(!greaterz(rol,"Re-order Level"))
                  if(!isEmpty(price,"Unit Value"))
                    if(!isnotnum(price,"Unit Value"))
                      if(!greaterz(price,"Unit Value"))
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
        alert("You shoul have "+field+" greater than zero");
        return true;
      }
else
{
  return false;
  }
}

}

function calTotal() {

    var qty = document.getElementById('Pqty').value;
    var price = document.getElementById('Pprice').value;
    var disc = document.getElementById('Pdisc').value;
    var expr = /^[0-9]+$/;
    if(qty == "")
      {
        emptyField("Quantity");
        return;
      }
          else if(qty < 0)
          {
            nonNeg("Quantity");
            document.getElementById('Pqty').value="";
            return;
           }
               else if(isNaN(qty))
             {
                 invalidl("Quantity");
                 document.getElementById('Pqty').value="";

                return;
             }
    if(price == "")
      {
        emptyField("Price");

       return;
      }
         else if(price < 0)
        {
            nonNeg("Price");
            document.getElementById('Pprice').value="";
            return;
        }
            else if(isNaN(price))
            {
              invalidl("Price");
              document.getElementById('Pprice').value="";

              return;
            }
   if(disc < 0)
  {
      nonNeg("Discount");
      document.getElementById('Pdisc').value="";
      return;
  }
if(qty != "" && price != "" && disc != "" && (isNaN(disc)) )
{
    invalidl("Discount");
    document.getElementById('Pdisc').value="";

    return;
}



    if(qty != "" && price != "" && disc != "" && (!isNaN(disc)) )
    {
          var tot =((parseInt(qty)*parseFloat(price).toFixed(2))-parseFloat(disc).toFixed(2)).toFixed(2);
          var Ptotal = document.getElementById('Ptotal');
          Ptotal.value=tot;
          return;
    }
        if(qty != "" && price != "" && disc == "" )
    {
          var tot =(parseInt(qty)*parseFloat(price)).toFixed(2);
          var Ptotal = document.getElementById('Ptotal');
          Ptotal.value=tot;
          return;
    }




        }
function pad(n, width, z) {
  z = z || '0';
  n = n + '';
  return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
}
var a=1;
function inc() {
  var b="P";
  //
  var h = pad(a,3);
  var ret=b.concat(h);
   document.getElementById("pid").value=ret;
    a=a+1;
}
</script>


<script>

function repPur(){

 var from=document.getElementById('Pfrom').value;
 var to=document.getElementById('Pto').value;




  if(validateDate(from,"From Date"))
    if(validateDate(to,"To Date"))

          {

        return true;
        }

              else
        return false;
               else
        return false;







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


function validateDate(elem,field){
if(!isEmpty(elem,field)){
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
//document.getElementById("DATE").value = today;
        if(elem>today)
      {
          alert("Invalid Date Today is "+today);

          return false;
      }
        else
        return true;
        }
  else
  return false;
}





}







function repSal(){

 var from=document.getElementById('Sfrom').value;
 var to=document.getElementById('Sto').value;



if(validateDate(from,"From Date"))
    if(validateDate(to,"To Date"))

          {

        return true;
        }

              else
        return false;
               else
        return false;






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


function validateDate(elem,field){
if(!isEmpty(elem,field)){
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
//document.getElementById("DATE").value = today;
        if(elem>today)
      {
          alert("Invalid Date Today is "+today);

          return false;
      }
        else
        return true;
        }
  else
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

                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-cube"></i><span>Inventory Management</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="AddNewItem"><i class="fa fa-plus"></i>Add New Item</a></li>
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


  
  <div class="content-wrapper">
    
      <section class="content-header">
      <h1>
        Add New Item
        <small>Details</small>
      </h1>
      <ol class="breadcrumb">
        
      </ol>
    </section>


 <section class="content">


     

<div  align="center">

          <!-- Horizontal Form -->
          <div class="box box-info" style="width: 58%" >
            <div class="box-header with-border">
              <h3 class="box-title">Add New Item</h3>
            </div>
            <!-- /.box-header -->
            <!--    -->
            <form class="form-horizontal" name="addForm" id="addForm" onsubmit =" return formValidate()" action="{{ route('addForm') }}" method="post">
              <div class="box-body">
            
                <div class="form-group">
                  <label for="inputItemID" class="col-sm-2 control-label">Item Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="itemName" name="itemName" placeholder="Item Name" style="width:80%">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputItemID" class="col-sm-2 control-label">Issue Rate</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Irate" name="Irate" placeholder="Rate per day" style="width:80%">
                  </div>
                </div>



                <div class="form-group">
                  <label for="inputItemID" class="col-sm-2 control-label">Reorder Level</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="rol" name="rol" placeholder="Re-order level" style="width:80%">
                  </div>
                </div>



                <div class="form-group">
                  <label for="inputvalue" class="col-sm-2 control-label">Unit Value</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="unitvalue" name="unitvalue" placeholder="Unit Value" style="width:80%">
                  </div>
                </div>

    
                
              </div>
              <!-- /.box-body -->
              
              <div class="box-footer">
            <!--    <button type="submit" class="btn btn-default">Cancel</button> -->
                <button type="submit" class="btn btn-primary pull-center name=addp" >Add New Item</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}"> 
                 <button type="reset" class="btn btn-danger pull-center"> Clear </button>
              </div>
              
              <!-- /.box-footer -->
            </form>

             </div>
    </div>
       
 <section class="content">
      <div class="row" align="center">
         <div class="box box-info" style="width: 40%">
            <div class="box-header with-border">
              <h3 class="box-title">Purchase Report</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form class="form-horizontal" name="Preport" id="Preport" onsubmit ="return repPur()" action="{{ route('getPurchasePDF') }}"  method="post">
                <!-- text input -->

                       <div class="form-group">
                  <label for="inputItemID" class="col-sm-2 control-label">From : </label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="Pfrom" name="Pfrom" placeholder="Enter ..." style="width:80%">
                  </div>
                </div>


                      <div class="form-group">
                  <label for="inputItemID" class="col-sm-2 control-label">To : </label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="Pto" name="Pto" placeholder="Enter ..." style="width:80%">
                  </div>
                </div>

                <button type="submit" class="btn btn-primary pull-center" name="s" >Generate Report</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}"> 


                </form>



                <br><br>
                
                <div class="box-header with-border">
              <h3 class="box-title">Sales Report</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form class="form-horizontal" name="Sreport" id="Sreport" onsubmit ="return repSal()" action="{{ route('getSalesPDF') }}" method="post">
                <!-- text input -->

                       <div class="form-group">
                  <label for="inputItemID" class="col-sm-2 control-label">From : </label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="Sfrom" name="Sfrom" placeholder="Enter ..." style="width:80%">
                  </div>
                </div>


                      <div class="form-group">
                  <label for="inputItemID" class="col-sm-2 control-label">To : </label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="Sto" name="Sto" placeholder="Enter ..." style="width:80%">
                  </div>
                </div>

                <button type="submit" class="btn btn-primary pull-center" name="e" >Generate Report</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}"> 


                </form>




                </div>
    </section>












    <!-- /.content -->
  
    </section>
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





{{--<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>--}}
<!-- jQuery UI 1.11.4 -->







<script>
    function alerts() {
                swal({   title: "Are you sure you want to delete?",   text: "You will not be able to recover this record!",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   confirmButtonText: "Delete",   closeOnConfirm: false }, function(){   swal("Deleted!", "Employee Record has been deleted", "success"); });
            }
    function success() {
                swal("Successful", "Data Successfully Saved!", "success");
    }
</script>
</body>
</html>