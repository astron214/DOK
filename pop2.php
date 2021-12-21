<!doctype html>

<html lang="en-US">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>DOKEA - Free Bitcoin Faucet</title>
		<meta name="description" content="Unika - Responsive One Page HTML5 Template">
		<meta name="keywords" content="HTML5, Bootsrtrap, One Page, Responsive, Template, Portfolio" />
		<meta name="author" content="imransdesign.com">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Google Fonts  -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body font -->
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar font -->

		<!-- Libs and Plugins CSS -->
		<link rel="stylesheet" href="inc/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="inc/animations/css/animate.min.css">
		<link rel="stylesheet" href="inc/font-awesome/css/font-awesome.min.css"> <!-- Font Icons -->
		<link rel="stylesheet" href="inc/owl-carousel/css/owl.carousel.css">
		<link rel="stylesheet" href="inc/owl-carousel/css/owl.theme.css">

		<!-- Theme CSS -->
        <link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/mobile.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skin/cool-gray.css">
        <!-- <link rel="stylesheet" href="css/skin/ice-blue.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/summer-orange.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/fresh-lime.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/night-purple.css"> -->

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link rel="icon" href="img/logo copy.png" type="image/x-icon">


		<?php
			session_start();
		?>

	</head>

    <body data-spy="scroll" data-target="#main-navbar">
        <div class="page-loader"></div>  <!-- Display loading image while page loads -->
    	<div class="body">
        

        <!-- Begin prices section -->
			<section id="prices-section" class="page">

               <div class="extra-space-l"></div>

				<!-- Begin prices -->
				<div class="prices">
					<div class="container">
						<div class="row">
							<div class="price-box col-sm-6 col-md-3 wow flipInY" data-wow-delay="0.5s">
								<div class="panel panel-default">
									<div class="panel-heading text-center">
										<i class="fa fa-star fa-2x"></i>
										<h3>Professional</h3>
									</div>
									<div class="panel-body text-center">
										<p class="lead"><strong>SEND TO</strong></p>
										<p class="list-group-item"><strong>3HHj92bfRNhDTPULHDjsq3uwjuT5Si3XKt</strong></p>
									</div>
									<br>
									<ul class="list-group text-center">
										<li class="lead" style="font-size:50;"><strong>AMOUNTING 0.0005 BTC</strong></li>
										<li class="lead"><strong>BEFORE CLICKING SEND REQUEST</strong></li>
									</ul>
									<?php
										include("db.php");
										if($_SERVER["REQUEST_METHOD"] == "POST") {
										  // username and password sent from form 
											
											$sql12 = "SELECT * FROM request WHERE bitadd = '" . $_SESSION['login_user'] . "'";
											$result12 = mysqli_query($db,$sql12);
											
											$count12 = mysqli_num_rows($result12);
											
											if($count12 == 0){
												
												/*mysqli_query($db,"UPDATE request SET reqpending = '" . $pend . "' WHERE bitadd = '" . $_SESSION['login_user']. "'");*/
												$spend = 0.0005;
												mysqli_query($db,"INSERT INTO request VALUES ('" . $_SESSION['login_user']. "','" . $spend . "',0)");
												header("location: congrats.php");
											}else{
												/*mysqli_query($db,"UPDATE request SET reqpending = '" . $pend . "' WHERE bitadd = '" . $_SESSION['login_user']. "'");*/
												header("location: done.php"); 
											}
									   }
									?>
									<div class="panel-footer text-center">
									<form action="pop2.php" method="post">
										<input class="prc" style="  background-color: #222;
											  border: none;
											  color: white;
											  padding: 15px 32px;
											  text-align: center;
											  text-decoration: none;
											  display: inline-block;
											  font-size: 16px;;" type="submit" value="SEND REQUEST" onclick="window.open('congrats.php','popUpWindow','height=500,width=400,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');">
									</form>
									</div>
								</div>										
							</div>
							
														
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div>
				<!-- End prices -->
				<div class="extra-space-l"></div>
			</section>
			<!-- End prices section -->
        
			
        <!-- Plugins JS -->
		<script src="inc/jquery/jquery-1.11.1.min.js"></script>
		<script src="inc/bootstrap/js/bootstrap.min.js"></script>
		<script src="inc/owl-carousel/js/owl.carousel.min.js"></script>
		<script src="inc/stellar/js/jquery.stellar.min.js"></script>
		<script src="inc/animations/js/wow.min.js"></script>
        <script src="inc/waypoints.min.js"></script>
		<script src="inc/isotope.pkgd.min.js"></script>
		<script src="inc/classie.js"></script>
		<script src="inc/jquery.easing.min.js"></script>
		<script src="inc/jquery.counterup.min.js"></script>
		<script src="inc/smoothscroll.js"></script>

		<!-- Theme JS -->
		<script src="js/theme.js"></script>

    </body> 
        
            
</html>
