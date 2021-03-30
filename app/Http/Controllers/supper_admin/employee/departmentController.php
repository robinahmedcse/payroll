<?php

namespace App\Http\Controllers\supper_admin\employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Tbl_emp_department;
use DB;



class departmentController extends Controller
{

    public function add_dept_form(){
        $deptContent =view('supper_admin.employee.department.add_dept');
        return view('supper_admin.master')->with('mainContent',$deptContent);
    }



    public function save_dept_information(Request $request){
     //   return  $request->all();


        $request->validate([
            'dept_name' => 'required|alpha| min:3',
            'dept_code' => 'required| min:2',
            'dept_status' => 'required|',
        ]);

       $dept_status = $request->dept_status;

           if($dept_status == 'NULL' || $dept_status == 'null'){
                return back()->with('fail','Please Select Department Status'); 
            }else{
                
                $admin= new Tbl_emp_department();
                $admin->emp_department_name = $request->dept_name ;
                $admin->emp_department_code = $request->dept_code ;
                $admin->emp_department_status = $dept_status;
                $save =$admin-> save();

                if($save){
                    return redirect('supper/admin/master/dept/manage')
                                    ->with('success','Add succesfully.Please Login');

                }else{
                    return back()->with('fail','Try again later'); 
                }


            }


     // save_dept_information
    }


    public function manage_dept_information(){
    
        $data = Tbl_emp_department::all();
        // echo'<pre>';
        // print($data);
        // exit;


        $deptContent =view('supper_admin.employee.department.manage_dept')
                        ->with('data',$data);
        return view('supper_admin.master')->with('mainContent',$deptContent);

    }

    public function edit_dept_information(){}
    public function update_dept_information(Request $request){}
    public function emp_dept_active(){}
    public function emp_dept_de_active(){}



    //
}
