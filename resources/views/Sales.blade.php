<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inventory Management | Sales</title>
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





    <script src="../../dist/js/demo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"> </script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script
 <![endif]-->


 

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
                swal("Successful", "Issued Item Successfully Saved!", "success");
    }



window.onload=function(){


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
      var today = yyyy+'-'+mm+'-'+dd


  if (document.getElementById("Idate").value == "") {
    document.getElementById("Idate").value = today;
  }
}



function calTotal() {
    var qty = document.getElementById('Iqty').value;
    var price = document.getElementById('Iprice').value;
    var disc = document.getElementById('Idisc').value;
    var expr =/^-?[0-9]+$/;
    if(qty == "")
      {    
        emptyField("Quantity");
       //alert("You cannot have Quantity Empty");
       return;
      }
          else if(qty < 0)
          {    
            nonNeg("Quantity");
            document.getElementById('Iqty').value="";
       
            return;
           }
               else if(isNaN(qty))
             { 
                 invalidl("Quantity");  
                 document.getElementById('Iqty').value="";        
                //alert("Invalid Quantity Field : You Cannot Enter Letters");
                return; 
             }
               else if(!qty.match(expr))
         {
            alert("Invalid Quantity : Only Integer values");
            document.getElementById('Iqty').value="";
         
            return;
         }
    if(price == "")
      {    
        emptyField("Price");
       //alert("You cannot have price Empty");
       return;
      }
         else if(price < 0)
        {    
            nonNeg("Price");
            document.getElementById('Iprice').value="";
            return;
        }
            else if(isNaN(price))
            { 
              invalidl("Price"); 
              document.getElementById('Iprice').value="";         
              //alert("Invalid Price Field : You Cannot Enter Letters");
              return; 
            }
        if(disc == "")
      {    
        emptyField("Discount");
       //alert("You cannot have price Empty");
       return;
      }
 else if(disc < 0)
  {    
      nonNeg("Discount");
      document.getElementById('Idisc').value="";
      return;
  }
if(qty != "" && price != "" && disc != "" && (isNaN(disc)) )
{
    invalidl("Discount");
    document.getElementById('Idisc').value="";
    //alert("Invalid Discount Field : You Cannot Enter Letters");
    return;
}
      
    
   
    if(qty != "" && price != "" && disc != "" && (!isNaN(disc)) )
    {   
          var tot =((parseInt(qty)*parseFloat(price).toFixed(2))-parseFloat(disc).toFixed(2)).toFixed(2);
          var Itotal = document.getElementById('Itotal');
          Itotal.value=tot;
          return;
    }
 
     
   
             }
     
    
        
function formValidate(){

var items = document.getElementById('IitemName').value;
 var dates = document.getElementById('Idate').value;
 var qty = document.getElementById('Iqty').value;
 var price = document.getElementById('Iprice').value;
 var disc = document.getElementById('Idisc').value;
 var totalp = document.getElementById('Itotal').value;

  if(selectValidate(items,"Item Name"))
      if(!isEmpty(qty,"Quantity"))
      
       
      if(validateDate(dates))
        
        
        if(!isEmpty(price,"Price"))
          if(!isEmpty(disc,"Discount"))
            if(!isEmpty(totalp,"Total"))
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
//document.getElementById("DATE").value = today;
        if(dates!==today)
      {
          alert("Invalid Date Today is "+today);
          document.getElementById('Idate').value="";
          return false;
      }
        else
        return true;
        }
  else
  return false;
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
function selectValidate(elem,field)
  {
    if(elem == "Select "+field)
    {
      alert("Please Choose "+field);
      return false;
    }
    else
      return true;
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
              <li><a href="Inventory"><i class="fa fa-cubes"></i>Inventory</a></li>
              <li><a href="Purchases"><i class="fa fa-shopping-cart"></i>Purchases</a></li>
              <li><a href="PurchaseReturns"><i class="fa fa-refresh"></i>Purchase Return</a></li>
              <li  class="active"><a href="Sales"><i class="fa fa-money"></i>Sales</a></li>
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
        Sales
        <small>Details about Sales</small>
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
              <h2>Sales Today</h2>

               @foreach($Swidget as $w)
              <h4>Rs. {{$w->tot+0}} </h4>
              @endforeach
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

 <div  align="center">

          <!-- Horizontal Form -->
          <div class="box box-info" style="width: 58%" >
            <div class="box-header with-border">
              <h3 class="box-title">Add Sales Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- onsubmit =" return formValidate()" action="{{ route('salesForm') }}" method="post" -->
            <form class="form-horizontal" name="salesForm" id="salesForm" onsubmit =" return formValidate()" action="{{ route('salesForm') }}" method="post">
              <div class="box-body">

              <div class="form-group">
               <label for="input" class="col-sm-2 control-label">Item Name</label>
               <div class="col-sm-10">
                  <select class="form-control" id="IitemName" name="IitemName" style="width:80%">
                    <option>Select Item Name</option>

                    @foreach($itm as $it)
                    <option> {{ $it -> itemName }} </option>
                    @endforeach
                  

                  </select>
                  </div>
                </div>



                 <div class="form-group">
                  <label for="inputIssueqty" class="col-sm-2 control-label">Quantity</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Iqty" name="Iqty" name="Iqty" placeholder="Quantity" style="width:80%">
                  </div>
                </div>



            <div class="form-group">
                  <label for="inputdate" class="col-sm-2 control-label">Date</label>

                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="Idate" name="Idate" placeholder="Issue Date" style="width:80%" readonly>
                  </div>
                </div>



                 <div class="form-group">
                  <label for="inputdate" class="col-sm-2 control-label">Selling price</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Iprice" name="Iprice" placeholder="Selling price(Rs.)" style="width:80%">
                  </div>
                </div>
                

                 <div class="form-group">
                  <label for="inputITEMID" class="col-sm-2 control-label">Discount</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Idisc" name="Idisc" placeholder="Discount(Rs.)" style="width:80%">
                  </div>
                </div>




                  <div class="form-group">
                  <label for="Total" class="col-sm-2 control-label">Total</label>
                 <div class="input-group input-group-sm-10" style="width:63%">
                <input type="text" class="form-control" name="Itotal" id="Itotal" placeholder="Total Amount(Rs.)" readonly>
                    <span class="input-group-btn">
                      <button type="button" onclick="return calTotal()" class="btn btn-info btn-flat">Total</button>
                    </span>
              </div>
                </div>

       
              </div>
              <!-- /.box-body -->
              
              <div class="box-footer">
            
                <button type="submit" class="btn btn-primary pull-center name=addp" >Add Sales Item</button>
                 
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
              <h3 class="box-title">Sales Details</h3>
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
                  <th>Sales ID</th>
                  <th>Item Name</th>
                  <th>Quantity</th>
                  <th>Date </th>
                  <th>Unit Value(Rs.)</th>
                  <th>Discount(Rs.) </th>
                  <th>Total(Rs.)</th>
                </tr>
                </thead>
                <tbody>
            @foreach($sales as $sale)
                  <tr>
                  <td>{{$sale->iid}}</td>
                  <td>{{$sale->Iitemid}}</td>
                  <td>{{$sale->Iqty}}</td>
                  <td>{{$sale->Idate}}</td>
                  <td>{{$sale->Iprice}}</td>
                  <td>{{$sale->Idisc}}</td>
                  <td>{{$sale->Itotal}}</td>
                  </tr>

                @endforeach
              
                </tbody>
            
              </table>
            </div>
            <!-- /.box-body -->
          </div>

    </section>
    <!-- /.content -->
  </div>

    </section>    

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



</body>
</html>