<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    public $fillable = [
        'name',
        'registrationno',
        'phonenumber',
        'email',
        'natureofproblem',
        'hostel',
        'room',
        'availabilitytime',
        'availabilityday'      
    ];
}
