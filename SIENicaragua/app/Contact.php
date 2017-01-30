<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    $table = "Contacts";

    $fillable = ['name', 'lastName', 'phone', 'email', 'message'];
}
