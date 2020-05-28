<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Student;

class ComplaintsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = request()->validate([
                'name'               => 'required|max:30|',
                'registrationno'     => 'required|max:15|alpha_num',
                'phonenumber'        => 'required|size:10|numeric',
                'email'              => 'required|max:100|email',
                'natureofproblem'    => 'required|max:100|string',
                'hostel'             => 'required|max:30|',
                'room'               => 'required|max:255|numeric',
                'availabilitytime'   => 'required|max:10',
                'availabilityday'    => 'required|max:10|date',
            
            ]);



        /*$student = new Student;    

        $student->name = $request->name;
        $student->registrationno = $request->registrationno;
        $student->phonenumber = $request->phonenumber;
        $student->email = $request->email;
        $student->natureofproblem = $request->natureofproblem;
        $student->hostel = $request->hostel;
        $student->room = $request->room;
        $student->availabilitytime = $request->availabilitytime;
        $student->availabilityday = $request->availabilityday;

            $student-> save();*/
            $check = Student::create($data);
            dd(request()->all());

        //redirect to another page

        return redirect()->route('students.create',$show->id)->withsuccess('Form Submitted.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
