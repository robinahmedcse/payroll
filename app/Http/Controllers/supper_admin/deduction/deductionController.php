<?php

namespace App\Http\Controllers\supper_admin\deduction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use App\Models\Tbl_deductions;
use DB;


class deductionController extends Controller
{
 


    public function save_deduction(Request $request){
     
        $request->validate([
            'deduction_name' => 'required|min:2',
            'deduction_status' => 'required|',
        ]);

        $date = new Tbl_deductions ;
        $date->deduction_name = $request ->deduction_name;
        $date->deduction_status = $request ->deduction_status;
        $save = $date->save();

        if($save){
             return back()->with('success','Data Save succesfully'); 
         }else{
             return back()->with('fail','Try again later'); 
         }
    }


    public function manage_deduction(){
        $data = Tbl_deductions::all();
        // echo'<pre>';
        // print($data);
        // exit;


        $deductionContent =view('supper_admin.configaration.deduction.manage_deduction')
                        ->with('data',$data);;
        return view('supper_admin.master')->with('mainContent',$deductionContent);
    }


   
		 public function edit_deduction($id){
           $data = Tbl_deductions::where("deduction_id" ,$id)->get();
              return $data;
         }



      public function update_deduction(Request $request){
  
           $id = $request ->id_de;

           $date = Tbl_deductions::find($id);
           $date->deduction_name = $request ->deduction_name;
           $date->deduction_status = $request ->deduction_status;
           $save = $date->save();

           if($save){
                return back()->with('success','Data Update succesfully'); 
            }else{
                return back()->with('fail','Try again later'); 
            }

        }



        
    public function active_deduction($id){
     // return $id;
      $date = Tbl_deductions::find($id);
      $date->deduction_status = "Active";
      $update = $date->save();

      if($update){
        return back()->with('success','Data Status Change succesfully'); 
        }else{
            return back()->with('fail','Try again later'); 
        }
    }


    public function in_active_deduction($id){
      $date = Tbl_deductions::find($id);
      $date->deduction_status = "Inactive";
      $update = $date->save();

      if($update){
        return back()->with('success','Data Status Change succesfully'); 
        }else{
            return back()->with('fail','Try again later'); 
        }
    }



    public function delete_deduction($id){

         return "set model";
      $date = Tbl_deductions::find($id);
      $delete_data = $date->delete();

      if($delete_data){
        return back()->with('success','Data Delete succesfully'); 
        }else{
            return back()->with('fail','Try again later'); 
        }

    }





}
