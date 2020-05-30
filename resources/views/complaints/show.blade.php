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
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('complaints.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Complaint Number:</strong>
                {{ $complaint->id }}
            </div>
        </div>
    </div>
@endsection