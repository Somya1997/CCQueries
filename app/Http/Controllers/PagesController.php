<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentMnnit;
use App\ComplaintMnnit;
use Auth;

class PagesController extends Controller
{
    public function getIndex(){
        return view('pages.home');
    }
    public function getDashboard()
    {
        if(Auth::user()->name=='Admin'){
            $complaints=StudentMnnit::
                join('complaint_mnnits', 'id', '=', 'student_id')->where('status','=',0)->get();   
        }
        else
        {
            $complaints=ComplaintMnnit::join('student_mnnits','id','=','student_id')->where('status','=',1)->get();
        }
        return view('pages.dashboard')->withComplaints($complaints);
    }
}
