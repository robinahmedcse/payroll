<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tbl_supper_admin extends Model
{
     
    protected $primaryKey = 's_admmin_id';


    protected $fillable = [
        's_admin_name','s_admin_username', 's_admin_email', 's_admin_password',
    ];


    protected $hidden = [
        's_admin_password', 'remember_token',
    ];


    //
}
