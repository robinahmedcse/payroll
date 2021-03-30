<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_employees', function (Blueprint $table) {
           
            $table->bigIncrements('emp_id');
      
            $table->string('emp_name');
            $table->string('emp_father_name');
            $table->string('emp_date_of_birth');
            $table->string('emp_gender');
            $table->string('emp_phone');
            $table->string('emp_email');
            $table->string('emp_password');
            $table->string('emp_nationality');
            $table->string('emp_religion');     
            $table->string('emp_marital_status');    
            $table->string('emp_blood_groups'); 
 
            $table->string('emp_contact_local');
            $table->text('emp_address_local');
            $table->string('emp_contact_present');
            $table->text('emp_address_present');
 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_employees');
    }
}
