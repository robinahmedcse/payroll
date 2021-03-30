<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_details', function (Blueprint $table) {
            $table->increments('company_details_id');
            $table->string('phone_number_1', 20);
            $table->string('phone_number_2', 20);
            $table->string('email', 100);
            $table->string('website_url', 100);
            $table->string('fax', 50);
            $table->text('company_address');
            $table->string('city', 30);
            $table->string('state', 30);
            $table->string('postal_code', 20);
            $table->string('country', 70);
            
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
        Schema::dropIfExists('company_details');
    }
}
