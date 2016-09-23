<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('test','PayrollController@getLoanDeductions');
Route::get('test1','PayrollController@getEmployeeBasicSalaryDetails');
Route::get('test2','PayrollController@getEmployeeMonthlySalaryReport');
Route::get('test3','PayrollController@getSalaryTableValues');
Route::group(['middleware' => ['web']], function () {

    Route::get('login', function () {
        return view('Login');
    });
    Route::get('signUpCheck', 'LoginController@signUp');
    Route::get('/loginCheck', 'LoginController@authenticate');

    Route::get('logout', 'LogController@logout');

});

Route::get('/welcome', function () {
    return view ('welcome');

});



/*-----------------------------------Employee Management---------------------------------*/

Route::get('deleteEmployee','EmployeeController@deleteEmployeeRecord');
Route::get('deleteLoanScheme','LoanController@deleteLoanScheme');
Route::get('EmployeeInformation','EmployeeController@showAllEmployees');
Route::get('getAllEmployeesForInfo','EmployeeController@getAllEmployeesForInfo');

//payroll
Route::get('payroll','PayrollController@showPayrollInformation');
Route::get('addSalary','PayrollController@addSalary');
Route::get('getEmployeeBasicSalaryDetails','PayrollController@getEmployeeBasicSalaryDetails');
Route::get('calculateEPF_8','PayrollController@calculateEPF_8');
Route::get('calculateNetSalary','PayrollController@calculateNetSalary');
Route::get('calculateMonthlyEpfEtfReport','PayrollController@calculateMonthlyEpfEtfReport');
Route::get('getEmployeeMonthlySalaryReport','PayrollController@getEmployeeMonthlySalaryReport');

//Employee Leave
Route::get('approveLeave','LeaveController@approveLeave');
Route::get('saveLeaveInfo','LeaveController@saveLeaveInfo');
Route::get('rejectLeave','LeaveController@rejectLeave');
Route::get('recordLeave','LeaveController@recordLeave');
Route::get('leave','LeaveController@showPendingLeave');
Route::get('fillEmployeeLeave','LeaveController@fillEmployeeLeave');

//Employee managing
Route::get('AddEmployee','EmployeeController@showAddEmployee');
Route::post('added','EmployeeController@addEmployee');
Route::get('fillEmployee','EmployeeController@getEmployeeDetails');
Route::get('updateEmployee','EmployeeController@updateEmployeeDetails');
Route::get('scheduleInterview','InterviewController@scheduleInterview');
Route::get('saveInterview','InterviewController@saveInterview');
Route::get('fillInterview','InterviewController@getEmployeeDetails');
Route::get('deleteInterview','InterviewController@deleteInterview');
//Employee Loans
Route::get('EmployeeLoans','LoanController@showLoans');
Route::get('addLoan','LoanController@addLoan');
Route::get('approveLoan','LoanController@approveLoan');
Route::get('declineLoan','LoanController@rejectLoan');
Route::get('updateDate','LoanController@updateDate');
Route::get('saveLoanScheme','LoanController@saveLoanScheme');
Route::get('checkEligibility','LoanController@checkEligibility');

//Employee Reports
Route::get('AllEmployeesReport','EmployeeReports@getEmpPDF');
Route::post('getPaySlip','PayrollController@getPaySlip');

/*-----------------------------------//Employee Management---------------------------------*/



/*-----------------------------------Inventory---------------------------------*/
Route::get('fillItem','addNewItemController@getItem');
Route::get('updateItem','addNewItemController@updateItem');
Route::get('fillSupplier','supplierController@getSupplier');
Route::get('updateSupplier','supplierController@updateSupplier');
Route::get('Purchases', 'purchaseController@showPurchase');
Route::get('Supplier', 'supplierController@showSupplier');
Route::get('Sales', 'salesController@showSales');
Route::get('PurchaseReturns', 'returnController@showPR');
Route::get('Inventory', 'AddNewItemController@showItems');
Route::get('deleteSupplier','supplierController@deleteSupplier');
Route::get('deleteItem','addNewItemController@deleteItem');
Route::get('AddNewItem', 'retViews@AddNewItem');
Route::get('PurchaseOrder', 'InventoryMailController@showPO');
Route::post('/purchaseForm', [
    'uses' => 'purchaseController@postPurchaseForm',
    'as' => 'purchaseForm'
]);
Route::post('/salesForm', [
    'uses' => 'salesController@postaddSales',
    'as' => 'salesForm'
]);
Route::post('/supplierForm', [
    'uses' => 'supplierController@postaddSupplier',
    'as' => 'supplierForm'
]);
Route::post('/prForm', [
    'uses' => 'returnController@postaddPr',
    'as' => 'prForm'
]);
Route::post('/addForm', [
    'uses' => 'AddNewItemController@postaddNew',
    'as' => 'addForm'
]);
Route::post('/getPurchasePDF',[
    'uses' => 'InventoryPDFController@getPurchasePDF',
    'as' => 'getPurchasePDF'
]);
Route::post('/getSalesPDF',[
    'uses' => 'InventoryPDFController@getSalesPDF',
    'as' => 'getSalesPDF'
]);
Route::post('/send', [
    'uses' => 'InventoryMailController@send',
    'as' => 'send'
]);
Route::post('/sendRequest', [
    'uses' => 'LeaveMailController@sendRequest',
    'as' => 'sendRequest'
]);

