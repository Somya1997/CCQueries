<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentMnnit extends Model
{
    protected $table = 'student_mnnits';

    protected $guarded = ['id', '_token'];

    protected $fillable = [
        'name', 'regno','email', 'phoneno', 'hostel', 'room'
    ];
    public $timestamps = false;

    public function complaint_mnnits()
    {
        return $this->hasMany('App\ComplaintMnnit');
    }
}
