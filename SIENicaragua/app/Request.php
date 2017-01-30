<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    //
    $table = "Requests";

    $fillable = ['companyName', 'name', 'lastName', 'phone', 'email', 'address', 'license', 'countPC', 'countEmployees', 'countLicense', 'IsSend', 'IsActive'];
}
