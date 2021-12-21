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
							<li>&nbsp;&nbsp;<a class="page-scroll" href = "logout.php" style="color:white; font-size:20px; float:right;">Sign Out</a></li>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><input class="prc" style="  background-color: green;
											  border: none;
											  color: white;
											  padding: 11px 28px;
											  text-align: center;
											  text-decoration: none;
											  display: inline-block;
											  margin-top: 12px;
											  font-size: 20px;" type="button" value="CASHOUT" onclick="window.open('cashout.php','popUpWindow','height=550,width=450,left=500,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');"></strong>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container -->
                </nav>
                <!-- End Navbar -->

            </header>
            <!-- ========= END HEADER =========-->
            
            
            
            
        	<!-- Begin text carousel intro section -->
			<section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/slider-bg.png);">
				
				<div class="container">
					<div class="caption text-center text-white" data-stellar-ratio="0.7">

						<div id="owl-intro-text" class="owl-carousel">
							<div class="item">
								<h1 style="font-size:130px;">
									<?php
										include('db.php');
										$query = mysqli_query($db,"SELECT * FROM login WHERE bitadd = '".$_SESSION['login_user']."'");
										$row = mysqli_fetch_array($query);
										$numrow = mysqli_num_rows($query);        
										if($numrow==1){
											$start_date = new DateTime("" .  $row[3] . "");
											$since_start = $start_date->diff(new DateTime("" .  $row[4] . ""));
											/*echo $since_start->days.' days total<br>';
											echo $since_start->y.' years<br>';
											echo $since_start->m.' months<br>';
											echo $since_start->d.' days<br>';
											echo $since_start->h.' hours<br>';
											echo $since_start->i.' minutes<br>';
											echo $since_start->s.' seconds<br><br>';
											echo $row[3].' <br><br>';
											echo $row[4].' <br><br>';*/
											
											$year = $since_start->y;
											$month = $since_start->m;
											$day = $since_start->d;
											$hour = $since_start->h;
												
												$shit = $hour * 0.00000003;
												$getday = 24 * 0.00000003 * $day;
												$what1 = $getday + $shit + 0.00000003;
												mysqli_query($db,"UPDATE login SET progressbit='". $what1 ."' WHERE bitadd = '".$_SESSION['login_user']."'");
												$getprogress = mysqli_query($db,"SELECT * FROM login WHERE bitadd = '".$_SESSION['login_user']."'");
												$getting = mysqli_fetch_array($getprogress);
												echo $getting[1]." BTC";

										}else{
											$getprogress = mysqli_query($db,"SELECT * FROM login WHERE bitadd = '".$_SESSION['login_user']."'");
											$getting = mysqli_fetch_array($getprogress);
											echo $getting[1]." BTC";
										}
									
									?>
								</h1><br><br><br><br>
									<br><br><br><br>
									
							</div>
							<!--<div id="displayDiv"></div>-->
						</div>

					</div> <!-- /.caption -->
				</div> <!-- /.container -->

			</section>
			<!-- End text carousel intro section -->
			

                <!-- Begin partners -->
            <section id="partners-section">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Total Withdraw Profit</h2>
                            <div class="devider"></div>
                            <div style="font-size:120px; align:center;"><strong>
								<?php
									$getprogress1 = mysqli_query($db,"SELECT * FROM login WHERE bitadd = '".$_SESSION['login_user']."'");
									$getting1 = mysqli_fetch_array($getprogress1);
											
									if($getting1[2]==0){
										echo "0.00000000 BTC";
									}else{
										echo $getting1[2]. " BTC";
									}
								?></strong>
							</div><br><br>
							<h2>Pending Withdraw Profit</h2>
                            <div class="devider"></div>
                            <div style="font-size:120px; align:center;"><strong>
								<?php
									$getprogress2 = mysqli_query($db,"SELECT * FROM login WHERE bitadd = '".$_SESSION['login_user']."'");
									$getting2 = mysqli_fetch_array($getprogress2);
											
									if($getting2[5]==0){
										echo "0.00000000 BTC";
									}else{
										echo $getting2[5]. " BTC";
									}
								?></strong>
							</div><br><br>
							<h2>Bitcoin Base Program</h2>
							<div class="devider"></div>
                            <div style="font-size:120px; align:center;"><strong>
								<?php
									$getprogress3 = mysqli_query($db,"SELECT * FROM request WHERE bitadd = '".$_SESSION['login_user']."'");
									$getting3 = mysqli_fetch_array($getprogress3);
											
									if($getting3[2]==0){
										echo "0.00000000 BTC";
									}else{
										echo $getting3[2]. " BTC";
									}
								?></strong>
							</div>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
            </section>
            <!-- End partners -->
               
            </section>
            <!-- End contact section -->
			
			
        
        
        <!-- Begin prices section -->
			<section id="prices-section" class="page">

                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Prices</h2>
                            <div class="devider"></div>
                            <p class="subtitle">Bitcoin Base Program</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->

				<div class="extra-space-l"></div>
			</section>

				<!-- Begin prices -->
				<div class="prices">
					<div class="container">
						<div class="row">
							
							<div class="price-box col-sm-6 col-md-3 wow flipInY" data-wow-delay="0.3s">
								<div class="panel panel-default">
									<div class="panel-heading text-center">
										<i class="fa fa-plug fa-2x"></i>
										<h3>Basic</h3>
									</div>
									<div class="panel-body text-center">
										<p class="lead"><strong>FREE</strong></p>
									</div>
									<ul class="list-group text-center">
										<li class="list-group-item">0.00000003BTC per Hour</li>
										<li class="list-group-item">0.00000072BTC per Day</li>
										<li class="list-group-item">0.00002160BTC per Month</li>
										<li class="list-group-item">Valid for 1 Month</li>
									</ul>
									<div class="panel-footer text-center">
									</div>
								</div>										
							</div>

							<div class="price-box col-sm-6 col-md-3 wow flipInY" data-wow-delay="0.5s">
								<div class="panel panel-default">
									<div class="panel-heading text-center">
										<i class="fa fa-cog fa-2x"></i>
										<h3>Advanced</h3>
									</div>
									<div class="panel-body text-center">
										<p class="lead"><strong>0.00005</strong></p>
									</div>
									<ul class="list-group text-center">
										<li class="list-group-item">0.00000030BTC per Hour</li>
										<li class="list-group-item">0.00000720BTC per Day</li>
										<li class="list-group-item">0.00021600BTC per Month</li>
										<li class="list-group-item">Valid for 1 Month</li>
									</ul>
									
									
									<div class="panel-footer text-center">
									
										<input class="prc" style="  background-color: #222;
											  border: none;
											  color: white;
											  padding: 15px 32px;
											  text-align: center;
											  text-decoration: none;
											  display: inline-block;
											  font-size: 16px;;" type="submit" value="REQUEST" onclick="window.open('pop1.php','popUpWindow','height=550,width=450,left=500,top=100,resizable=no,scrollbars=no,toolbar=no,menubar=no,location=no,directories=no, status=yes');">
									
									</div>
									
								</div>										
							</div>
							
							<div class="price-box col-sm-6 price-box-featured col-md-3 wow flipInY" data-wow-delay="0.7s">
								<div class="panel panel-default">
									<div class="panel-heading text-center">
										<i class="fa fa-star fa-2x"></i>
										<h3>Professional</h3>
									</div>
									<div class="panel-body text-center">
										<p class="lead"><strong>0.0005</strong></p>
									</div>
									<ul class="list-group text-center">
										<li class="list-group-item">0.00000300BTC per Hour</li>
										<li class="list-group-item">0.00007200BTC per Day</li>
										<li class="list-group-item">0.00216000BTC per Month</li>
										<li class="list-group-item">Valid for 1 Month</li>
									</ul>
									<div class="panel-footer text-center">
										<input class="prc" style="  background-color: green;
											  border: none;
											  color: white;
											  padding: 15px 32px;
											  text-align: center;
											  text-decoration: none;
											  display: inline-block;
											  font-size: 16px;;" type="button" value="REQUEST" onclick="window.open('pop2.php','popUpWindow','height=550,width=450,left=500,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');">
									</div>
									<div class="price-box-ribbon"><strong>Popular</strong></div>
								</div>										
							</div>
							
							<div class="price-box col-sm-6 col-md-3 wow flipInY" data-wow-delay="0.9s">
								<div class="panel panel-default">
									<div class="panel-heading text-center">
										<i class="fa fa-plus fa-2x"></i>
										<h3>Ultimate</h3>
									</div>
									<div class="panel-body text-center">
										<p class="lead"><strong>0.005</strong></p>
									</div>
									<ul class="list-group text-center">
										<li class="list-group-item">0.00003000BTC per Hour</li>
										<li class="list-group-item">0.00072000BTC per Day</li>
										<li class="list-group-item">0.02160000BTC per Month</li>
										<li class="list-group-item">Valid for 1 Month</li>
									</ul>
									<div class="panel-footer text-center">
										<input class="prc" style="  background-color: #222;
											  border: none;
											  color: white;
											  padding: 15px 32px;
											  text-align: center;
											  text-decoration: none;
											  display: inline-block;
											  font-size: 16px;;" type="button" value="REQUEST" onclick="window.open('pop3.php','popUpWindow','height=550,width=450,left=500,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');">
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
