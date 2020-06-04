@extends('main')
@section('heading')
<div class="top-bar">
    <div class="container">
      <div class="row">
          <div class="col-12">
            <center><h2 style="font-size: 50px;color:darkorange"> CC QUERIES</h2></center>
          </div>
        </div>
      </div>
</div>
@endsection
@section('content')
<div class="container px-1 px-md-4 py-5 mx-auto">
    <div class="card">
        <div class="row d-flex justify-content-between px-3 top">
            <div class="d-flex">
                <h5>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;COMPLAINT NUMBER <span class="text-primary font-weight-bold">#{{$studentMnnit->id}}</span></h5>
            </div>
            <div class="d-flex flex-column text-sm-right">
                <p class="mb-0"><h5>NAME<span class="text-primary font-weight-bold mr-5">#{{$studentMnnit->name}}</span></h5></p>
                <p class="mb-0"><h5>REGISTRATION No.<span class="text-primary font-weight-bold mr-5">#{{$studentMnnit->regno}}</span></h5></p>
            </div>
        </div> <!-- Add class 'active' to progress -->
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <ul id="progressbar" class="text-center">
                    <li class="active step0"></li>
                    <li class="active step0"></li>
                    <li class="active step0"></li>
                    <li class="step0"></li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-between top">
            <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/9nnc9Et.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Complaint<br>Registered</p>
                </div>
            </div>
            <div class="row d-flex icon-content"> <img class="icon" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSObpm1vtWNGKxnDQYdSF00niDJmCTWDwV5er2G9dYmPUBmy6gZ&usqp=CAU">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Staff<br>Assigned</p>
                </div>
            </div>
            <div class="row d-flex icon-content"> <img class="icon" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSbu4KprNE9iX0igyIYbQg0F_XcEoWtz-Dgj3xHt34YMvNiMK-F&usqp=CAU">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Staff<br>Reviewed</p>
                </div>
            </div>
            <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/HdsziHP.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Complaint<br>Completed</p>
                </div>
            </div>
        </div>
        <form action="#">
            <div class="form-group d-flex text-center">
              <div class="col-12"><a href="{{url('/')}}" class="btn btn-success btn-lg text-white px-5">HOME</a></div>
            </div>
          </form>
    </div>
</div>

@endsection