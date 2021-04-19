<!DOCTYPE html>
<html lang="en">
<head>

<?php

$servername = "localhost";
$username = "BaseUser";
$password = "";
$dbname = "davidsonrentalsdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Make, Model, Year, Mileage, price FROM car_info WHERE Account_ID ='1'";

$result = $conn->query($sql);


if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {

$Make =$row["Make"];
$Model =$row["Model"];
$Year =$row["Year"];
$Mileage =$row["Mileage"];
$price =$row["price"];
}
} else {
echo "Please Complete Profile Page";
}


$conn->close();
?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Davidson Auto Rentals</title>
    <link rel="stylesheet" href="style.css" />
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
    		<a href="index.html" id="navbar__logo"> <i class="fas fa-car-side"></i> &nbsp; Davidson Rentals</a>
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
				<li class="navbar_signup"></li>
				<a href="../IST421Integration-main/signup.html" class="button"> Rent Car</a>
				&nbsp&nbsp
				<a href="../IST421Integration-main/signup.html" class="button">Buy Car</a>
				</li>
			</li>
		</ul>
	</div>	
    </nav>

	 <!-- Hero Section  -->
	 <div class="main" >
		 <div class="main__container">
			 <div class="main__content">
				 <h1>Davidson Auto Rentals</h1>
				 <h2>Collection of thousands comfortable cars</h2>
				 <p>See what makes us different.</p>
				 <button class="main__btn"><a href="index.html">Get started</a></button>
			 </div>
			 <div class="name_img--container">
				 <img src="../IST421Integration-main/images/muscle car backgrounds for desktop wallpaper.jpg" alt="pic" id="main__img">
		 </div>
	 </div>

	  <!-- services section
	  -->
	  <div class="search">
	  <form action="newCar.php" method="post">
		<div class="form-box">
			<input type="text" class="search-field business" placeholder="Car make">Make </input>
			<input type="text" class="search-field location" placeholder="Car model">Model</input>
			<input type="text" class="search-field business" placeholder="Car year">Year</input>
			<input type="text" class="search-field location" placeholder="Car mileage">Mileage</input>
			<input type="text" class="search-field business" placeholder="Car price">Price</input>

			<button class="search-btn" type="submit"> Search </button>
		</div>
		</form>
	</div>




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
					<a href="/">to join our team, send us your resume on careers@davidsonrentals.com</a>


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
