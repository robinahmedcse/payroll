<?php

namespace App\Http\Controllers\supper_admin\employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use App\Models\Tbl_emp_designation;
use DB;


class designationController extends Controller
{
    public function add_designation_form(){

        $designationContent =view('supper_admin.employee.designation.add_designation');
        return view('supper_admin.master')->with('mainContent',$designationContent);
    }



 

    public function save_designation_information(Request $request){
       // return  $request->all();
   
   
           $request->validate([
               'designation_name' => 'required|alpha| min:3',
               'designation_status' => 'required|',
           ]);
   
          $designation_status = $request->designation_status;
   
              if($designation_status == 'NULL' || $designation_status == 'null'){
                   return back()->with('fail','Please Select Designation Status'); 
               }else{
                   
                   $designation= new Tbl_emp_designation();
                   $designation->emp_designation_name = $request->designation_name ;
                   $designation->emp_designation_status = $designation_status;
                   $save =$designation-> save();
   
                   if($save){
                       return redirect('supper/admin/master/designation/manage')
                                       ->with('success','Add succesfully.');
   
                   }else{
                       return back()->with('fail','Try again later'); 
                   }
   
   
               }
   
   
        // save_designation_information
       }










    public function manage_designation_information(){
    
        $data = Tbl_emp_designation::all();
        // echo'<pre>';
        // print($data);
        // exit;


        $designationContent =view('supper_admin.employee.designation.manage_designation')
                        ->with('data',$data);;
        return view('supper_admin.master')->with('mainContent', $designationContent);

    }





    public function edit_designation_information(){}
    public function update_designation_information(Request $request){}
    public function emp_designation_active(){}
    public function emp_designation_de_active(){}


}
