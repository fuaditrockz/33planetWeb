<?php
	session_start();

	if(!isset($_SESSION['username'])) {
		   header('location:index.php'); 
		} else { 
		   $username = $_SESSION['username']; 
		}
?>

<!DOCTYPE html>

<html lang="en">
<head>
<title>33planet App A Mobile App Flat Bootstrap Responsive Website Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="33planet App Responsive web, Traveling, Indonesia, Bali, Traveling in Indonesia, Wonderful Indonesia, Travel Marketplace,Traveling, Native People, Marketplace" />
<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta charset utf="8">
<!--font-awsome-css-->
     <link rel="stylesheet" href="css/font-awesome.min.css"> 
<!--bootstrap-->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<!--custom css-->
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
<!--component-css-->
	<script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<!--script-->
	<script src="js/modernizr.custom.js"></script>
    <script src="js/bigSlide.js"></script>
           <script>
				$(document).ready(function() {
				$('.menu-link').bigSlide();
				});
     </script>
<!-- web-fonts -->  
  <link href='//fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts -->
<!-- pop-up-box -->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	    <script>
			$(document).ready(function() {
				$('.popup-top-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
				});																							
			}); 
		</script>
<!--//pop-up-box -->
    </head>
<body>
<div class="body-back">
	<div class="masthead pdng-stn1">
		<div id="menu" class="panel" role="navigation">
			<div class="wrap-content">
				<div class="profile-menu text-center">
					<img class="border-effect" src="images/33planet item putih2 copy.png" alt=" ">
						<h3>MENU</h3>

						<div class="pro-menu">
							<div class="logo">
								<li><a class=" link link--yaku  active" href="main.html"><span>H</span><span>o</span><span>m</span><span>e</span></a></li>
								<li><a class=" link link--yaku" href="about.html"><span>A</span><span>b</span><span>o</span><span>u</span><span>t</span></a></li>
								<li><a class=" link link--yaku" href="short-codes.html"><span>S</span><span>e</span><span>r</span><span>v</span><span>i</span><span>c</span><span>e</span><span>s</span></a></li>
								<li><a class=" link link--yaku" href="destination.html"><span>D</span><span>e</span><span>s</span><span>t</span><span>i</span><span>n</span><span>a</span><span>t</span><span>i</span><span>o</span><span>n</span><span>s</span></a></li>
								<li><a class=" link link--yaku" href="contact.html"><span>C</span><span>o</span><span>n</span><span>t</span><span>a</span><span>c</span><span>t</span></a></li>
							</div>
				

						</div>
				</div>
			</div>
		</div>
		<div class="phone-box wrap push" id="home">
			<div class="menu-notify">
				<div class="profile-left">
					<a href="#menu" class="menu-link"><i class="fa fa-list-ul"></i></a>
				</div>
				<div class="Profile-mid">
					<h5 class="pro-link"><img src="images/33planet new logo3 copy.png" width="150"></a></h5>
				</div>
				<div class="Profile-right">
                    <!-- Foto Profil User dengan drop down menu -->
                    <div class="user" style="background-image:url('images/t1.jpg')">
                    <ul class="nav nav-pills">
                    <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="logout.php">Log Out</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Settings</a></li>
                    </ul>
                </li>
                </ul>
               <!--</div>--> 
                </div>
						<!-- modal -->
					<div id="small-dialog" class="mfp-hide">
						<div class="login-modal"> 	
							<div class="booking-info">
							   <h3><a href="main.html">T<span>r</span>a<span>v</span>e<span>l</span> <span>H</span>u<span>n</span>t</a></h3>
								
							</div>
							<div class="login-form">
								<form action="login.php" method="post">
									<p>User Name </p>
									<input type="text" name="username" required/>
									<p>User Password</p>
									<input type="password" name="password" required/>	 
									<div class="wthree-text"> 
										<ul> 
											<li>
												<input type="checkbox" id="brand" value="">
												<label for="brand"><span></span> Remember me ?</label>  
											</li>
											<li> <a href="#">Forgot password?</a> </li>
										</ul>
										<div class="clear"> </div>
									</div> 
									<input type="submit" value="Sign In">		
								</form>
								<p>Don’t have an account ?<a href="#small-dialog1" class="sign-in popup-top-anim"> Sign Up</a></p>
							</div> 
						</div>
					</div>
					<!-- //modal --> 
					<!-- modal-two -->
					<div id="small-dialog1" class="mfp-hide">
						<div class="login-modal">  
							<div class="booking-info">
							   <h3><a href="main.html">T<span>r</span>a<span>v</span>e<span>l</span> <span>H</span>u<span>n</span>t</a></h3>
								
							</div>
							<div class="login-form signup-form">
								<form action="signup.php" method="post">
									<p>User Name </p>
									<input type="text" name="username"  required=""/>
									<p>User Email </p>
									<input type="text" name="email"  required=""/>
									<p>User Password</p>
									<input type="password" name="password" placeholder="" required/>	
									<div class="wthree-text"> 
										<input type="checkbox" id="brand1" value="">
										<label for="brand1"><span></span>I accept the terms of use</label> 
									</div>
									<input type="submit" value="Sign Up">		
								</form> 
							</div> 
						</div>
					</div>
					<!-- //modal-two --> 
					
				</div>
				<div class="clearfix"></div>
			</div> 
