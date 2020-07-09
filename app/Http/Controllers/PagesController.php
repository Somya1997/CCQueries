<?php

namespace App\Http\Controllers;
use App\StudentMnnit;
use App\ComplaintMnnit;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\closingMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Session;


class PagesController extends Controller
{
    public function getIndex(){
        return view('pages.home');
    }
    
    public function getDashboard()
    {
        if(Auth::user()->name=='Admin')
        {
            $complaints = ComplaintMnnit::join('student_mnnits', 'id', '=', 'student_id') ->where('status','=',0)->orderBy('updated_at','desc')->paginate(10);
            $staffs=User::where('name','!=','Admin')->get();
            return view('pages.dashboard')->withComplaints($complaints)->withStaffs($staffs);
        }
        else
        {
            $complaints = ComplaintMnnit::join('student_mnnits', 'id', '=', 'student_id')
            ->where('status','=',1)
            ->where('staff','=',Auth::user()->name)
            ->orderBy('updated_at','desc')->paginate(10);
            return view('pages.dashboard')->withComplaints($complaints);
        }
       
        
    }
    public function getAssignedDashboard()
    {
        $complaints = ComplaintMnnit::join('student_mnnits', 'id', '=', 'student_id')
        ->where('status','=',1)
        ->orderBy('updated_at','desc')->paginate(10);
        $staffs=ComplaintMnnit::where('status','=',1)->get();
        return view('pages.dashboard')->withComplaints($complaints);
    }
    public function getReviewDashboard()
    {
        $complaints = ComplaintMnnit::join('student_mnnits', 'id', '=', 'student_id')
        ->whereIn('status', ['-1', '2'])   //One way of checking two values in where clause
        ->orderBy('updated_at','desc')->paginate(10);
        return view('pages.dashboard')->withComplaints($complaints); 
    }
    public function getPending()
    {
        $complaints= ComplaintMnnit::join('student_mnnits','id','=','student_id')
        ->whereIn('status',['-1','2'])
        ->where('staff','=',Auth::user()->name)
        ->orderBy('updated_at','desc')->paginate(10);
        return view('pages.dashboard')->withComplaints($complaints);

    }
    public function getClosedDashboard()
    {
        if(Auth::user()->name=='Admin')
        {
            $complaints = ComplaintMnnit::join('student_mnnits', 'id', '=', 'student_id')
            ->where('status','=',3)         // second way of checking two values in where clause
            ->orWhere('status','=',-2)
            ->orderBy('updated_at','desc')->paginate(10);
            return view('pages.dashboard')->withComplaints($complaints);
        }
        else
        {
            $complaints = ComplaintMnnit::join('student_mnnits', 'id', '=', 'student_id')
            ->where('status','=',3)
            ->orWhere('status','=',-2)
            ->where('staff','=',Auth::user()->name)
            ->orderBy('updated_at','desc')->paginate(10); 
            return view('pages.dashboard')->withComplaints($complaints); 
        }
        
    }

    public function actionedit(Request $request,$complaintMnnit)
    {
            if(Auth::user()->name=='Admin')
            {
                if(isset($_GET["close"]))
                {
                    $complaint=ComplaintMnnit::join('student_mnnits', 'id', '=', 'student_id')->find($complaintMnnit);
                    if($complaint->status==2)
                    {
                    $complaintUpdate=ComplaintMnnit::where('student_id','=', $request->id)
                                ->update(['status'=>3]);
                    }
                    else
                    {
                        $complaintUpdate=ComplaintMnnit::where('student_id','=', $request->id)
                                ->update(array('status'=>-2));
                    }
                    $complaint=ComplaintMnnit::join('student_mnnits', 'id', '=', 'student_id')->find($complaintMnnit);
                    Mail::send(new closingMail($complaint));
                    
                }
                if(isset($_GET["reopen"]))
                {
                    $complaintUpdate=ComplaintMnnit::where('student_id','=', $request->id)
                                ->update(array('status'=>1));
                    $complaint=ComplaintMnnit::join('student_mnnits', 'id', '=', 'student_id')->find($complaintMnnit);
                    Mail::send(new closingMail($complaint));
                }
                // $studentMnnit=StudentMnnit::find($complaintMnnit);
                return redirect('review');
            }
            else
            {       
                if(isset($_GET["success"]))
                {
                    $complaint=ComplaintMnnit::where('student_id','=', $request->id)
                                ->update(['status'=>2]);
                
                                Session::flash('success','successfully updated');
                }
                else
                {
                    // $remark=$_GET["remark"];
                    // echo "<script>console.log($remark)</script>";
                    $complaint=ComplaintMnnit::where('student_id','=', $request->id)
                                ->update(array('remark'=>$request->remark,'status'=>-1));
                
                                Session::flash('success','successfully updated');
                }
                return redirect('dashboard');
            }
           

    }
    
    public function staffassigned(Request $request,$complaintMnnit,$staffname)
    {
       
        $staff=ComplaintMnnit::where('student_id','=',$request->id)
                                ->update(array('staff'=>$staffname,'status'=>1));
        Session::flash('success','successfully assigned');
        return redirect('dashboard');
    }
}
