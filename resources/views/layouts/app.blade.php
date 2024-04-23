<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i')}}" rel="stylesheet">

		<link href="{{asset('https://fonts.googleapis.com/css?family=Rufina:400,700')}}" rel="stylesheet">
        
        <!-- title of site -->
        <title>Primax</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="{{asset('assets/logo/favicon.png')}}"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

        <!--linear icon css-->
		<link rel="stylesheet" href="{{asset('assets/css/linearicons.css')}}">

        <!--flaticon.css-->
		<link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">

		<!--animate.css-->
        <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="{{asset('assets/css/bootsnav.css')}}" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">


        @livewireStyles
    </head>
	
	<body>
		

		<header>
			<div class="default-header">
				<div class="headerproblem">
				<div class="container">
					<div class="row">
						<div class="col-sm-3 col-md-2">
							<div class="logo">
								<a href="index.php"><img src="assets/images/logg.png" alt="image"/></a>
							</div>
						</div>
						<div class="col-sm-9 col-md-10">
							<div class="header_info">
								<div class="header_widgets">
									<div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
									<p class="uppercase_text">For Support Mail us : </p>
									<small href="mailto:info@example.com">salah-location@gmail.com</small>
								</div>
								<div class="header_widgets">
									<div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
									<p class="uppercase_text">Service Helpline : </p>
									<small href="tel:61-1234-5678-09">+212-761834923</small>
								</div>
								<div class="social-follow">
									<ul>
										<li><a href="https://code-projects.org/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
										<li><a href="https://code-projects.org/"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
										<li><a href="https://code-projects.org/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
										<li><a href="https://code-projects.org/"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
										<li><a href="https://code-projects.org/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="login_btn">
									@auth
									{{-- <a href="{{route('logout')}}" >Logout</a> --}}
									<form method="POST" action="{{route('logout')}}">
										@csrf
										<a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit()">Sign Out</a>
									</form>
									@else
									<a href="{{route('login')}}" >Login / register</a>
									@endif
								</div>
							</div>
						</div>
					</div>
				</div>
			    </div>
			</div>
		
			<!-- Navigation -->
			<nav id="navigation_bar" class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
						<button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
							<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
						</button>
					</div>
					<div class="header_wrap">
						<div class="user_login">
							@auth
							<ul>
								<li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> {{Auth::user()->name}} <i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="dropdown-menu">
										<li><a href="{{route('profile.edit')}}">Profile Settings</a></li>
										<li><a href="{{route('profile.edit')}}">Update Password</a></li>
										<li><a href="my-booking.php">My Booking</a></li>
										<li><a href="post-testimonial.php">Post a Testimonial</a></li>
										<li><a href="my-testimonials.php">My Testimonial</a></li>
										<li><form method="POST" action="{{route('logout')}}">
											@csrf
											<a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit()">Sign Out</a>
										</form>
										</li>
									</ul>
								</li>
							</ul>
							@else
							<ul>
								<li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i><i class="fa fa-angle-down" aria-hidden="true"></i></a>
									{{-- <ul class="dropdown-menu">
										<li><a href="{{route('profile.edit')}}">Profile Settings</a></li>
										<li><a href="update-password.php">Update Password</a></li>
										<li><a href="my-booking.php">My Booking</a></li>
										<li><a href="post-testimonial.php">Post a Testimonial</a></li>
										<li><a href="my-testimonials.php">My Testimonial</a></li>
										<li><a href="logout.php">Sign Out</a></li>
									</ul> --}}
								</li>
							</ul>
							@endif
						</div>
						<div class="header_search">
							<div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
							<form action="#" method="get" id="header-search-form">
								<input type="text" placeholder="Search..." class="form-control">
								<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
							</form>
						</div>
					</div>
					<div class="collapse navbar-collapse" id="navigation">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Home</a></li>
							<li><a href="page.php?type=aboutus">About Us</a></li>
							<li><a href="car-listing.php">Car Listing</a></li>
							<li><a href="page.php?type=faqs">FAQs</a></li>
							<li><a href="contact-us.php">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- Navigation end -->
		
		</header>
		
		
		<!--welcome-hero start -->
		{{-- <section id="home" class="welcome-hero"> --}}
			{{$slot}}
		<!--contact start-->
		<footer id="contact"  class="contact">
			<div class="container">
				<div class="footer-top">
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="single-footer-widget">
								<div class="footer-logo">
									<a href="index.html">carvilla</a>
								</div>
								<p>
									Ased do eiusm tempor incidi ut labore et dolore magnaian aliqua. Ut enim ad minim veniam.
								</p>
								<div class="footer-contact">
									<p>info@themesine.com</p>
									<p>+1 (885) 2563154554</p>
								</div>
							</div>
						</div>
						<div class="col-md-2 col-sm-6">
							<div class="single-footer-widget">
								<h2>about devloon</h2>
								<ul>
									<li><a href="#">about us</a></li>
									<li><a href="#">career</a></li>
									<li><a href="#">terms <span> of service</span></a></li>
									<li><a href="#">privacy policy</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-xs-12">
							<div class="single-footer-widget">
								<h2>top brands</h2>
								<div class="row">
									<div class="col-md-7 col-xs-6">
										<ul>
											<li><a href="#">BMW</a></li>
											<li><a href="#">lamborghini</a></li>
											<li><a href="#">camaro</a></li>
											<li><a href="#">audi</a></li>
											<li><a href="#">infiniti</a></li>
											<li><a href="#">nissan</a></li>
										</ul>
									</div>
									<div class="col-md-5 col-xs-6">
										<ul>
											<li><a href="#">ferrari</a></li>
											<li><a href="#">porsche</a></li>
											<li><a href="#">land rover</a></li>
											<li><a href="#">aston martin</a></li>
											<li><a href="#">mersedes</a></li>
											<li><a href="#">opel</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-offset-1 col-md-3 col-sm-6">
							<div class="single-footer-widget">
								<h2>news letter</h2>
								<div class="footer-newsletter">
									<p>
										Subscribe to get latest news  update and informations
									</p>
								</div>
								<div class="hm-foot-email">
									<div class="foot-email-box">
										<input type="text" class="form-control" placeholder="Add Email">
									</div><!--/.foot-email-box-->
									<div class="foot-email-subscribe">
										<span><i class="fa fa-arrow-right"></i></span>
									</div><!--/.foot-email-icon-->
								</div><!--/.hm-foot-email-->
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="row">
						<div class="col-sm-6">
							<p>
								&copy; copyright.designed and developed by <a href="{{asset('https://www.themesine.com/')}}">themesine</a>.
							</p><!--/p-->
						</div>
						<div class="col-sm-6">
							<div class="footer-social">
								<a href="#"><i class="fa fa-facebook"></i></a>	
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-pinterest-p"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>	
							</div>
						</div>
					</div>
				</div><!--/.footer-copyright-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
				
			</div><!--/.scroll-Top-->
			
        </footer><!--/.contact-->
		<!--contact end-->


		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="{{asset('assets/js/jquery.js')}}"></script>
        
        <!--modernizr.min.js-->
        <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js')}}"></script>
		
		<!--bootstrap.min.js-->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
		
		<!-- bootsnav js -->
		<script src="{{asset('assets/js/bootsnav.js')}}"></script>

		<!--owl.carousel.js-->
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

		<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js')}}"></script>
        <!--Custom JS-->
        <script src="{{asset('assets/js/custom.js')}}"></script>
        @livewireScripts
        
    </body>
	
</html>