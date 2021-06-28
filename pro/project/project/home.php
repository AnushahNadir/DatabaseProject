<?php
include("connect.php");

?>



<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
	<link rel="stylesheet" type="text/css" href="css/homestyle.css">
</head>
<body>
	<header>
		<h1 id="logo">Car Rental System</h1>
	</header>
	<nav>
	<ul>
		<li><a href="home.php"> HOME</a></li>
		<li><a href="login.php"> LOGIN</a></li>
		<li><a href="register.php"> REGISTER</a></li>
		<li><a href="aboutus.php"> ABOUT</a></li>
		<li><a href="contactus.php"> CONTACT US</a></li>
		
		
	</ul>
</nav>

<main>
	<div id = "banner"><img id = "b" src="images/logo.png"></div>
	<section>
		<h1 id="para">About Car Rental Services</h1>
		<p>
			Looking for a perfect rent a car in Pakistan? Want to rent luxury cars in Pakistan? You have come to the right place enjoys its unique prestige for being one of the leading car rentals of the country. No matter you are in Islamabad, Lahore, Karachi, or any other city here in this beautiful country, we offer you luxury car rentals with a premium quality against quite affordable rates.
</p>
<p>
	Whether your search is for the economy, executive, or luxury cars, Royal Car Rentals is a one-stop platform for all. Moreover, we also provide SUVs, Vans, and Buses for all kinds of events. Our chauffeur driven car platform is perfect for those who are looking for rent a car service in Islamabad, Rawalpindi, Lahore, Karachi, or any other city of Pakistan.
</p>
	</section>
	<section id="newly_added">
		<h1 id="car_disc">Newly Added Cars</h1>
		<article>
			<figure>
				<img src="images/bmw-img.jpg">
				<figcaption>BMW M3 2019</figcaption>
				<button><a href="bmw.php"> view details</a></button>
			</figure>
			<figure>
				<img src="images/mercedes.jpg">
				<figcaption>Mercedes Benz 2019</figcaption>
				<button><a href="mercedes.php"> view details</a></button>
			</figure>
			<figure>
				<img src="images/audi.jpg">
				<figcaption>Audi A8 2019</figcaption>
				<button><a href="audi.php"> view details</a></button>
			</figure>
			<FIGURE>
				<img src="images/v8.jpg">
				<figcaption>Toyotta Land Cruser 2019</figcaption>
				<button><a href="Cruser.php"> view details</a></button>
			</FIGURE>
		</article>
	</section>
</main>

<span id = "art">
	<span id="dt1">
		<dl>
			<dt>Affordable Prices</dt>
			<dd>Despite high quality services, you will find a budget rent a car service here. Its perfect platform for cheap rent a car at islamabad and other cities.</dd>
		</dl>
	</span>
	<span id="dt2">
		<dl>
			<dt>24/7 Customer Care</dt>
			<dd>No matter which city you are contacting from, we are here to provide: best customer care service from dawn to dusk and vice versa.</dd>
		</dl>
	</span>
</span>

<footer>
	Copyright &copy RentACar.pk All Right Reserved.
</footer>

</body>
</html>