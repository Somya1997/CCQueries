<?php

namespace App\Http\Controllers;
use App\StudentMnnit;
use App\ComplaintMnnit;
use App\User;
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
            $complaints = ComplaintMnnit::join('student_mnnits', 'id', '=', 'student_id') ->where('status','=',0)->latest()->paginate(2);
            $staffs=User::where('name','!=','Admin')->get();
            return view('pages.dashboard')->withComplaints($complaints)->withStaffs($staffs);
        }
        else
        {
            $complaints = ComplaintMnnit::join('student_mnnits', 'id', '=', 'student_id')
            ->where('status','=',1)
            ->where('staff','=',Auth::user()->name)
            ->latest()->paginate(2);
            return view('pages.dashboard')->withComplaints($complaints);
        }
       
        
    }
    public function getAssignedDashboard()
    {
        $complaints = ComplaintMnnit::join('student_mnnits', 'id', '=', 'student_id')
        ->where('status','=',1)
        ->latest()->paginate(2);
        $staffs=ComplaintMnnit::where('status','=',1)->get();
        return view('pages.dashboard')->withComplaints($complaints);
    }
    public function getReviewDashboard()
    {
        $complaints = ComplaintMnnit::join('student_mnnits', 'id', '=', 'student_id')
        ->whereIn('status', ['-1', '2'])   //One way of checking two values in where clause
        ->latest()->paginate(2);  
        return view('pages.dashboard')->withComplaints($complaints); 
    }
    public function getClosedDashboard()
    {
        if(Auth::user()->name=='Admin')
        {
            $complaints = ComplaintMnnit::join('student_mnnits', 'id', '=', 'student_id')
            ->where('status','=',3)         // second way of checking two values in where clause
            ->orWhere('status','=',-2)
            ->latest()->paginate(2);  
        }
        else
        {
        $complaints = ComplaintMnnit::join('student_mnnits', 'id', '=', 'student_id')
        ->where('status','=',3)
        ->orWhere('status','=',-2)
        ->where('staff','=',Auth::user()->name)
        ->latest()->paginate(2);  
        }
        return view('pages.dashboard')->withComplaints($complaints); 
    }

}
