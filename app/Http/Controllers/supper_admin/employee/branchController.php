<?php

namespace App\Http\Controllers\supper_admin\employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use App\Models\Tbl_emp_branch;
use DB;




class branchController extends Controller
{
    public function add_branch_form(){
        $branchContent =view('supper_admin.employee.branch.add_branch');
        return view('supper_admin.master')->with('mainContent',$branchContent);
    }



 

    public function save_branch_information(Request $request){
        //   return  $request->all();
   
   
           $request->validate([
               'branch_name' => 'required|alpha| min:3',
               'branch_code' => 'required| min:2',
               'branch_status' => 'required|',
           ]);
   
          $branch_status = $request->branch_status;
   
              if($branch_status == 'NULL' || $branch_status == 'null'){
                   return back()->with('fail','Please Select Branch Status'); 
               }else{
                   
                   $branch= new Tbl_emp_branch();
                   $branch->emp_branch_name = $request->branch_name ;
                   $branch->emp_branch_code = $request->branch_code ;
                   $branch->emp_branch_status = $branch_status;
                   $save =$branch-> save();
   
                   if($save){
                       return redirect('supper/admin/master/branch/manage')
                                       ->with('success','Add succesfully.');
   
                   }else{
                       return back()->with('fail','Try again later'); 
                   }
   
   
               }
   
   
        // save_branch_information
       }










    public function manage_branch_information(){
    
        $data = Tbl_emp_branch::all();
        // echo'<pre>';
        // print($data);
        // exit;


        $branchContent =view('supper_admin.employee.branch.manage_Branch')
                        ->with('data',$data);;
        return view('supper_admin.master')->with('mainContent',$branchContent);

    }





    public function edit_branch_information(){}
    public function update_branch_information(Request $request){}
    public function emp_branch_active(){}
    public function emp_branch_de_active(){}


    //
}
