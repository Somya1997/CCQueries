@extends('main')
@section('heading')
<div class="top-bar">
    <div class="container">
      	<div class="row">
        	<div class="col-6">
            	<div class="site-logo">
            	 	<a href="{{url('/')}}"><img src="../images/logonew1.png" alt=" " width="50%" height="2%"></a>
            	</div>
        	</div>
        	<div class="col-6 text-right ml-auto ">
            	<h2 style="font-size: 400%;color:darkorange;margin-top:3%"> CC QUERIES</h2>
        	</div>
      	</div>
    </div>
</div>
@endsection
@section('body')
<div class="back-cover" style="background-image:url('../images/cc2.jpg');">  
	<div class="container text-center">
		<div class="row d-flex justify-content-center">
			<div class="col-md-10">
				<div class="card1">
					<div class="card-header1" style="background:darkorange">
							<h1 style="text-align:center; font-family:calibri; color:white;">COMPLAINT TRACKING</h1>
					</div>
					
							<div class="content2 d-flex justify-content-around top">
								<div class="content2-header1">
									<p>Complaint Number #{{$studentMnnit->id}}</p>
								</div>
								<div class="content2-header1">
									<p>{{$studentMnnit->name}}</p>
								</div>
								<div class="content2-header1">
									<p>{{$studentMnnit->regno}}</p>
								</div>
								<div class="clear"></div>
							</div>
								<div class="content3 row justify-content-center">
									<div class="complaint_tracking">
											<div class="Complaint_Registered">
												<div class="imgcircle">
														<img src="../images/confirm.png" alt="confirm order">
												</div>
												<span class="line"></span>
												<p>Complaint Registered</p>
											</div>
											<div class="Processing">
												<div class="imgcircle">
														<img src="../images/process.png" alt="process order">
												</div>
												<span class="line"></span>
												<p>Processing</p>
											</div>
											<div class="Staff_Assigned">
												<div class="imgcircle">
														<img src="../images/quality.png" alt="quality check">
												</div>
												<span class="line"></span>
												<p>Staff Assigned</p>
											</div>
											<div class="Complaint_Resolved">
												<div class="imgcircle">
														<img src="../images/dispatch.png" alt="dispatch product">
												</div>
												<span class="line"></span>
												<p>Complaint Resolved</p>
											</div>
											<div class="Complaint_Closed">
												<div class="imgcircle">
														<img src="../images/delivery.png" alt="delivery">
												</div>
												<p>Complaint Closed</p>
											</div>
												<div class="clear"></div>
									</div>
								</div>
								<div class="content4 d-flex justify-content-around top">
									<div class="content4-header1">
									</div>
								</div>
								<form action="#">
									<div class="form-group d-flex text-center">
									<div class="col-12"><a href="{{url('/')}}" class="btn btn-primary btn-lg font-weight-bold text-white px-5">HOME</a></div>
									</div>
								</form>
				</div>  
			</div>
		</div>	
	</div>
</div> 

@endsection