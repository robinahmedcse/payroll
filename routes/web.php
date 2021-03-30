<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\authCheck;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
 
Route::get('/registration/admin/supper', 'supper_admin\login\loginController@registration_form')->middleware('authCheck');
Route::post('/registration/check/admin/supper', 'supper_admin\login\loginController@check_registration');


Route::get('/login/admin/supper', 'supper_admin\login\loginController@login_form')->middleware('authCheck');
Route::post('/login/check/admin/supper', 'supper_admin\login\loginController@check_login');


/*
|--------------------------------------------------------------------------
|                     Supper-admin-part
|--------------------------------------------------------------------------
|
|  
| 
|  
|
*/


Route::get('supper/admin/master/dashboard', 'supper_admin\dashboard\dashboardController@index')->middleware('authCheck');

/* ------------------------ profile (supper-admin-part)-------------------*/
Route::get('supper/admin/master/profile', 'supper_admin\dashboard\profileController@profile_show');

/* ------------------------ change Password (supper-admin-part)-------------------*/
Route::get('supper/admin/master/change password', 'supper_admin\dashboard\changePasswordController@password_form_show');



/* ------------------------Department (supper-admin-part)-------------------*/
Route::get('supper/admin/master/dept/add', 'supper_admin\employee\departmentController@add_dept_form');
Route::post('supper/admin/master/dept/save', 'supper_admin\employee\departmentController@save_dept_information');
Route::get('supper/admin/master/dept/manage', 'supper_admin\employee\departmentController@manage_dept_information');
/* ------------------------end Department (supper-admin-part)-------------------*/




/* ------------------------Branch (supper-admin-part)-------------------*/
Route::get('supper/admin/master/branch/add', 'supper_admin\employee\branchController@add_branch_form');
Route::post('supper/admin/master/branch/save', 'supper_admin\employee\branchController@save_branch_information');
Route::get('supper/admin/master/branch/manage', 'supper_admin\employee\branchController@manage_branch_information');
/* ------------------------end Branch (supper-admin-part)-------------------*/



/* ------------------------designation (supper-admin-part)-------------------*/
Route::get('supper/admin/master/designation/add', 'supper_admin\employee\designationController@add_designation_form');
Route::post('supper/admin/master/designation/save', 'supper_admin\employee\designationController@save_designation_information');
Route::get('supper/admin/master/designation/manage', 'supper_admin\employee\designationController@manage_designation_information');
/* ------------------------End designation (supper-admin-part)-------------------*/



/* ------------------------ allowance (supper-admin-part)-------------------*/
Route::middleware(['deductionAuthsupperAdmin'])->group(function () {
    Route::get('supper/admin/master/allowance/manage', 'supper_admin\allowance\allowanceController@manage_allowance');
    Route::post('supper/admin/master/allowance/save', 'supper_admin\allowance\allowanceController@save_allowance');
    Route::get('supper/admin/master/allowance/edit/{id}', 'supper_admin\allowance\allowanceController@edit_allowance');
    Route::post('supper/admin/master/allowance/update', 'supper_admin\allowance\allowanceController@update_allowance');
    Route::get('supper/admin/master/allowance/active/{id}', 'supper_admin\allowance\allowanceController@active_allowance');
    Route::get('supper/admin/master/allowance/deactive/{id}', 'supper_admin\allowance\allowanceController@in_active_allowance');
    Route::get('supper/admin/master/allowance/delete/{id}', 'supper_admin\allowance\allowanceController@delete_allowance');
});
/* ------------------------  (supper-admin-part)-------------------*/



/* ------------------------ deduction(supper-admin-part)-------------------*/
Route::middleware(['deductionAuthsupperAdmin'])->group(function () {
    Route::get('supper/admin/master/deduction/manage', 'supper_admin\deduction\deductionController@manage_deduction');
    Route::post('supper/admin/master/deduction/save', 'supper_admin\deduction\deductionController@save_deduction');
    Route::get('supper/admin/master/deduction/edit/{id}', 'supper_admin\deduction\deductionController@edit_deduction');
    Route::post('supper/admin/master/deduction/update', 'supper_admin\deduction\deductionController@update_deduction');
    Route::get('supper/admin/master/deduction/active/{id}', 'supper_admin\deduction\deductionController@active_deduction');
    Route::get('supper/admin/master/deduction/deactive/{id}', 'supper_admin\deduction\deductionController@in_active_deduction');
    Route::get('supper/admin/master/deduction/delete/{id}', 'supper_admin\deduction\deductionController@delete_deduction');
});
/* ------------------------ end deduction(supper-admin-part)-------------------*/
Route::get('supper/admin/master/employee/add', 'supper_admin\employee\employeeController@add_emp_form');
Route::post('supper/admin/master/employee/save', 'supper_admin\employee\employeeController@save_emp_information');

Route::get('supper/admin/master/employee/manage', 'supper_admin\employee\employeeController@manage_emp_information');
Route::get('supper/admin/master/employee/view/{id}', 'supper_admin\employee\employeeController@view_emp_info_by_id');
/* ------------------------  Employe(supper-admin-part)-------------------*/

/* ------------------------ (supper-admin-part)-------------------*/
/* ------------------------  (supper-admin-part)-------------------*/

/* ------------------------ (supper-admin-part)-------------------*/
/* ------------------------  (supper-admin-part)-------------------*/



/* ------------------------employee (supper-admin-part)-------------------*/

/* ------------------------end employee (supper-admin-part)-------------------*/

Route::get('supper/admin/master/logout', 'supper_admin\dashboard\dashboardController@supper_admin_logout');








/* -----------------------------------------------------------------------*/
/* -------------------------------Other-admin-part----------------------*/
/* ---------------------------------------------------------------------*/