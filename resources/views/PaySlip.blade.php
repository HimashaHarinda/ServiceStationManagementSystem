<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>All Employees Report</title>
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
        $(document).ready(function () {
            window.print();

        })

    </script>

</head>
<body>
<div class=" col-md-12">
    <div class="col-md-1">
        <img src="dist/img/aglkb.jpg" style="width: 600px; height: 100px;"><p><b>Pay Slip</b></p>
    </div>
    <div class="col-md-4"></div>
</div>

<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
<div class="col-md-6" align="justify">
    <div class="box-body">
        <h3> Employee id: {{$id}}</h3>
        <h3> Month: {{$month}}</h3>
        <h3> Year: {{$year}}</h3>
        <br><br>
        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">

                        <tbody>

                        @foreach($salaries as $salary)
                            <tr>
                                <td>Basic Salary</td>
                                <td>{{$salary->basic}}</td>
                            </tr>
                            <tr>
                                <td>ETF (3%)</td>
                                <td>{{$salary->etf3}}</td>
                            </tr>
                            <tr>
                                <td>EPF (8%)</td>
                                <td>{{$salary->epf8}}</td>
                            </tr>
                            <tr>
                                <td>EPF (12%)</td>
                                <td>{{$salary->epf12}}</td>
                            </tr>
                            <tr>
                                <td>Allowance</td>
                                <td>{{$salary->allowance}}</td>
                            </tr>
                            <tr>
                                <td>Loan Deduction</td>
                                <td>{{$salary->loanDeduction}}</td>
                            </tr>
                            <tr>
                                <td>Net Salary</td>
                                <td>{{$salary->netSalary}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table></div></div>
        </div>
    </div>
</div>
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