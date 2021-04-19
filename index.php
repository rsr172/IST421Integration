<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign and drive | Davidson</title>
    <link rel="stylesheet" href="../DavidsonCarRental/Style.css" />
	<link rel="stylesheet" href="../DavidsonCarRental/signup_css.css"/>
	 <link rel="preconnect" href="https://fonts.gstatic.com">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" >
	 <link rel="preconnect" href="https://fonts.gstatic.com">
	 <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" 
	 rel="stylesheet">
</head>

<body>
	<!--navbar section-->
    <nav class="navbar">
    	<div class="navbar__container">
    		<a href="../DavidsonCarRental/index.html" id="navbar__logo"> <i class="fas fa-car-side"></i> &nbsp; Davidson Rentals</a>
    		<div class="navbar__toggle" id="mobile-menu">
    		  <span class="bar"></span>
           <span class="bar"></span>
           <span class="bar"></span>
		</div>
		<ul class="navbar__menu">
			<!--<li class="navbar__item">
				<a href="index.html" class="navbar__links">Home</a>
			</li>
			 <li class="navbar__item">
				<a href="tech.html" class="navbar__links">Tech</a>
			</li> 
			 <li class="navbar__item">
				<a href="" class="navbar__links">Products</a>
			</li> -->
			<li class="navbar__btn">
				<a href="index.php" class="button">Sign-up and drive </a>
			</li>
		</ul>
	</div>	
    </nav>

	 <!-- Form Section -->
	 <form action="insert.php" method="post" style="border:1px solid #ccc">
	   <div class="container">
		 <h1>Sign Up</h1>
		 <p>Please, fill in this form to create a new account:</p>
		 <hr>

		 <label for="firstname"><b>First Name</b></label>
		 <input type="text" id="firstname" name="firstname" required><br>

		 <label for="lastname"><b>Last Name</b></label>
		 <input type="text" id="lastname" name="lastname" required><br>

		 <label for="phone"><b>Phone Number</b></label>
		 <input type="text" id="phone" name="phone" required><br>

		 <label for="email"><b>Email</b></label>
		 <input type="text" id="email"  name="email" required><br>
	 
		 <label for="psw"><b>Password</b></label>
		 <input type="password" id="psw" name="psw" required><br>
		 
		 <label>
		   <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
		 </label>
		 
		 <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
	 
		 <div class="clearfix">
		   <button type="submit" class="signupbtn">Sign Up</button>
		 </div>
	   </div>
	 </form>
	 

	  <!-- Footer section -->
	  <div class="footer__container">
		  <div class="footer__links">
			  <div class="footer__link--wrapper">
				  <div class="footer__link--items">
					<h2>About Us</h2>
					  <a href="/">Davidson car rentals is the best car rental in Philadelphia, PA.</a>
					  <a href="/">We're on a mission to enable simple and responsible urban living—a future filled with more car-sharing members than car owners in major cities across the globe.</a>

				  </div>
				  <div class="footer__link--items">
					<h2>Contact Us</h2>
					<a href="/">If you would like to get in contact with us, please do not hesitate to email us @DavidsonCarRental.com.</a>
					<a href="/">Or give us a call at our main office location in Philadelphia, PA 1-800-673-4367.</a>

				</div>
			  </div>
			  <div class="footer__link--wrapper">
				<div class="footer__link--items">
					<h2>Careers with Us</h2>
					<a href="/">If you would like to join the DavidsonCarRental Team, simply click this link to our careers page. https://www.DavidsonCarRental@hire.com</a>
					<a href="/">Learn about all the different opportunities that the company has to offer.</a>
					<a href="/">Careers</a>

				</div>
				<div class="footer__link--items">
					<h2>More about Us</h2>
					<a href="/">Want to know more about DavidsonAuto?</a>
					<a href="/">Locally, we help urbanites get around with more convenience, less traffic, and on-demand access to vehicles right in their neighborhood.</a>
   

			 </div>
			</div>
		  </div>
		  <div class="social__media">
			  <div class="social__media--wrap">
				  <div class="footer__logo">
					  <a href="index.html" id="footer__logo"><i class="fas fa-car-side"></i>&nbsp; Davidson</a>
				  </div>
				  <p class="website__rights"> &nbsp&nbsp&nbsp DavidsonAuto 2021. All rights reserved &nbsp&nbsp&nbsp&nbsp&nbsp</p>
				  <div class="social__icon">
					  <a href="https://www.facebook.com/" class="social__icon--link" target ="_blank">
					<i class="fab fa-facebook"></i>
					</a>
					<a href="https://www.instagram.com/" class="social__icon--link" target ="_blank">
						<i class="fab fa-instagram"></i>
						</a>
					<a href="https://twitter.com/?lang=en" class="social__icon--link" target ="_blank">
						<i class="fab fa-twitter"></i>
						</a>
					<a href="https://www.youtube.com/" class="social__icon--link" target ="_blank">
						<i class="fab fa-youtube"></i>
						</a>
				  </div>
			  </div>
		  </div>
	  </div>
	 <script src="app.js" ></script>
</body>
</html>