<!-- banner -->
   <div class="details-grid">
				<div class="details-shade">
						<div class="details-right">
							<img src="images/33planet copy.png" alt=" " width="75">
						  <h3>Welcome To 33planet</h3>
							<h4>Bring Into Corner of the world </h4>
						</div>
						<div class="banner_search">
								<form action="#" method="post">
									<input type="search" name="search" value="Where to go ?" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Where to go ?';}" required>
									<input type="submit" value=" ">
								</form>
						</div> 

				
				</div>
			</div>
		<div class="w3agile banner-bottom">
				<ul>
				    <li><a href="flight.html" class="hvr-radial-out"><i class="fa fa-plane" aria-hidden="true"></i></a><h6>Flight</h6></li>
					<li><a href="train.html" class="hvr-radial-out"><i class="fa fa-train" aria-hidden="true"></i></a><h6>Train</h6></li>
					<li><a href="bus.html" class="hvr-radial-out"><i class="fa fa-bus" aria-hidden="true"></i></a><h6>Bus</h6></li>
					<li><a href="hotel.html" class="hvr-radial-out"><i class="fa fa-bed" aria-hidden="true"></i></a><h6>Hotels</h6></li>
				</ul>
			</div>
   <!-- //banner -->
   <!--/welcome-->
		        <div class="w3agile welcome"> 
					<h3 class="w3ls-title">Welcome !</h3> 
					<div class="b-bottom">
			<div class="col-md-6 banner_bottom_left">
			  <h3>Exploring some place with Native people</h3>
			  <p><i>They better understand the circumstances of a place.</i><i>~</i><i>33planet</i> We focus on the empowerment of human recources, in addition, there are many places that have the potential to provide a new experience to you. That is the reason why we empower 'the Alien'(Guide & Host) to introduce a variety of unique and interesting destination for you.</p>
				<div class="wthree_more wthree_more1">
					<a href="#" class="button--wayra button--border-thick button--text-upper button--size-s">Read More</a>
				</div>
			</div>
			<div class="col-md-6 banner_bottom_right">
				<div class="wthree_banner_bottom_right_grids">
					<div class="col-md-6 banner_bottom_right_grid">
						<div class="view view-tenth">
						<img src="images/4.jpg" class="img-responsive" alt="">
							
							<div class="mask">
							    <a href="flight.html">
									  <div class="agile_text_box">
											<i class="fa fa-plane" aria-hidden="true"></i>
											<h3>Lorem ipsum</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adip.</p>
									  </div>
								 </a>
							</div>
						</div>
					</div>
					<div class="col-md-6 banner_bottom_right_grid">
						<div class="view view-tenth">
						<img src="images/5.jpg" class="img-responsive" alt="">
							
							<div class="mask">
							   <a href="train.html">
									<div class="agile_text_box">
										<i class="fa fa-train" aria-hidden="true"></i>
										<h3>Train</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adip.</p>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="wthree_banner_bottom_right_grids">
					<div class="col-md-6 banner_bottom_right_grid">
						<div class="view view-tenth">
						<img src="images/6.jpg" class="img-responsive" alt="">
							
							<div class="mask">
							  <a href="bus.html">
								<div class="agile_text_box">
									<i class="fa fa-bus" aria-hidden="true"></i>
									<h3>Bus</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adip.</p>
								</div>
							   </a>
							</div>
						</div>
					</div>
					<div class="col-md-6 banner_bottom_right_grid">
						<div class="view view-tenth">
							<img src="images/7.jpg" class="img-responsive" alt="">
							<div class="mask">
							<a href="hotel.html">
							  <div class="agile_text_box">
								<i class="fa fa-bed" aria-hidden="true"></i>
								<h3>Hotels</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adip.</p>
							   </div>
							   </a>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>	
				</div>
		<!--//welcome-->
		<!--/footer-->
    <div class="w3agile footer">
			<div class="col-md-3 w3agile_footer_grid">
				<h3>About Us</h3>
				<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
					voluptatibus.</p>
				<h3 class="logo"><a href="main.html"><img src="images/33planet item putih copy.png" width="200"></a></h3>
			</div>
			<div class="col-md-2 w3agile_footer_grid">	
				<h3>Links</h3>
				<ul>
					<li><a href="main.html">Home</a></li>
					<li><a href="short-codes.html">Services</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="contact.html">Mail Us</a></li>
				</ul>
			</div>
			<div class="col-md-4 w3agile_footer_grid">
				<h3>Twitter Posts</h3>
				<ul class="w3agile_footer_grid_list">
					<li>Ut aut reiciendis voluptatibus maiores alias, ut aut reiciendis.
						<span><i class="fa fa-twitter" aria-hidden="true"></i> 02 days ago</span></li>
					<li>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
						voluptatibus.<span><i class="fa fa-twitter" aria-hidden="true"></i> 03 days ago</span></li>
				</ul>
			</div>
			<div class="col-md-3 w3agile_footer_grid">
				<h3>Newsletter</h3>
				<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus.</p>
				<ul class="social">
					<form action="#" method="post">			 
					  <input type="text" name="Email" placeholder="Enter Email..." required>

					 <input type="submit" value="Submit">
					 <div class="clearfix"></div>
				 </form>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="w3agile agileinfo_copy_right">
			<div class="agileinfo_copy_right_left">
				<p>© 2016 33planet. All rights reserved | Design by <a href="http://w3layouts.com/">33planet</a></p>
			</div>
			<div class="agileinfo_copy_right_right">
				<ul class="social">
					<li><a class="social-linkedin" href="#">
						<i></i>
						<div class="tooltip"><span>Facebook</span></div>
						</a></li>
					<li><a class="social-twitter" href="#">
						<i></i>
						<div class="tooltip"><span>Twitter</span></div>
						</a></li>
					<li><a class="social-google" href="#">
						<i></i>
						<div class="tooltip"><span>Google+</span></div>
						</a></li>
					<li><a class="social-facebook" href="#">
						<i></i>
						<div class="tooltip"><span>Pinterest</span></div>
						</a></li>
					<li><a class="social-instagram" href="#">
						<i></i>
						<div class="tooltip"><span>Instagram</span></div>
						</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
	</div>
	<!--/footer-->
	
</div>
</div>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
