<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Liability Management</title>
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
 <script src="../../dist/js/demo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
 <script src="../../dist/js/demo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
 <script src="../../dist/js/demo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

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
              <li class="active"><a href="CustomerLoyalty"><i class="fa fa-thumbs-o-up"></i> Customer Loyalty</a></li>
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
            <li class="active"><a href="reservations"><i class="fa fa-calendar-minus-o"></i> <span>Reservations</span></a></li>
        <li><a href="assignments"><i class="fa fa-male"></i> <span>Assignments</span></a></li>
        <li><a href="plans"><i class="fa fa-check-square"></i> <span>Service Plans</span></a></li>
        <li><a href="logs"><i class="fa fa-file-text-o"></i> <span>Logs</span></a></li>
        <li><a href="reports"><i class="fa fa-pencil-square-o"></i> <span>Reports</span></a></li>
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
                        <li class="active"><a href="EmployeeLoans"><i class="fa fa-credit-card"></i>Employee Loans</a></li>
                    </ul>
                </li>

       <li class="treeview">
  <a href="#">
    <i class="fa fa-link"></i> <span> Janitorial Management </span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>

        <ul class="treeview-menu">
          <li class="active"><a href="emp"><i class="fa fa-users"></i> Employee Management</a></li>
                <li><a href="cust"><i class="fa fa-user"></i> Customer Management</a></li>
                <li><a href="package"<i class="fa fa-cubes"></i> Categories</a></li>
                <li><a href="order"><i class="fa fa-cart-plus"></i> Order Management</a></li>
        </ul>
