<?php
ob_start();
session_start();
$today=date("d-m-Y");
$todaytime=strtotime($today)+636000;
$expiredate=date("d-m-Y",$todaytime);
?>
<!--MIT Licenced Code ~ Engr Nnamso Twitter @Nnamso_ -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>::. Law Union & Rock Insurance Plc</title>

	<!--<link href='http://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>-->
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  	<link rel="stylesheet" type="text/css" href="css/confirmation.css">
  	<script src="dist/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">

  	 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   

</head>
<body>
<form target="_self" method="post" enctype="multipart/form-data" >

<div id="con" style=""> 


<style type="text/css">
body {
  background-image: url(bg.png);
  background-color:#ccc;

}
</style>

	<div class="container">
		<div id="header" class="row">
			<div class="col-xs-12">
				<img src="logoLUR.png" style="margin:2% 40%;">
			</div>
			<div class="col-xs-12 head-title">
				<div style=" height:100%; width:100%;"></div>
				<div class="hdtle">
					<h1>GOOD-IN-TRANSIT (SINGLE TRIP COVER)</h1>
				</div>
				<h3 class="new-subtitle">Certificate of Insurance</h3>
			</div>
		</div>
		<div class="row">

		<div class="formbdy"> 
			<form>
				<div class="form-group">
					<div class="row cert1">
						<div class="col-xs-6 info-title">
							<div class="row">POLICY NO: <span style=""><?php echo"LUR".time(); ?></span></div>
						</div>

						<div class="col-xs-6 info-title">
							<div class="row">CERTIFICATE NO:<span style=""><?php echo"LUR/".rand(2000,5000)."/".date("y"); ?></span></div>
						</div>
					</div>
					
					<div class="row cert2">
						<div class="col-xs-6 info-title">
							<div class="row">COMMENCEMENT DATE: <span style=""><?php echo $today; ?></span></div>
						</div>

						<div class="col-xs-6 info-title">
							<div class="row">EXPIRY DATE:<span style=""><?php echo $expiredate; ?></span></div>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-5 info-title">
							<div class="row ">CUSTOMER:</span></div>
						</div>

						<div class="col-xs-7 info-description cat">
							<div class="row info-category">
								<b>CUSTOMER NAME</b><span style=""><?php echo $_SESSION['customername']; ?> 
							</div>
						</div>	
					</div>	
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-xs-5 info-title">
							<div class="row ">TRIP DETAILS</div>
						</div>
						<div class="col-xs-7 info-description cat">
							<div class="row info-category">
								<h5>DEPARTING FROM:
								<span style=""><?php echo $_SESSION['fromcity']; ?></span> <span style="">IN</span><span style=""><?php echo $_SESSION['fromstate']; ?></span>
							</h5>
							</div>
							 &nbsp;
							<div class="row info-category">
								<h5>DESTINATION:
							   <span style=""><?php echo $_SESSION['tocity']; ?></span> <span style="">IN</span><span style=""><?php echo $_SESSION['tostate']; ?></span>
							</h5>
							</div>
						</div>
					</div>	
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-xs-5 info-title">
							<div class="row ">RECIPIENT DETAILS:</div>
						</div>
						<div class="col-xs-7 info-description cat">
							<div class="row info-category">
								<h5>NAME:<span style=""><?php echo $_SESSION['recipientname']; ?></h5>
								<span></span>
							</div>
							<div class="row info-category">
								<h5>PHONE NO: <span style=""><?php echo $_SESSION['recipienttel']; ?></h5>
								<span></span>
							</div>
						</div>
					</div>	
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-xs-5 info-title">
							<div class="row">TRANSPORTATION MODE</div>
						</div>
						<div class="col-xs-7 info-description cat">
							<div class="row info-category">
								<h5>TRANSPORTATION MODE<span style=""><?php echo $_SESSION['transportmode']; ?></h5>
								<span></span>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-xs-5 info-title">
							<div class="row ">SHIPMENT DETAILS:</div>
						</div>
						

						<div class="col-xs-7 info-description cat">
							<div class="row info-category">
								<h5>TYPE OF GOODS <span style="">
								<?php 
								 $typeofgoods = $_SESSION['typeofgoods'];
								 $allgoods= "";
								foreach ($typeofgoods as $goodstype)
								{
								 $allgoods .= $goodstype . ", ";
								 $goodsname=$goodstype;
								 echo $goodsname.",";
								}
								?>
								</h5>
								<span></span>
							</div>
						</div>
						

						<div class="row info-category">
							
							<span></span>
						</div>
					</div>
				</div>

				
				<div class="form-group">
					<div class="row">
						<div class="col-xs-5 info-title">&nbsp;</div>
						<div class="col-xs-7 info-description cat">
							<div class="row info-category">
								<h5>TOTAL SUM INSURED (NAIRA) <span style=""><?php echo $_SESSION['suminsured']; ?></h5>
								<span></span>
							</div>
							<div class="row info-category">
								<h5>PREMIUM DUE (NAIRA) <span style=""><?php echo $_SESSION['premiumdue']; ?></h5>
								<span></span>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-xs-5 info-title">
							<div class="row" style="word-wrap:break-word">CARRIER/SHIPPER'S DETAILS & VEHICLE DETAILS</div>
						</div>
						<div class="col-xs-7 info-description cat">
							<div class="row info-category">
								<h5>VEHICLE PLATE NUMBER <span style=""><?php echo $_SESSION['vehiclenumber']; ?></h5>
								<span></span>
							</div>
							<div class="row info-category">
								<h5>VEHICLE MAKE <span style=""><?php echo $_SESSION['vehiclemake']; ?></h5>
								<span></span>
							</div>
							<div class="row info-category">
								<h5>VEHICLE COLOUR <span style=""><?php echo $_SESSION['vehiclecolor']; ?></h5>
								<span></span>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-xs-5 info-title">
							<div class="row">DRIVER'S DETAILS</div> </div>
						<div class="col-xs-7 info-description cat">
							<div class="row info-category">
								<h5>DRIVER'S NAME <span style=""><?php echo $_SESSION['driversname']; ?></h5>
								<span></span>
							</div>
							<div class="row info-category">
								<h5>DRIVERS PHONE NUMBER <span style=""><?php echo $_SESSION['driversnumber']; ?></h5>
								<span></span>
							</div>
						</div>
					</div>
				</div>




 

				<div class="row">
				<br>
					<div class="col-xs-offset-2 col-xs-4" style="margin-top:70px;"><b style="float:left">Examined</b><span id="examiner-name" style="text-decoration:underline;margin-top:-1px;">________________</span></div>
					<div class="col-xs-6" style="text-align:center;">
						<div class="row">
						<img src="sign.png" style="margin:2% 30%;">
							<h5 style="float:none">LAW UNION & ROCK INSURANCE PLC.</h5>
							<h6>(Authorized Insurers)</h6>
						</div>
						<div class="row">
							<img src="" style="width:100px; height:auto; ">
							<h6 style="margin:0% 33%;">Managing Director</h6>
						</div>
					</div>
				</div>
				<button class="btn btn-primary pull-right" type="submit" onclick="myFunction()">Print this page</button>

<script>
function myFunction() {
    window.print();
}
</script>

			</form>
		</div>
	</div>

	</div>
	</div>


	<!---Javascript files------>
  	<script src="js/jquery-1.11.3.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>

</body>
</html>