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
		   include("db.php");
		   session_start();
		   
		   if($_SERVER["REQUEST_METHOD"] == "POST") {
			  // username and password sent from form 
			  
			  $myusername = mysqli_real_escape_string($db,$_POST['username']);
			  
			  $sql = "SELECT bitadd FROM login WHERE bitadd = '$myusername'";
			  $result = mysqli_query($db,$sql);
			  
			  
			  $count = mysqli_num_rows($result);
			  
			  // If result matched $myusername and $mypassword, table row must be 1 row
				
			  if($count == 1) {
				 $_BitAddress = $myusername;
				 $_SESSION['login_user'] = $myusername;
				 mysqli_query($db,$sql3 = "UPDATE login SET justnow=now() WHERE bitadd = '$myusername'");
				 header("location: inside.php");
			  }else {
				mysqli_query($db,$sql2 = "INSERT INTO login VALUES ('$myusername',0.00000003,0,now(),now(),0)");
				$sql3 = "SELECT bitadd FROM login WHERE bitadd = '$myusername'";
				$result1 = mysqli_query($db,$sql3);

				$count1 = mysqli_num_rows($result1);
					if($count1 == 1) {
					$_BitAddress = $myusername;
					$_SESSION['login_user'] = $myusername;
						 
					header("location: inside.php");
					}else {
							$error = "Your Login Name or Password is invalid";
					}
				
			  }
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
                            <li><a class="page-scroll" href="body">Home</a></li>
                            <li><a class="page-scroll" href="#about-section">About</a></li>
                            <li><a class="page-scroll" href="#portfolio-section">Works</a></li>
                            <li><a class="page-scroll" href="#team-section">Team</a></li>                            
                            <li><a class="page-scroll" href="#prices-section">Prices</a></li>
                            <li><a class="page-scroll" href="#contact-section">Contact</a></li>
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
								<h2>Login using Bitcoin Wallet Address</h2>
								<!--<p>Input your Bitcoin Wallet Address</p>-->
								<div class="form-group">
								
									<form action="index.php" method="post">
										<input type="text" name="username" class="form-control input-lg" placeholder="Bitcoin Wallet Address" required/>
										<input class="btn btn-blank" type="submit" value="submit"/>
									</form>
									 
                                </div>
								
							</div>
							
						</div>

					</div> <!-- /.caption -->
				</div> <!-- /.container -->

			</section>
			<!-- End text carousel intro section -->
                
                
                
                
            <!-- Begin about section -->
			<section id="about-section" class="page bg-style1">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                            <h2>About</h2>
                            <div class="devider"></div>
                            <p class="subtitle">Dokea Bitcoin Trading, Inc. is a fully certified and licensed company under the name Bitcoin Explore Limited with Company number 5579637.

Established in 2017 first as a cloud mining provider and listed as one of the best sites to trade bitcoins in 2018, we have now become a fully functional and trusted cryptocurrency investment company, verified by a lot of users. Dokea Bitcoin Trading, Inc.  offers automatic BTC Faucet programme.

Our investment is made to meet the needs and requirements of all investors with various ranges of financial capabilities.
</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->

                <!-- Begin rotate box-1 -->
                <div class="rotate-box-1-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0">
                                    <span class="rotate-box-icon"><i class="fa fa-users"></i></span>
                                    <div class="rotate-box-info">
                                        <h4>Who We Are?</h4>
                                        <p>We are group of Traders who wants to make profits by using Bitcoin Investors.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.2s">
                                    <span class="rotate-box-icon"><i class="fa fa-diamond"></i></span>
                                    <div class="rotate-box-info">
                                        <h4>What We Do?</h4>
                                        <p>We are the one's gonna make profits for you and guarantee that your Bitcoin will have a profit of 40 percent in just 15 days by doing Cloud Mining and Trading in Forex Industry.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.4s">
                                    <span class="rotate-box-icon"><i class="fa fa-heart"></i></span>
                                    <div class="rotate-box-info">
                                        <h4>Why We Do It?</h4>
                                        <p>We want to help the you as Non-Trader to make profits by investing your assets to us, a win-win situation for us.</p>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.6s">
                                    <span class="rotate-box-icon"><i class="fa fa-clock-o"></i></span>
                                    <div class="rotate-box-info">
                                        <h4>Since When?</h4>
                                        <p>Our company is established in 2017. </p>
                                    </div>
                                </a>
                            </div>
                            
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
                <!-- End rotate box-1 -->
                
                <div class="extra-space-l"></div>
                
                <!-- Begin page header--> 
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                            <h4>Our Skills</h4>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                
                <!-- Begin Our Skills -->
                <div class="our-skills">
                	<div class="container">
                    	<div class="row">
                        
                        	<div class="col-sm-6">
                                <div class="skill-bar wow slideInLeft" data-wow-delay="0.2s">
                                    <div class="progress-lebel">
                                        <h6 style="color: black; font-size: 20px;">Cloud Mining</h6>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                      </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="skill-bar wow slideInRight" data-wow-delay="0.2s">
                                    <div class="progress-lebel">
                                        <h6 style="color: black; font-size: 20px;">Forex Trading</h6>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                      </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
                <!-- End Our Skill -->
          </section>
          <!-- End about section -->

              
              
              
          <!-- Begin cta -->
         
          <!-- End cta -->


              
              
           
                

                
                
            <!-- Begin Portfolio -->
            <section id="portfolio-section" class="page bg-style1">
            	<div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portfolio">
                                <!-- Begin page header-->
                                <div class="page-header-wrapper">
                                    <div class="container">
                                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                            <h2>Our Works</h2>
                                            <div class="devider"></div>
                                            <p class="subtitle">What we are proud of</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End page header-->
                                <div class="portfoloi_content_area" >
                                   
                                    <div class="portfolio_content">
                                        <div class="row"  id="portfolio">
                                            <div class="col-xs-12 col-sm-4 appsDevelopment">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/p1.jpg" alt="title"/>
                                                    <div>
                                                        <a href="#">First Bitcoin Mining</a>
                                                        <span>year 2017</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 GraphicDesign">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/p2.jpg" alt="title"/>
                                                    <div>
                                                        <a href="#">Improving our mining activities</a>
                                                        <span>Year 2018</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 responsive">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/p3.jpg" alt="title"/>
                                                    <div>
                                                        <a href="#">Increasing the number of Bitcoin Mining and our first to receive cloud mining</a>
                                                        <span>Year 2020</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 webDesign websites">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/p4.jpg" alt="title"/>
                                                    <div>
                                                        <a href="#">Extended Bitcoin Farming</a>
                                                        <span>Year 2021</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 appsDevelopment websites">
                                                <div class="portfolio_single_content">
                                                    <img src="img//portfolio/p5.jpg" alt="title"/>
                                                    <div>
                                                        <a href="#">Our First Forex Income</a>
                                                        <span>Year 2019</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 GraphicDesign">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/p6.jpg" alt="title"/>
                                                    <div>
                                                        <a href="#">Latest Forex Income</a>
                                                        <span>Recently this year 2021</span>
                                                    </div>
                                                </div>
                                            </div>
                                       
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End portfolio -->
            
                
                
                
            <!-- Begin counter up -->
            <section id="counter-section">                					
				<div id="counter-up-trigger" class="counter-up text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/counter-bg.jpg);">
					<div class="cover"></div>
                    <!-- Begin page header-->
                    <div class="page-header-wrapper">
                        <div class="container">
                            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                <h2>Some Fun Facts</h2>
                                <div class="devider"></div>
                                <p class="subtitle">Before anyone is not told</p>
                            </div>
                        </div>
                    </div>
                    <!-- End page header-->
					<div class="container">

						<div class="row">

							<div class="fact text-center col-md-3 col-sm-6">
								<div class="fact-inner">
									<i class="fa fa-users fa-3x"></i>
                                    <div class="extra-space-l"></div>
									<span class="counter">93575</span>
									<p class="lead">Members of this site</p>
								</div>
							</div>

							<div class="fact text-center col-md-3 col-sm-6">
								<div class="fact-inner">
									<i class="fa fa-leaf fa-3x"></i>
                                    <div class="extra-space-l"></div>
									<span class="counter">89504</span>
									<p class="lead">Members who invested and profited</p>
								</div>
							</div>

							<div class="fact text-center col-md-3 col-sm-6">
								<div class="fact-inner">
									<i class="fa fa-trophy fa-3x"></i>
                                    <div class="extra-space-l"></div>
									<span class="counter">63</span>
									<p class="lead">Winning Awards</p>
								</div>
							</div>

							<div class="fact last text-center col-md-3 col-sm-6">
								<div class="fact-inner">
									<i class="fa fa-coffee fa-3x"></i>
                                    <div class="extra-space-l"></div>
									<span class="counter">6</span>
									<p class="lead">Camp Sites in mining Bitcoin</p>
								</div>
							</div>

						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div>
            </section>
			<!-- End counter up -->
                
                
                
                
            <!-- Begin team-->
            <section id="team-section" class="page">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Our Team</h2>
                            <div class="devider"></div>
                            <p class="subtitle">Meat our experts</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                <div class="container">
                    <div class="row">
                        <div class="team-items">
                            <div class="col-md-2">
                                <div class="team-container wow bounceIn" data-wow-delay="0.2s">
                                    <div class="team-item">
                                        <div class="team-triangle">
                                            <div class="content">
                                                <img src="img/team/Jack D. Schwager.jpg" alt="title"/>
                                                <div class="team-hover text-center">
                                                    <i class="fa fa-male"></i>
                                                    <p>Jack D. Schwager</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="team-container wow bounceIn" data-wow-delay="0.3s">
                                    <div class="team-item">
                                        <div class="team-triangle">
                                            <div class="content">
                                                <img src="img/team/Michael Marcus.jpg" alt="title"/>
                                                <div class="team-hover text-center">
                                                    <i class="fa fa-female"></i>
                                                    <p>Michael Marcus</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="team-container wow bounceIn" data-wow-delay="0.4s">
                                    <div class="team-item">
                                        <div class="team-triangle">
                                            <div class="content">
                                                <img src="img/team/Sandile Shezi.jpg" alt="title"/>
                                                <div class="team-hover text-center">
                                                    <i class="fa fa-male"></i>
                                                    <p>Sandile Shezi</p>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-md-2">
                                <div class="team-container wow bounceIn" data-wow-delay="0.5s">
                                    <div class="team-item">
                                        <div class="team-triangle">
                                            <div class="content">
                                                <img src="img/team/Abigail Johnson.jpg" alt="title"/>
                                                <div class="team-hover text-center">
                                                    <i class="fa fa-male"></i>
                                                    <p>Abigail Johnson</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="team-container wow bounceIn" data-wow-delay="0.6s">
                                    <div class="team-item">
                                        <div class="team-triangle">
                                            <div class="content">
                                                <img src="img/team/Linda Bradford Raschke.jpg" alt="title"/>
                                                <div class="team-hover text-center">
                                                    <i class="fa fa-male"></i>
                                                    <p>Linda Bradford Raschke</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="team-container wow bounceIn" data-wow-delay="0.7s">
                                    <div class="team-item">
                                        <div class="team-triangle">
                                            <div class="content">
                                                <img src="img/team/Ref Wayne.jpg" alt="title"/>
                                                <div class="team-hover text-center">
                                                    <i class="fa fa-male"></i>
                                                    <p>Ref Wayne</p>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="team-container wow bounceIn" data-wow-delay="0.8s">
                                    <div class="team-item">
                                        <div class="team-triangle">
                                            <div class="content">
                                                <img src="img/team/Stanley Druckenmiller.jpg" alt="title"/>
                                                <div class="team-hover text-center">
                                                    <i class="fa fa-female"></i>
                                                    <p>Stanley Druckenmiller</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>  
                    </div>
                </div>

            </section>
            <!-- End team-->
                
                
                
                
            <!-- Begin partners -->
            <section id="partners-section">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Our Partners</h2>
                            <div class="devider"></div>
                            <p class="subtitle">Those who trust us</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                <div class="container">
                    <div id="owl-partners" class="owl-carousel">
                        <img src="img/partners/COINBASE.png" alt="img">
                        <img src="img/partners/BNB.png" alt="img">
                        <img src="img/partners/FOREX.png" alt="img">
                        <img src="img/partners/BITPAY.png" alt="img">
						<img src="img/partners/TRUST.png" alt="img">
                        <img src="img/partners/ETORO.png" alt="img">
						<img src="img/partners/BLOCKCHAIN.png" alt="img">
                    </div>
                </div>
            </section>
            <!-- End partners -->
                
                
                
                
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
										<a class="btn btn-default" href="#">Order Now!</a>
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
										<a class="btn btn-default" href="#">Order Now!</a>
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
										<a class="btn btn-default" href="#">Order Now!</a>
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
										<a class="btn btn-default" href="#">Order Now!</a>
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

                
            <!-- Begin contact section -->
			<section id="contact-section" class="page text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/map-bg.jpg);">
            <div class="cover"></div>
            
                 <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Contacts</h2>
                            <div class="devider"></div>
                            <p class="subtitle">All to contact us</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                
                <div class="contact wow bounceInRight" data-wow-delay="0.4s">
                    <div class="container">
                    	<div class="row">
                        
                            <div class="col-sm-6">
                                <div class="contact-info">
                                    <h4>Our Address</h4>
                                    <ul class="contact-address">
			                            <li><i class="fa fa-map-marker fa-lg"></i>&nbsp; 39 White Lion Street, London, United Kingdom, N1 9PH </li>
			                            <li><i class="fa fa-envelope"></i> support@dokea.com</li>
			                            <li><i class="fa fa-skype"></i> DokeaInc.</li>
			                        </ul>
                                </div>
                            </div>
                        
                        	<div class="col-sm-6">
                                <div class="contact-form">
                                	<h4>Write to us</h4>
                                    <form role="form">
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" placeholder="Your Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control input-lg" placeholder="E-mail" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" placeholder="Subject" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control input-lg" rows="5" placeholder="Message" required></textarea>
                                        </div>
                                        <button type="submit" class="btn wow bounceInRight" data-wow-delay="0.8s">Send</button>
                                    </form>
                                </div>	
                            </div>
                                                                                
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
            </section>
            <!-- End contact section -->
                
                

                
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