</li>


       <li class="treeview active">
         <a href="#">
          <i class="fa fa-money"></i><span>Finance Management</span>
            <i class="fa fa-angle-left pull-right"></i>
           </a>
            <ul class="treeview-menu">
              <li><a href="assets"><i class="fa fa-building"></i>Asset Management</a></li>
              <li><a href="assetDep"><i class="fa fa-tasks"></i>Asset Depreciation Information</a></li>
              <li class="active"><a href="liabilities"><i class="fa fa-plus-circle"></i>Liability Management</a></li>
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
                        <li><a href="OverWorkedEmployees"><i class="fa fa-fw fa-calendar-minus-o">&nbsp;&nbsp;&nbsp;</i>Over Worked Employees</a></li>
                    </ul>
                </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    
        <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Finance Management</a></li>
        <li class="active">Liability Management</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

     <div class="well">
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>

      <!-- Your Page Content Here -->
      <div class="row">
      <div class="col-md-6">
      <div class="box box-addLiabilities" style="margin-top:50px;" >
            <div class="box-header with-border">
              <h3 class="box-title">Add Liabilities</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{url('add')}}"> 
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
              <div class="box-body">
                <div class="form-group">
                  <label>Description</label>
                  <input type="text" class="form-control" placeholder="Enter Description" name="description">
                </div>
                <div class="form-group">
                  <label>Amount</label>
                  <input type="text" class="form-control" placeholder="Enter Amount" name="amount">
                </div>
                <div class="form-group">
                  <label>Company</label>
                  <input type="text" class="form-control" placeholder="Enter Company" name="company">
                </div>
              </div>              
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          </div>

          <div class="col-md-6">
          <div class="box box-addAsset" style="margin-top:50px;">
            <div class="box-header with-border">
              <h3 class="box-title">Calculate Interest</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{url('addInterest')}}">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
              <div class="box-body">
                <div class="form-group">
                  <label>ID</label>
                  <select class="form-control" id="dLiability" name="l1">
                    <option></option>
                    @foreach($liabilities as $liability)
                    <option>{{$liability->liabilityID}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Interest Rate</label>
                  <input type="text" class="form-control" placeholder="Enter Interest Rate" name="l2" id="l2">
                </div>
                <div class="form-group">
                  <label>Duration</label>
                  <input type="text" class="form-control" placeholder="Enter Duration" name="l3" id="l3">
                </div>
                <div class="form-group">
                <button class="btn btn-primary" onclick="calculateInterest(); return false;">Calculate Interest</button>
              </div>
                <div class="form-group">
                  <label>Interest</label>
                  <input type="text" class="form-control" id="linterest" name="l6">
                </div>

                <div>
                <button type="submit" class="btn btn-primary">Save</button>
                </div>
                <!-- /.input group -->
              </div>
              </div> <!-- /.box-body -->              
            </form>
            </div>

            <div class="col-md-6">
      <div class="box box-addLiabilities" >
            <div class="box-header with-border">
              <h3 class="box-title">Update Amount</h3> 
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form"> 
              <div class="box-body">
                <div class="form-group">
                  <label>ID</label>
                  <select class="form-control" id="updateLiabilityID" name="updateLiabilityID">
                    <option>Select liability</option>
                    @foreach($liabilities as $liability)
                    <option>{{$liability->liabilityID}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Amount</label>
                  <textarea name="model" class="form-control" id="updatedAmount">
                  </textarea>
                </div>

                 <div class="box-footer">
                <button class="btn btn-primary" value="{{$liability->liabilityID}}"  onclick="updateLiability(); return false;">Update</button>
              </div>
              </div>              
              <!-- /.box-body -->

             
            </form>
            <script>
                        function updateLiability() {
                              swal({
                                title: "Are you sure you want to update?",
                                text: "You will not be able to recover this record!",
                                type: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#DD6B55",
                                confirmButtonText: "Update",
                                closeOnConfirm: false },
                              function(confirm){
                                  console.log(123,confirm);
                                if(confirm) {
                                    var liabilityID = $('#updateLiabilityID').val();
                                    var amount = $('#updatedAmount').val();
                                  $.ajax({
                                  method:'get',
                                  url:'updateEmployee',
                                  data:{liabilityID:liabilityID, amount:amount},
                                  success:function(){
                                    swal({
                                        title: "Updated!",
                                        text: "Successfully updated the employee record!",
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
                            }
                            else{
                            }
                          }
                          );
                          }
    
                          function success() {
                            swal("Successful", "Data Successfully Updated!", "success")
                            location.reload();
                          } 
                        </script>

          </div>

          
        
          </div>
            

          <div id='gcw_mainFfawyRe90' class='col-xs-6'></div>
<a id='gcw_siteFfawyRe90' href='http://freecurrencyrates.com/en/'>FreeCurrencyRates.com</a>
<script>function reloadFfawyRe90(){ var sc = document.getElementById('scFfawyRe90');if (sc) sc.parentNode.removeChild(sc);sc = document.createElement('script');sc.type = 'text/javascript';sc.charset = 'UTF-8';sc.async = true;sc.id='scFfawyRe90';sc.src = 'http://freecurrencyrates.com/en/widget-vertical?iso=LKRUSDGBPJPYCNYINR&df=2&p=FfawyRe90&v=fits&source=fcr&width=245&width_title=0&firstrowvalue=1&thm=A6C9E2,FCFDFD,4297D7,5C9CCC,FFFFFF,C5DBEC,FCFDFD,2E6E9E,000000&title=Currency%20Converter&tzo=-330';var div = document.getElementById('gcw_mainFfawyRe90');div.parentNode.insertBefore(sc, div);} reloadFfawyRe90(); </script>
<!-- put custom styles here: .gcw_mainFfawyRe90{}, .gcw_headerFfawyRe90{}, .gcw_ratesFfawyRe90{}, .gcw_sourceFfawyRe90{} -->
<!--End of Currency Converter widget by FreeCurrencyRates.com -->

            <div class="col-xs-12">

                      <div class="box" id="content">
            <div class="box-header">
              <h3 class="box-title">Liability Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" action="{{url('search/autocomplete')}}" method="GET" submit="">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                  <div class="row"><div class="col-sm-12"></div>
                      <div class="col-sm-6">
                          <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1" id="q"></label></div></div></div>
                  <div class="row"><div class="col-sm-12" id="searchResult">
              @include('liabilities_search')
                      </div></div></div>


              <script>

                        function deleteLiabilities(liabilityID) {
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
                                  url:'deleteLiabilities',
                                  data:{liabilityID:liabilityID},
                                  success:function(){
                                    swal({
                                        title: "Deleted!",
                                        text: "Successfully deleted the record!",
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
                            }
                            else{
                            }
                          }
                          );
                          }
    
                          function success() {
                            swal("Successful", "Data Successfully Saved!", "success")
                            location.reload();
                          } 
                        </script>

              <div class="row"><div class="col-sm-5"></div><div class="col-sm-7"></div></div></div>
            </div>
            <!-- /.box-body -->
          
          </div>
</div>
            </div>
            </div>

            <div class="row">
            <div class="col-md-12">
            
            >
          </div>
          </div>


    </section>

      
  </div>

<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

<script type="text/javascript">

    $('#updateLiabilityID').change(function () {
        var val = $( this ).val();
        if(val != 0){
            ajaxCall(val);

        }
    });

        function ajaxCall(val){

      var formData = "amount="+val;

    var uri = 'liabilities/getliability/'+val;
    var url = uri;
    //alert(url);
    $.ajax({
        url: url,
        type: "GET",
        dataType: "JSON",
        data: formData,
        success: (function(html){
            updateHtml(html);
            //alert(val);
        }),
        error: (function (responce, status, error) {
            //alert(status);
        })
    });
    }

    function updateHtml(html){

    var htmlVal = '';
        $.each(html, function() {
            htmlVal += ""+this.amount+"";
    });
    $('#updatedAmount').html(htmlVal);
}

  function calculateInterest(){

      var l1 = $('#dLiability').val();
      var l2 = $('#l2').val();
      var l3 = $('#l3').val();

                        $.ajax({
                                  method:'get',
                                  url:'liabilities/calInterest',
                                  data:{l1:l1, l2:l2, l3:l3},
                                  dataType: 'json',
                                  cache: false,
                                  success: function(data)
                                  {
                                      $('#linterest').val(data);
                                      console.log(data);
                                    }
                            });
                    }
                    

    function alerts() {
                swal({   title: "Are you sure you want to delete?",   text: "You will not be able to recover this record!",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   confirmButtonText: "Delete",   closeOnConfirm: false }, function(){   swal("Deleted!", "Employee Record has been deleted", "success"); });
            }

    function success() {
                swal("Successful", "Data Successfully Saved!", "success")
    }

     $("#q").keyup(function () {
        var value = $(this).val();

        $.ajax({
            method:'get',
            url: "search/liabilitySearch",
            data: {
                'term' : value
            },
            dataType: "json",
            cache: false,
            success: function(data){
                $('#searchResult').html(data);
            }
        });
    });
</script>
</body>
</html>
