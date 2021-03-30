<?php

namespace App\Http\Controllers\supper_admin\employee;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use App\Models\Tbl_emp_branch;
use App\Models\Tbl_emp_department;
use App\Models\Tbl_emp_designation;
use DB;


 

class employeeController extends Controller
{


    public function add_emp_form(){

        $department_all = Tbl_emp_department::where('emp_department_status', 1)->get();
        $designation_all = Tbl_emp_designation::where('emp_designation_status', 1)->get();
        $branch_all = Tbl_emp_branch::where('emp_branch_status', 1)->get();
            // echo"<pre>";
            // print($department_all);
            // print($designation_all);
            // print($branch_all);
       
            // exit;


        $empContent =view('supper_admin.employee.emp.add_emp')
                        ->with('department_all',$department_all)
                        ->with('designation_all',$designation_all)
                        ->with('branch_all',$branch_all);
                        
        return view('supper_admin.master')->with('mainContent',$empContent);
    }


    public function save_emp_information(Request $request){
        return $request->all();
    }


    public function manage_emp_information(){

        $empContent =view('supper_admin.employee.emp.manage_emp');
        return view('supper_admin.master')->with('mainContent',$empContent); 
    }


    public function view_emp_info_by_id(){

        $empContent =view('supper_admin.employee.emp.manage_emp');
        return view('supper_admin.master')->with('mainContent',$empContent); 
    }




    public function edit_emp_information(){}
    public function update_emp_information(){}
    public function emp_status_active(){}
    public function emp_status_de_active(){}







    //employeeController
}
