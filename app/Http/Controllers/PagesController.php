<?php

namespace App\Http\Controllers;
use App\StudentMnnit;
use App\ComplaintMnnit;
use Auth;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex(){
        return view('pages.home');
    }
    
    public function getDashboard()
    {
        if(Auth::user()->name=='Admin')
        {
            $complaints = ComplaintMnnit::join('student_mnnits', 'id', '=', 'student_id') ->where('status','=',0)->get();
        }
        else
        {
        $complaints = ComplaintMnnit::join('student_mnnits', 'id', '=', 'student_id')
        ->where('status','=',1)
        ->where('staff','=',Auth::user()->name)
        ->get();
        }
        return view('pages.dashboard')->withComplaints($complaints);
    }

}
