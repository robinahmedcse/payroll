<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Tbl_supper_admin;
use Faker\Generator as Faker;

$factory->define(Tbl_supper_admin::class, function (Faker $faker) {
    return [
        's_admin_name' => $faker->name,
        's_admin_username' => $faker->name,
        's_admin_email' => $faker->unique()->safeEmail,
        's_admin_password' => '$2y$10$k9ygXO8xbrxwCmAdHGedNeh8QDVd59M2sczNi8U385/VnE0e5TKqC', // 123456
       // 's_admin_password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
         
    ];
});
