<?php

use Illuminate\Database\Seeder;

class SupperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // factory(App\Models\Tbl_supper_admin::class, 3)->create();
       factory(App\Models\Company_title::class, 10)->create();
    }
}
