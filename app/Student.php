<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'registrationno',
        'phonenumber',
        'email',
        'natureofproblem',
        'hostel',
        'room',
        'availabilitytime',
        'availabilityday',     
    ];
}