/*-----------------------------------//Inventory---------------------------------*/

/*-----------------------------------Service Management---------------------------------*/
Route::get('/assignments', function () {
    return view ('assignments');

});
Route::get('/reports', function () {
    return view ('reports');

});
Route::get('/reservations', function () {
    return view ('reservations');

});
Route::get('/slot01', function () {
    return view ('slot01');

});

Route::get('/slot02', function () {
    return view ('slot02');

});

Route::get('/slot03', function () {
    return view ('slot03');

});

Route::get('/slot04', function () {
    return view ('slot04');

});

Route::get('/plans', function () {
    return view ('plans');

});


Route::get('/logs', function () {
    return view ('logs');
});
Route::post('addplan','PlanController@addplan');
Route::post('addreserv','ReservController@addreserv');
Route::post('updatereserv','ReservController@updatereserv');
Route::get('plans','PlanController@showplans');
Route::get('assignments','AssignController@availableEmp');
Route::post('addassignment','AssignController@addassignment');
Route::get('deletePlans','PlanController@deletePlans');
Route::get('clearSlot','ReservController@clearSlot');
Route::get('logs','LogController@showlog');
Route::get('reports','reportsController@showpaymentlog');
Route::get('reservations','ReservController@slotwid');
Route::get('slot01','slot01Controller@showpending');
Route::get('slot02','slot02Controller@showpending');
Route::get('slot03','slot03Controller@showpending');
Route::get('slot04','slot04Controller@showpending');

Route::get('serviceNext','ReservController@serviceNext');
Route::get('deletereservation','slot01Controller@deletereservation');
Route::get('deletereservation','slot02Controller@deletereservation');
Route::get('deletereservation','slot03Controller@deletereservation');
Route::get('deletereservation','slot04Controller@deletereservation');




/*-----------------------------------Service Management---------------------------------*/

/*-----------------------------------Customer Management---------------------------------*/
Route::get('fillCustomer','register@fillCustomer');

Route::get('/ReportsCustomer', function () {
    return view ('ReportsCustomer');
});

Route::get('fillVehicle','register@fillVehicle');

Route::get('RegisterCustomer','register@viewRegisterCustomer');

Route::get('customerReport','cusreportcontroller@Customerreport');

Route::get('loyaltyReport','cusreportcontroller@LoyaltyReport');

Route::get('deficitReport','cusreportcontroller@DeficitReport');

Route::get('CustomerLoyalty','loyaltyController@getCustomerName');

Route::post('CustomerLoyalty','loyaltyController@addloyalty');

Route::get('report-gen', 'register@domExample');

Route::post('RegisterCustomer','register@addCustomer');

Route::get('Feedback','feedbackController@viewfeedback');

Route::post('Feedback','feedbackController@respond');

Route::get('fillfeed','feedbackController@fillfeed');

Route::get('fillname','feedbackController@fillname');

Route::get('filldeficit1','deficitControl@fillCustomer');

Route::get('updateCustomer','register@updateCustomerDetails');

Route::get('updateVehicle','register@updateVehicleDetails');

Route::get('deleteCustomer','register@deleteCustomer');

Route::get('CustomerDeficit','deficitControl@getCustomerN');

Route::post('CustomerDeficit','deficitControl@addDeficit');

Route::get('filldeficit','deficitControl@filldeficit');

Route::get('setDeficit','deficitControl@setDeficit');
/*-----------------------------------//Customer Management---------------------------------*/

/*-----------------------------------//Finance Management---------------------------------*/
/*Finance routes*/
Route::get('liabilities', function () {
    return view('Liability');
});

Route::get('assets', function () {
    return view('Assets');
});

Route::get('inexpense', function()
{
    return view('Income&Expenditure');
});

Route::get('assetDep', function()
{
    return view('AssetDepreciation');
});

Route::get('interest', function()
{
    return view('InterestL');
});





Route::post('assets','AssetController@addAssets');
Route::get('assets','AssetController@loadAssets');
Route::get('deleteAssets','AssetController@deleteAssets');
Route::get('getOriginalValue', 'AssetController@getOriginalValue');
Route::get('assets/getasset/{id}', 'AssetController@getAsset');
Route::get('assetDep','AssetController@loadAssetDepDetails');
Route::get('deleteAssetDep','AssetController@deleteAssetDep');
Route::get('assets/getDep', 'AssetController@calculateDepreciation');
Route::post('depassets','AssetController@addDepAmount');
Route::get('search/assetSearch', 'AssetController@assetSearch');
Route::get('search/assetDepSearch','AssetController@assetDepSearch');

