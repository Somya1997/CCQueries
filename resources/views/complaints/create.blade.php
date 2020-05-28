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

      <form action="{{ route('complaints.store') }}" method="POST">
          {{ csrf_field() }}
          <div class="form-group">    
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name" id="name"/>
              @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('Name') }}</span>
              @endif
          </div>

          <div class="form-group">
              <label for="regno">Registration Number:</label>
              <input type="text" class="form-control" name="regno" id="regno"/>
              @if ($errors->has('regno'))
                    <span class="text-danger">{{ $errors->first('Registration Number') }}</span>
              @endif
          </div>

          <div class="form-group">
              <label for="phoneno">Contact Number:</label>
              <input type="text" class="form-control" name="phoneno" id="phoneno"/>
              @if ($errors->has('phoneno'))
                    <span class="text-danger">{{ $errors->first('Contact number') }}</span>
              @endif
          </div>
          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email" id="email"/>
              @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('Email') }}</span>
              @endif
          </div>
          <div class="form-group">
               <label for="nature">Nature of Problem</label>
               <select id="nature" class="form-control" name="nature" id="nature">
               <option selected>Choose...</option>
               <option>Wifi not working</option>
               <option>LAN port broken</option>
               <option>Weak Connection</option>
               <option>Damaged Wire</option>
               <option>others</option>
               </select>
               @if ($errors->has('nature'))
                    <span class="text-danger">{{ $errors->first('Nature of problem') }}</span>
              @endif
          </div>
          <div class="form-group">
              <label for="hostel">Hostel:</label>
              <input type="text" class="form-control" name="hostel" id="hostel"/>
              @if ($errors->has('hostel'))
                    <span class="text-danger">{{ $errors->first('Hostel Name') }}</span>
              @endif
          </div>
          <div class="form-group">
              <label for="room">Room No.:</label>
              <input type="text" class="form-control" name="room" id="room"/>
              @if ($errors->has('room'))
                    <span class="text-danger">{{ $errors->first('Room Number') }}</span>
              @endif
          </div>
          <div class="form-group">
              <label for="availabletime">Availability Time:</label>
              <input type="time" class="form-control" name="availabletime" id="availabletime"/>
              @if ($errors->has('availabilitytime'))
                    <span class="text-danger">{{ $errors->first('Availability Time') }}</span>
              @endif
          </div>
          <div class="form-group">
              <label for="availabledate">Availability Date:</label>
              <input type="date" class="form-control" name="availabledate" id="availabledate"/>
              @if ($errors->has('availabilityday'))
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