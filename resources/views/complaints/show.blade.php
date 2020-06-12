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
				        <p>Confirmed Order</p>
			        </div>
			        <div class="process">
           	 	        <div class="imgcircle">
                	            <img src="../images/process.png" alt="process order">
            	        </div>
				        <span class="line"></span>
				        <p>Processing Order</p>
			        </div>
			        <div class="quality">
				        <div class="imgcircle">
                	            <img src="../images/quality.png" alt="quality check">
            	        </div>
				        <span class="line"></span>
				        <p>Quality Check</p>
			        </div>
			        <div class="dispatch">
				        <div class="imgcircle">
                	            <img src="../images/dispatch.png" alt="dispatch product">
            	        </div>
				        <span class="line"></span>
				        <p>Dispatched Item</p>
			        </div>
			        <div class="delivery">
			    	    <div class="imgcircle">
                	            <img src="../images/delivery.png" alt="delivery">
				        </div>
				        <p>Product Delivered</p>
			       </div>
			            <div class="clear"></div>
	        	</div>
	        </div>
        </div>   

@endsection