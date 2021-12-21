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
			include("db.php");
			
				if($_SERVER["REQUEST_METHOD"] == "POST") {
				  // username and password sent from form 
				  
				  $address2 = mysqli_real_escape_string($db,$_POST['address']);
				  $amount2 = mysqli_real_escape_string($db,$_POST['amount']);
				  
				  mysqli_query($db,"UPDATE login SET availbit='$amount2' WHERE bitadd = '$address2'");

			   }else{
				   echo 'error1';
			   }
			
		   
			   if($_SERVER["REQUEST_METHOD"] == "POST") {
				  // username and password sent from form 
				  
				  $address1 = mysqli_real_escape_string($db,$_POST['address1']);
				  $amount1 = mysqli_real_escape_string($db,$_POST['amount1']);
				  
				  mysqli_query($db,"UPDATE request SET adminreq='$amount1' WHERE bitadd = '$address1'");

			   }else{
				   echo 'error';
			   }
			
		?>
		
	</head>

    <body data-spy="scroll" data-target="#main-navbar">
        <div class="page-loader"></div>  <!-- Display loading image while page loads -->
    	<div class="body">
        
            <!--========== BEGIN HEADER ==========-->
            <header id="header" class="header-main">

                <!-- Begin Navbar -->
                <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation"> <!-- Classes: navbar-default, navbar-inverse, navbar-fixed-top, navbar-fixed-bottom, navbar-transparent. Note: If you use non-transparent navbar, set "height: 98px;" to #header -->

                  <div class="container">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand page-scroll" href="index.html">DOKEA</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="page-scroll" style="color:white; font-size:20px;"><?php print_r($_SESSION['login_user']); ?></a></li>
							<li>&nbsp;&nbsp;<a class="page-scroll" href = "logout1.php" style="color:white; font-size:20px; float:right;">Sign Out</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container -->
                </nav>
                <!-- End Navbar -->

            </header>
            <!-- ========= END HEADER =========-->
            
            <!-- Begin team-->
            <section id="team-section" class="page">
				<div class="footer-top">
                	 <!-- /.container -->
                </div>
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2><?php print_r($_SESSION['login_user']); ?></h2>
                            <div class="devider"></div>
                            <p class="subtitle">GWAPO AS EVER!</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                <div class="contact wow bounceInRight" data-wow-delay="0.4s">
                    <div class="container">
                    	<div class="row">
                                                
                        	<div class="col-sm-6" style="align:center;">
                                <div class="contact-form">
                                	<h4>UPDATE TOTAL WITHRAW</h4>
                                    <form role="form" action="adverse.php" method="post">
                                        <div class="form-group">
                                            <input type="text" name="address" class="form-control input-lg" placeholder="BITCOIN Address" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="amount" class="form-control input-lg" placeholder="Amount Requested" required>
                                        </div>
                                        <button value="submit" type="submit" name="submit1" class="btn wow bounceInRight" data-wow-delay="0.8s">UPDATE</button>
                                    </form>
                                </div>	
                            </div>
							
							<div class="col-sm-6" style="align:center;">
                                <div class="contact-form">
                                	<h4>UPDATE PENDING</h4>
                                    <form role="form" action="adverse.php" method="post">
                                        <div class="form-group">
                                            <input type="text" name="address1" class="form-control input-lg" placeholder="BITCOIN Address" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="amount1" class="form-control input-lg" placeholder="Amount Requested" required>
                                        </div>
                                        <button value="submit" type="submit" name="submit2" class="btn wow bounceInRight" data-wow-delay="0.8s">UPDATE</button>
                                    </form>
                                </div>	
                            </div>
                                                                                
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>

            </section>
            <!-- End team-->
            
 
                
            <!-- Begin footer -->
            <footer class="text-off-white">
            
                
                
                <div class="footer">
                    <div class="container text-center wow fadeIn" data-wow-delay="0.4s">
                        <p class="copyright">&copy; DokeaInc 2017 - All Rights Reserved</a></p>
                    </div>
                </div>

            </footer>
            <!-- End footer -->

            <a href="#" class="scrolltotop"><i class="fa fa-arrow-up"></i></a> <!-- Scroll to top button -->
                                              
        </div><!-- body ends -->
        
        
        
        
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
