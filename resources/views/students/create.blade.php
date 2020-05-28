@extends('main')
@section('content')
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="text-warning display-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Complaint Form</h1>
        <div>

          @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif

        @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
@endif

      <form action="{{ route('students.store') }}" method="POST">
          {{ csrf_field() }}
          <div class="form-group">    
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="Name" id="name"/>
              @if ($errors->has('Name'))
                    <span class="text-danger">{{ $errors->first('Name') }}</span>
              @endif
          </div>

          <div class="form-group">
              <label for="registrationno">Registration Number:</label>
              <input type="text" class="form-control" name="Registration_No id="registrationno"/>
              @if ($errors->has('Registration_No'))
                    <span class="text-danger">{{ $errors->first('Registration Number') }}</span>
              @endif
          </div>

          <div class="form-group">
              <label for="phonenumber">Contact Number:</label>
              <input type="text" class="form-control" name="Contact_No" id="phonenumber"/>
              @if ($errors->has('Contact_No'))
                    <span class="text-danger">{{ $errors->first('Contact number') }}</span>
              @endif
          </div>
          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="Email" id="email"/>
              @if ($errors->has('Email'))
                    <span class="text-danger">{{ $errors->first('Email') }}</span>
              @endif
          </div>
          <div class="form-group">
               <label for="natureofproblem">Nature of Problem</label>
               <select id="natureofproblem" class="form-control" name="Nature_of_Problem" id="natureofproblem"/>
               <option selected>Choose...</option>
               <option>Wifi not working</option>
               <option>LAN port broken</option>
               <option>Weak Connection</option>
               <option>Damaged Wire</option>
               <option>others</option>
               </select>
               @if ($errors->has('Nature_of_Problem'))
                    <span class="text-danger">{{ $errors->first('Nature of problem') }}</span>
              @endif
          </div>
          <div class="form-group">
              <label for="hostel">Hostel:</label>
              <input type="text" class="form-control" name="Hostel" id="hostel"/>
              @if ($errors->has('Hostel'))
                    <span class="text-danger">{{ $errors->first('Hostel Name') }}</span>
              @endif
          </div>
          <div class="form-group">
              <label for="room">Room No.:</label>
              <input type="text" class="form-control" name="Room" id="room"/>
              @if ($errors->has('Room'))
                    <span class="text-danger">{{ $errors->first('Room Number') }}</span>
              @endif
          </div>
          <div class="form-group">
              <label for="availabilitytime">Availability Time:</label>
              <input type="time" class="form-control" name="Availability_Time" id="availabilitytime"/>
              @if ($errors->has('Availability_Time'))
                    <span class="text-danger">{{ $errors->first('Availability Time') }}</span>
              @endif
          </div>
          <div class="form-group">
              <label for="availabilityday">Availability Date:</label>
              <input type="date" class="form-control" name="Availability_Day" id="availabilityday"/>
              @if ($errors->has('Availability_Day'))
                    <span class="text-danger">{{ $errors->first('Availability Date') }}</span>
              @endif
          </div>           
          <div class="form-group">              
              <button type="submit" class="btn btn-warning btn-block">Submit</button>
          </div>
        </form>
        
      </div>
    </div>
  </div>
</div>
@endsection