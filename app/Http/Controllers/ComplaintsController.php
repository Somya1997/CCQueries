<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complaint;

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
            'phoneno' =>'required|digits:10|numeric',
            'nature' =>'required|max:50|string',
            'hostel' =>'required|max:20',
            'room' =>'required|numeric',
            'availabletime'=>'required',
            'availabledate'=>'required'
        ],[
            'name.required' => 'Name is required',
            'regno.required' => 'Registration Number is required',
            'email.required' => 'Email is required',
            'phoneno.required' => 'Contact Number is required',
            'nature.required' => 'Nature of Problem is required',
            'hostel.required' => 'Hostel Name is required',
            'room.required' => 'Room Number is required',
            'availabletime.required' => 'Time of Availabelity is required',
            'availabledate.required' => 'Date of Availabelity is required'

        ]);

        $complaint= new Complaint;

        $complaint->name = $request->name;
        $complaint->regno = $request->regno;
        $complaint->email = $request->email;
        $complaint->phoneno = $request->phoneno;
        $complaint->nature = $request->nature;
        $complaint->hostel = $request->hostel;
        $complaint->room = $request->room;
        $complaint->availabletime = $request->availabletime;
        $complaint->availabledate= $request->availabledate;

        $complaint->save();
        return redirect()->route('complaints.show',$complaint->id)->with('success', 'Complaint Registered Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
