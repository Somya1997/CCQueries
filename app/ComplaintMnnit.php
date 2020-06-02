<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComplaintMnnit extends Model
{
    protected $table = 'complaint_mnnits';

    protected $fillable = [
        'student_id', 'nature', 'availabletime', 'availabledate', 'staff', 'status'
    ];
    
    public $status = false;
    public $staff = false;

    public function student_mnnits()
  {
    return $this->belongsTo('App\StudentMnnit', 'id');
  }

}
