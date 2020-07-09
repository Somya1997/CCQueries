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

@section('body')
<header class="site-navbar js-sticky-header site-navbar-target" role="banner">
        <div class="container">
          <br>        
          @include('partials._nav')
        </div>     
      </header>
<div class="ftco-blocks-cover-1">
  <div class="ftco-cover-1 overlay" style="background-image:url('../images/cc2.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
        <br>
        <br>
        <br>
        <br>
          <h1>CC QUERIES</h1>
          <p class="mb-5">WANT TO CHECK YOUR COMPLAINT STATUS, JUST ENTER YOUR COMPLAINT NUMBER</p>
          <form action="{{route('complaints.index')}}" autocomplete="off">
            <div class="form-group d-flex">
              <input type="number" class="form-control" id="track" name="track" placeholder="Enter your complaint number">
            </div>
            <div class="form-group d-flex">
            <div class="col-12"><button class="btn btn-primary btn-lg text-white px-5 float-left">Track Now</button></div>
            </div>
          </form>
        </div>
        <div class="col-lg-6" style="text-align: right;">
          <br>
          <br>
          <br>
          <br>
          <h1>CC QUERIES</h1>
          <p class="mb-5">FOR ANY NEW COMPLAINTS REGISTER HERE.</p>
          <form action="#">
            <div class="form-group d-flex">
              <div class="col-12"><a href="{{route('complaints.create')}}" class="btn btn-primary btn-lg text-white px-5 float-right">Register your Complaints</a></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- END .ftco-cover-1 -->
  <div class="ftco-service-image-1 pb-5">
    <div class="container">
      <div class="owl-carousel owl-all">
        <div class="service text-center">
          <a href="#"><img src="../images/admin_building_900x587.jpg" alt="Image" class="img-fluid"></a>
          <div class="px-md-3">
            <h3><a href="#">Administrative Building</a></h3>
            <p>The administrative building is responsible for the maintenance and supervision of the institution. The aesthetics of the building is one of the principal aspects that add to the beautification of campus infrastructure. 
                </p>
          </div>
        </div>
        <div class="service text-center">
          <a href="#"><img src="../images/Computer_Centre_MNNIT_900x587.jpg" alt="Image" class="img-fluid"></a>
          <div class="px-md-3">
          <h3><a href="#">Computer Center</a></h3>
          <p>The computer centre is solely responsible for keeping Computation related facilities available to each and every member of MNNIT Allahabad. Computer Center provides Email, Web, DNS, FTP, Internet access, HPC and other services 24 hours and 365 days a year. </p>
        </div>
        </div>
        <div class="service text-center">
          <a href="#"><img src="../images/main_building_900x587.jpg" alt="Image" class="img-fluid"></a>
          <div class="px-md-3">
            <h3><a href="#">Main Building</a></h3>
            <p>The main building constitutes most of the departments of the institute and the central library which is responsible for the academic activities that helps in grooming the students in their respective fields.  </p>
          </div>
      </div>
      </div>
    </div>
  </div>
</div>



      @include('partials._about')
      @include('partials._contact')
@endsection
   