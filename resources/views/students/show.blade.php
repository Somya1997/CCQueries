@extends('main')
@section('content')
          </br>
          <div class="container">
           <div class="justify-content-center">
              <div class="col-md-6 offset-md-3">
                <h1><p class="text-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Complaint Form</p></h1>
                  <hr>

                  {!! Form::open(['route' => 'complaints.store']) !!}
                  {{ Form::label('name','Name:') }}
                  {{ Form::text('name', null, array('class' => 'form-control')) }}
                  </br>
                  {{ Form::label('registrationno','Registrationno:') }}
                  {{ Form::text('registrationno', null, array('class' => 'form-control')) }}
                  </br>
                  {{ Form::label('phonenumber','Phone number:') }}
                  {{ Form::tel('phonenumber', null, array('class' => 'form-control')) }}
                  </br>
                  {{ Form::label('email','Email:') }}
                  {{ Form::email('email', null, array('class' => 'form-control')) }}
                  </br>
                  {{ Form::label('natureofproblem','Nature of Problem:') }}
                  {{ Form::select('natureofproblem', ['p1' => 'Wifi not working','p2' => 'LAN port broken','p3' => 'Weak Connection','p4' => 'Damaged Wire', 'p5' => 'others'],'Wifi not working') }}
                  </br>
                  </br>
                  {{ Form::label('hostel','Hostel Name:') }}
                  {{ Form::text('hostel', null, array('class' => 'form-control')) }}
                  </br>
                  {{ Form::label('room','Room No:') }}
                  {{ Form::text('room', null, array('class' => 'form-control')) }}
                  </br>
                  {{ Form::label('availabilitytime','Availability Time:') }}
                  {{ Form::time('availabilitytime', null, array('class' => 'form-control')) }}
                  </br>
                  {{ Form::label('availabilityday','Availability Date:') }}
                  {{ Form::date('availabilityday', null, array('class' => 'form-control')) }}
                  </br>

                  {{ Form::submit('Submit', array('class' => 'btn btn-warning btn-lg btn-block'))}}
                
                  {!! Form::close() !!}
              </div>
            </div>
          </div>

@endsection