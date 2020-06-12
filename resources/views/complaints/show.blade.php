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
@section('content')
        <div class="content">
	        <div class="content1">
		        <h2>Complaint Tracking</h2>
	        </div>
	        <div class="content2">
		        <div class="content2-header1">
					<p>Complaint Number :#{{$studentMnnit->id}}</p>
		        </div>
		        <div class="content2-header1">
					<p>{{$studentMnnit->name}}</p>
		        </div>
		        <div class="content2-header1">
					<p>{{$studentMnnit->regno}}</p>
		        </div>
		        <div class="clear"></div>
	            </div>
	            <div class="content3">
                <div class="shipment">
			        <div class="confirm">
                        <div class="imgcircle">
                                <img src="../images/confirm.png" alt="confirm order">
            	        </div>
				        <span class="line"></span>
				        <p>Complaint Registered</p>
			        </div>
			        <div class="process">
           	 	        <div class="imgcircle">
                	            <img src="../images/process.png" alt="process order">
            	        </div>
				        <span class="line"></span>
				        <p>Processing</p>
			        </div>
			        <div class="quality">
				        <div class="imgcircle">
                	            <img src="../images/quality.png" alt="quality check">
            	        </div>
				        <span class="line"></span>
				        <p>Staff Assigned</p>
			        </div>
			        <div class="dispatch">
				        <div class="imgcircle">
                	            <img src="../images/dispatch.png" alt="dispatch product">
            	        </div>
				        <span class="line"></span>
				        <p>staff close the complaint</p>
			        </div>
			        <div class="delivery">
			    	    <div class="imgcircle">
                	            <img src="../images/delivery.png" alt="delivery">
				        </div>
				        <p>Complaint completed</p>
			       </div>
			            <div class="clear"></div>
	        	</div>
	        </div>
        </div>   

@endsection