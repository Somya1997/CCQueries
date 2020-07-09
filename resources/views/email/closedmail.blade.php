<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <style>
		

				a {
					text-decoration: none;
				}
				a:-webkit-any-link {
					text-decoration: none; 
				}
				hr {
					border: 1px solid #ddd; 
				}
				table {
					border-collapse: collapse; 
					background-color: #fff; 
				}
				span {
					display: block; 
					color: #333; 
					font-family: 'Proxima Nova', san-serif;
					font-weight: 500;
					text-decoration: none;
					font-size: 14px;
				}
				.clearfix {
					clear: both; 
				}
				.mcnCaptionBottomImageContent {
					width: 600px; 
				}
				.order-placed {
					width: 100%; 
					margin-bottom: 25px; 
				}
				.textCCqueries {
					text-align: center;
					margin-right: auto;
					margin-left:  auto;
					padding: 50px 0;
					font-size: 450%;
					color: darkorange;
					font-family: "Comic Sans MS", cursive, sans-serif;
					
				}
				.notice-container{
					border: 2px solid #ddd; 
					width: 90%; 
					text-transform: none; 
					display: block; 
					margin: 0 auto; 
					margin-bottom: 15px; 
					text-align: center; 
				}
				.florist-image {
					width: 50px;
					border-radius: 25px; 
					display: block; 
					margin: 0 auto 5px auto; 
				}
				.shop-name {
					font-weight: 700; 
				}
				.delivery-info {
					width: 90%; 
					margin: 0 auto 20px auto; 
				}
				.delivery-info--title,
				.order-summary--title {
					text-transform: uppercase; 
					font-weight: 700; 
				}
				.order-summary--title {
					width: 90%; 
					margin: 0 auto; 
				}
				.delivery-info--recipient,
				.delivery-info--card,
				.delivery-info--instr,
				.delivery-info--subs,
				.order-detail--title {
					font-weight: 700;
				}
				.order-summary-contact {
					float: left; 
					width: 60%; 
				}
				.order-summary-total {
					float:right; 
					width: 40%; 
				}
				.order-summary-btn { 
					margin: 20px; 
					color: #369ea3;
					padding: 8px 20px; 
					border: 1px solid #369ea3; 
					border-radius: 4px; 
				}
				
				.order-summary-container, 
				.questions-container {
					margin: 15px auto;
					width: 90%; 
					border-top: 2px solid #ddd; 
				}
				.order-summary-container{
					padding-top: 20px; 
				}
				.florist-questions,
				.billing-questions,
				.chatnow {
					width: 50%; 
					text-align:center;
				}
				.florist-questions {
					margin: 20px auto; 
					float:left; 
				}
				.billing-questions {
					margin: 20px auto; 
					float:right;
				}
				.chatnow {
					margin: 0 auto 15px auto; 
					text-decoration: underline; 
					color: #0082B5; 
				}
				.fine-print {
					text-align: center; 
					font-size: 10px; 
					font-weight: 700; 
				}
				.footer { 
					background-color: #369ea3;
					padding: 20px 0; 
				}
				.footer span {
					display: block; 
					text-align: center;
					margin: 0 auto;
					width: 70%;
					padding: 10px 0; 
					color: #fff; 
					text-transform: none; 
					font-size: 10px; 
				}
				i {
					padding: 0 15px
				}
				
				
				
	</style>

</head>
<body>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    <tbody class="mcnDividerBlockOuter">
                              <tr>
                                <td>
                                  <div class="delivery-info">
									<span class="delivery-info--subs">Computer Center MNNIT Allahabad, </span>
									@if($studentMnnit->status==3)
									<span><br>We are happy to let you know that your complaint, with complaint number {{$studentMnnit->id}} has been successfully resolved. In case you are not satisfied, you can register the complaint again.<br> Please find below the relevant details: <br> <br> </span>
									@elseif($studentMnnit->status==-2)
									<span><br>We are sorry to let you know that your complaint, with complaint number {{$studentMnnit->id}} can not be resolved. In case you are not satisfied , you can register the complaint again. Contact us for any further details <br> Please find below the relevant details: <br> <br> </span>
									@else
									<span><br>Your complaint, with complaint number {{$studentMnnit->id}} has been reopened again. Our staffs will reach out to you shortly. In case of any query feel free to contact us.<br> Please find below the relevant details: <br> <br> </span>
									@endif
                                    <span class="delivery-info--recipient">Complaint Number</span>
                                    <span class="delivery-info--address">{{$studentMnnit->id}}</span>
                                    <br>
                                    <span class="delivery-info--card">Complainant </span>
                                    <span>{{$studentMnnit->name}}</span>
                                    <br>
                                    <span class="delivery-info--instr">Registration Number </span>
									<span>{{$studentMnnit->regno}}</span>
									<br>
									<span class="delivery-info--instr">Complaint Status </span>
									@if($studentMnnit->status==3)
										<span>Successfully Closed</span>
									@elseif($studentMnnit->status==-2)
										<span>Closed</span>
									@else
										<span>Reopened</span>
									@endif
									<span><br><br> Do not hesitate to ask any questions related to your complaint.<br><br> Team CC MNNIT</span>
                                  </div>
                                </td>
                              </tr>
                             <tr>
							 
                                <td>
								  <div class="clearfix"></div>
									<hr>
                                    <span class="fine-print">Keep an eye out for an email confirming your complaint completed.</span>
                                  </div>
                                </td>
							 </tr>
							<table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    							<tbody class="mcnDividerBlockOuter">
									<tr>
										<td class="footer">
										<span>Motilal Nehru National Institute of Technology, Allahabad</span>
										<span>Barrister Mullah Colony, MNNIT Allahabad Campus, Teliarganj, Prayagraj, Uttar Pradesh 211004</a></span>
										<span>COPYRIGHT &copy; MNNIT- All Rights Reserved</span>
										</td>
									</tr>
								</tbody>
							</table>
    </tbody>
</table>


</body>
</html>