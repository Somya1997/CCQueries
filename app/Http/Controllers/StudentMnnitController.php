<?php

namespace App\Http\Controllers;

use App\StudentMnnit;
use App\ComplaintMnnit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;

class StudentMnnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complaints = ComplaintMnnit::join('student_mnnits', 'id', '=', 'student_id')
        ->where('status',3)
        ->where('status',-2)
        ->where('staff','=',Auth::user()->name)
        ->latest()->paginate(2);
        return view('pages.dashboard')->withComplaints($complaints);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('complaints.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
            'regno' => 'required',
            'email' => 'required|email',
            'phoneno' =>'required|digits:10|numeric|regex:/^([0-9\s\-\+\(\)]*)$/',
            'hostel' =>'required|max:20',
            'room' =>'required|numeric',
            'nature' =>'required|max:50|string',
            'availabletime'=>'required',
            'availabledate'=>'required'
        ],[
            'name.required' => 'Name is required',
            'regno.required' => 'Registration Number is required',
            'email.required' => 'Email is required',
            'phoneno.required' => 'Contact Number is required',
            'hostel.required' => 'Hostel Name is required',
            'room.required' => 'Room Number is required',
            'nature.required' => 'Nature of Problem is required',
            'availabletime.required' => 'Time of Availability is required',
            'availabledate.required' => 'Date of Availability is required'

        ]);

        $studentMnnit = new StudentMnnit;

        $studentMnnit->name=    $request->name;
        $studentMnnit->regno=   $request->regno;
        $studentMnnit->email=   $request->email;
        $studentMnnit->phoneno= $request->phoneno;
        $studentMnnit->hostel=  $request->hostel;
        $studentMnnit->room=    $request->room;

        $studentMnnit->save();

        $complaintMnnit = new ComplaintMnnit;

        $complaintMnnit->student_id     =$studentMnnit->id;
        $complaintMnnit->nature= $request->other == null? $request->nature: $request->other;
        $complaintMnnit->availabletime  =$request->availabletime;
        $complaintMnnit->availabledate  =$request->availabledate;
        

        $complaintMnnit->save();

        Session::flash('success', 'Complaint Registered successfully with complaint id: ');

        return redirect()->route('complaints.show',$studentMnnit->id);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudentMnnit  $studentMnnit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $studentMnnit = StudentMnnit::find($id);
        return view('complaints.show')->withStudentMnnit($studentMnnit); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentMnnit  $studentMnnit
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentMnnit $studentMnnit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentMnnit  $studentMnnit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentMnnit $studentMnnit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentMnnit  $studentMnnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentMnnit $studentMnnit)
    {
        //
    }
}
