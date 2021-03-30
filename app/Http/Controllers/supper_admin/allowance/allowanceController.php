<?php

namespace App\Http\Controllers\supper_admin\allowance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use App\Models\Tbl_allowances;
use DB;


class allowanceController extends Controller
{
     


    public function manage_allowance(){
        $data = Tbl_allowances::all();
        // echo'<pre>';
        // print($data);
        // exit;


        $allowContent =view('supper_admin.configaration.allowance.manage_allowance')
                        ->with('data',$data);;
        return view('supper_admin.master')->with('mainContent',$allowContent);
    }



    
    public function save_allowance(Request $request){
    //  return  $request->all();
        $request->validate([
            'allowance_name' => 'required | min:2 | max:20',
            'allowance_status' => 'required',
        ]);

      $data = new Tbl_allowances;
      $data ->allowances_name =  $request ->allowance_name;
      $data ->allowances_status =  $request ->allowance_status;
      $save = $data ->save();

        if($save){
            return redirect('supper/admin/master/allowance/manage')
                            ->with('success','Allowance Data Save succesfully'); ;
         }else{
                return back()->with('fail','Try again later'); 
         }

    }

    


    public function edit_allowance($id){
        $data = Tbl_allowances::where("allowances_id" ,$id)->get();
              return $data;

    }



    public function update_allowance(Request $request){
        //return  $request->all();

        $id = $request ->allow_id;

        $date = Tbl_allowances::find($id);
        $date->allowances_name = $request ->allow_name;
        $date->allowances_status = $request ->allow_status;
        $save = $date->save();

        if($save){
             return back()->with('success','Allowance Data Update succesfully'); 
         }else{
             return back()->with('fail','Try again later'); 
         }
    }



    public function active_allowance($id){
     
        $date = Tbl_allowances::find($id);
        $date->allowances_status = "Active";
        $update = $date->save();
  
        if($update){
          return back()->with('success','Data Status Change succesfully'); 
          }else{
              return back()->with('fail','Try again later'); 
          }
    }



    public function in_active_allowance($id){
         $date = Tbl_allowances::find($id);
         $date->allowances_status = "Inactive";
         $update = $date->save();

      if($update){
            return back()->with('success','Data Status Change succesfully'); 
        }else{
            return back()->with('fail','Try again later'); 
        }
    }


    public function delete_allowance($id){ 
      //  return "set model";
        $date = Tbl_allowances::find($id);
        $delete_data = $date->delete();
  
        if($delete_data){
          return back()->with('success','Data Delete succesfully'); 
          }else{
              return back()->with('fail','Try again later'); 
          }

    }


  





    //
}
