@extends('main')
<!-- @section('heading')
<div class="top-bar">
    <div class="container">
      <div class="row">
          <div class="col-12">
            <center><h2 style="font-size: 50px;color:darkorange"> CC QUERIES</h2></center>
          </div>
        </div>
      </div>
</div>
@endsection -->
@section('content')
        <!-- <div class="container space-login">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                    <div class="card-header" style="background:rgba(75, 181, 67, 0.8);">
                        <h1 style="text-align:center; font-family:calibri; color:white;">COMPLAINT REGISTERED SUCCESSFULLY!</h1>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                       <p class="lead"><h3>{{ $studentMnnit->name }},</h3><h4>Your complaint hass  been registered successfully and your complaint number is</h4><h1>{{$studentMnnit->id}}</h1>
                        </p>
                        </div>
                        <form action="#">
                        <div class="form-group d-flex">
                        <div class="col-12"><a href="{{url('/')}}" class="btn btn-primary btn-lg text-white px-5">Back to home page</a></div>
                        </div>
                        </form>                       
                    </div>
                    </div>
                </div>
            </div>
        </div> -->
        @if(Session::has('success'))
        <div class="mfp-container">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ Session::get('success') }}
                        {{$studentMnnit->id}}
                        <br>
                        <a href="{{url('/')}}" class="btn btn-primary btn-sm text-white px-5">ok</a>
                        @php
                        Session::forget('success');
                         @endphp
                        </div>
                    @endif

@endsection