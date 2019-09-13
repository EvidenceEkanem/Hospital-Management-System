<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone_number', 'date_of_birth', 'blood_group', 'sex', 'pin', 'address'
    ];
}
