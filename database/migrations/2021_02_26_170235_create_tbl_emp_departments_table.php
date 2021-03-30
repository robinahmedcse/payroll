<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblEmpDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_emp_departments', function (Blueprint $table) {
            $table->bigIncrements('emp_department_id');
            $table->string('emp_department_name');
            $table->string('emp_department_code');
            $table->tinyInteger('emp_department_status');
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
        Schema::dropIfExists('tbl_emp_departments');
    }
}
