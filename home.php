<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Luca's Loaves - SCM1719</title>
<meta name="description" content="Luca's Loaves is the authentic bread maker in all of Australia. Making bread taste better since 2021.">
<link rel="stylesheet" type="text/css" href="style2.css">

</head>
<body>
	<div id="main">

		<div id="nav-box">
			<a href="index.php"><img id="logo" src="images/logo.png" alt="luca's bakery logo"></img></a>
			<div id="checkout-bar">
				<ul>
					<li><a href="mycart.php">My Cart</a></li>
					<li><a href="checkout.php">Checkout</a></li>
					<li><a href="login.php">Login</a></li>
					<li><p id="slash">/</li>
					<li><a href="createaccount.php" id="createaccountpage">Create an account</a></li>
				</ul>
			</div>
			<div id="nav-bar">
				<ul>
					<li><a href="products.php" class="dropbtn">Products</a>					
						<ul>
							<li><a href="breads.php">Breads</a></li>									
							<li><a href="cakes.php">Cakes & Sweets</a></li>
							<li><a href="savoury.php">Savoury</a></li>
							<li><a href="pastries.php">Pastries</a></li>
						</ul>
					</li>															
					<li><a href="courses.php" class="dropbtn">Courses</a>
						<ul>
							<li><a href="apprenticeship.php">Apprenticeship</a></li>									
							<li><a href="internship.php">Internship</a></li>
							<li><a href="basicbaking.php">Basic Baking</a></li>
							<li><a href="management.php">Management</a></li>
						</ul>
					</li>	
					<li><a href="aboutus.php" class="dropbtn">About Us</a></li>
						<ul>
							<li><a href="theteam.php">The Team</a></li>									
							<li><a href="gallery.php">Gallery</a></li>
							<li><a href="sitemap.php">Site Map</a></li>
						</ul>				
					<li><a href="careers.php">Careers</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>	
			</div>
		</div>
	
		<div id="body-carousel">
			<div class="mySlides fade">
			  <img src="images/banner1.jpg" alt="Bread Making Courses">
			  <button><a>Book Now</a></button>
			</div>

			<div class="mySlides fade">
			  <img src="images/banner2.jpg"  alt="Discounted Breads">
			  <button></a>Buy Now</a></button>
			</div>

			<div class="mySlides fade">
			  <img src="images/banner3.jpg" alt="Luca's Organic Bread">
			  <button><a>Learn More</a></button>
			</div>
			
			<br>
			<div style="text-align:center">
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			</div>
		
		<div id="map-box">
			<div id="map">
			<p>Our Location<p>
			</div>
			<iframe width="1800" height="415" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=1000&amp;height=415&amp;hl=en&amp;q=24%20Noremac%20Grove,%20Lyndhurst,%20Melbourne,%20Victoria,%203975%20Lyndhurst+(Luca's%20Loaves%20by%20SCM1719%20-%20Sujan%20Shrestha)&amp;t=&amp;z=9&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='https://embedmaps.net'>google maps widget</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=7eddc567d97b9dbfd6b5c8a58675a9b24404f834'></script>
		</div>
	</div>
</body>



<section id="footer-bar">
	<div class="row">
		<div class="span3">
			<h4>Navigation</h4>
			<ul class="nav">
				<li><a href="index.php">Homepage</a></li>  
				<li><a href="aboutus.php">About Us</a></li>
				<li><a href="contactus.php">Contact Us</a></li>
				<li><a href="mycart.php">Your Cart</a></li>
				<li><a href="login.php">Login</a></li>							
			</ul>					
		</div>
		<div class="span4">
			<h4>My Account</h4>
			<ul class="nav">
				<li><a href="#">My Account</a></li>
				<li><a href="#">Order History</a></li>
				<li><a href="#">Wish List</a></li>
				<li><a href="#">Newsletter</a></li>
			</ul>
		</div>
	</div>	
	<div class="span5">
		<p class="logo"><img src="images/logo.png" class="site_logo" alt=""></p>
		<p>Luca's Loaves is a renowned bakery of hospitality industry. It has been the industry ever since the authenticity on bread making has been missing.</p>
		<br/>
		<span class="social_icons">
			<a class="facebook" href="#">Facebook</a>
			<a class="twitter" href="#">Twitter</a>
			<a class="skype" href="#">Skype</a>
			<a class="vimeo" href="#">Vimeo</a>
		</span>
	</div>					
	
</section>
<section id="copyright">
	<span>Copyright 2020 - SCM1719 - Sujan Shrestha.  All right reserved.</span>
</section>






<!--javascript from here -->




<script>
	/*body carousel javascript starts here*/
	var slideIndex = 0;
	showSlides();

	function showSlides() {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("dot");
	  for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";  
	  }
	  slideIndex++;
	  if (slideIndex > slides.length) {slideIndex = 1}    
	  for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	  setTimeout(showSlides, 2500); // Change image every 2 seconds
	}
	
	/*dropdown javascript starts here*/
</script>

	
	










</html>