<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComplaintMnnit extends Model
{
    protected $table = 'complaint_mnnits';
    protected $primaryKey='student_id';

    protected $fillable = [
        'student_id', 'nature', 'availabletime', 'availabledate', 'staff', 'status'
    ];
    
  public function student_mnnits()
  {
    return $this->belongsTo('App\StudentMnnit', 'id');
  }

}