Route::get('liabilities','LiabilityController@loadLiabilities');
Route::post('add','LiabilityController@addLiabilities');
Route::get('deleteLiabilities','LiabilityController@deleteLiabilities');
Route::post('update','LiabilityController@updateLiabilities');
Route::get('liabilities/getliability/{id}', 'LiabilityController@getLiability');
Route::get('liabilityInterest','LiabilityController@loadLiabilityInterestDetails');
Route::get('deleteLiabilityInterest','LiabilityController@deleteLiabilityInterest');
Route::get('liabilities/calInterest', 'LiabilityController@calculateInterest');
Route::get('updateEmployee','LiabilityController@updateLiability');
Route::get('search/liabilitySearch', 'LiabilityController@liabilitySearch');
Route::get('search/liabilityDepSearch', 'LiabilityController@liabilityInterestSearch');
Route::post('addInterest', 'LiabilityController@addInterest');

Route::get('expense','ExpenditureController@loadExpenses');

Route::get('income','IncomeController@loadIncome');
//pdf
Route::get('janitorial-pdf','IncomeController@getJanitorialPdf');
Route::get('sales-pdf','IncomeController@getSalesPdf');
Route::get('services-pdf', 'IncomeController@getServicePdf');

Route::get('purchases-pdf','ExpenditureController@getPurchasesPdf');
Route::get('purchaseReturns-pdf','ExpenditureController@getPurchaseReturnsPdf');
Route::get('salaries-pdf', 'ExpenditureController@getSalariesPdf');
/*-----------------------------------//Finance Management---------------------------------*/

/*-----------------------------------//Janitorial Management---------------------------------*/
Route::get('/', function () {
    return view('main');
});
route::get('emp','EmpManController@loadView');

route::get('cust','CustManController@loadView');

route::get('package','PackagesController@loadView');

route::get('order','OrderController@loadView');

route::post('addEmp','EmpManController@getemp');

route::post('addCust','CustManController@getCust');

route::post('addPack','PackagesController@getPack');

route::get('addSubCat','PackagesController@add_sub_cat_type');

Route::get('deleteEmployee','EmpManController@deleteEmployee');

Route::get('deleteCustomer','CustManController@deleteCustomer');

Route::get('deleteCat','PackagesController@deleteCat');

Route::get('getSubCat','OrderController@getSubCat');

Route::get('getEmployeeInfo','EmpManController@getEmployeeInfo');

Route::get('getCustomerInfo','CustManController@getCustomerInfo');

Route::get('getSubCatInfo','PackagesController@getSubCatInfo');

Route::get('deleteOrder','OrderController@deleteOrder');

Route::get('getCustomers','OrderController@getCustomers');

Route::get('getOrders','OrderController@getOrders');

Route::post('addOrder','OrderController@addOrder');

Route::get('getSupervisors','OrderController@getSupervisors');

Route::get('getJanitors','OrderController@getJanitors');

Route::get('addEmp2Order','OrderController@addEmp2Order');
/*-----------------------------------//Janitorial Management---------------------------------*/

/*-----------------------------------//WorkShift Management---------------------------------*/

Route::get('CreateShifts','CreateShiftsController@loadView');
Route::post('shiftcreate','CreateShiftsController@addshift');
Route::get('replaceEmp','ReplaceController@Addemp');
Route::post('selectBranch','efficiencyController@loadtable');
Route::get('addEmployee','assignEmpController@addEmployeeShift');
Route::post('Assign','assignEmpController@getemp');
Route::get('AssignEmployees','assignEmpController@loadAssignEmployee');
Route::get('assignShift','ReplaceController@assignShift');
Route::get('ReplaceEmployees','ReplaceController@loadReplaceEmployee');
Route::get('request','ReplaceController@loadRequestedEmployees');
Route::post('selectShift','ReplaceController@replace');
Route::get('EfficiencyAnalysis','efficiencyController@loadview');
Route::get('remove1','removeEmployee@removeEmployeeRecord');
Route::post('Remove','removeEmployee@getEmpDetails');
Route::get('RemoveEmployees','removeEmployee@loadRemoveEmployee');
Route::post('getefficiencyDetails','efficiencyController@getEfficiency');
Route::post('calculatefficiencyDetails','efficiencyController@calculateEfficiency');
Route::post('getEmployee','ReplaceController@getReplaceableEmpDetails');
Route::get('UpdateEmployeeShift','ReplaceController@UpdateShift');
Route::get('OverWorkedEmployees','OverWorkedEmpController@loadOverWorkedEmployees');
Route::get('ReEnterEmployeeShift','ReplaceController@ReEnterShift');

/*-----------------------------------//WorkShift Management---------------------------------*/