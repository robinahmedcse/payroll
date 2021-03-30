<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblEmpBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_emp_branches', function (Blueprint $table) {
            $table->bigIncrements('emp_branch_id');
            $table->string('emp_branch_name');
            $table->string('emp_branch_code');
            $table->tinyInteger('emp_branch_status');
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
        Schema::dropIfExists('tbl_emp_branches');
    }
}
