<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/logo.png" />
        <title>Luca's Loaves</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
		
		<link rel="stylesheet" href="style2.css" type="text/css">
		
		
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
		   
		   
		   
           
               
           
		   
		   
		   
		   <!--
		   <div id="body-carousel">
				<div class="mySlides fade">
				  <img src="img/banner1.jpg" alt="Bread Making Courses">
				  <button><a>Book Now</a></button>
				</div>

				<div class="mySlides fade">
				  <img src="img/banner2.jpg"  alt="Discounted Breads">
				  <button></a>Buy Now</a></button>
				</div>

				<div class="mySlides fade">
				  <img src="img/intro-bg_1.jpg" alt="Luca's Organic Bread">
				  <button><a>Learn More</a></button>
				</div>
				
				<br>
				<div style="text-align:center">
				  <span class="dot"></span> 
				  <span class="dot"></span> 
				  <span class="dot"></span> 
				</div>
		   
			</div>
			-->
			
			
			<img src="img/banner4.jpg" style="width:100%"; style="padding:20px">
			
                   <center style="margin-top:-300px; border:3px solid white">
                   
                       <h1>Hurry Up!</h1>
                       <p>10% OFF on all our couses till Easter.</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
             
                   </center>
             
		    <div style="padding:20px; text-align:center; margin-top:300px">
			<h3>Our Products</h3>
			</div>
			<div class="container">
			   <div class="row">
				   <div class="col-md-3 col-sm-6">
					   <div  class="thumbnail">
						   <a href="products.php">
								<img src="img/whitesourdough.jpg" style="height:200px" style="width:400px" alt="Breads">
						   </a>
						   <center>
								<div class="caption">
										<p id="autoResize">Breads</p>
										<p>Choose among the best bread from around world.</p>
								</div>
						   </center>
					   </div>
				   </div>
				   <div class="col-md-3 col-sm-6">
					   <div class="thumbnail">
						   <a href="products.php">
							   <img src="img/chocolate.jpg" style="height:200px" style="width:400px" alt="Cakes & Sweets">
						   </a>
						   <center>
								<div class="caption">
									<p id="autoResize">Cakes & Sweets</p>
									<p>Cake from the best ingredients.</p>
								</div>
						   </center>
					   </div>
				   </div>
				   <div class="col-md-3 col-sm-6">
					   <div class="thumbnail">
						   <a href="products.php">
							   <img src="img/cherrypuff.jpg" style="height:200px" style="width:400px" alt="Savoury">
						   </a>
						   <center>
							   <div class="caption">
								   <p id="autoResize">Savoury</p>
								   <p>Our sweetest delights.</p>
							   </div>
						   </center>
					   </div>
				   </div>
				   <div class="col-md-3 col-sm-6">
					   <div class="thumbnail">
						   <a href="products.php">
							   <img src="img/cinnamonroll.jpg" style="height:200px" style="width:400px" alt="Pastry">
						   </a>
						   <center>
							   <div class="caption">
								   <p id="autoResize">Pastries</p>
								   <p>Our exquisite collection of pastry.</p>
							   </div>
						   </center>
					   </div>
				   </div>
				  
			   </div>
		    </div>
			
			
			
		    <style>
		    body {font-family: Arial, Helvetica, sans-serif;}

			form {
			border: 3px solid #f1f1f1;
			font-family: Arial;
			}

			.container {
			padding: 20px;
			background-color: #f1f1f1;
			}

			input[type=text], input[type=submit] {
			width: 100%;
			padding: 12px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
			}

			input[type=submit] {
			background-color: #4CAF50;
			color: white;
			border: none;
			}

			input[type=submit]:hover {
			opacity: 0.8;
			}
		   </style>
		   <form action="/action_page.php">
				<div class="container">
					<h2>Subscribe to our Newsletter</h2>
					<p>Sign up to hear about out offers and latest products.</p>
				</div>

				<div class="container" style="background-color:white">
					<input type="text" placeholder="Email address" name="mail" required>
				</div>

				<div class="container">
					<input type="submit" value="Subscribe">
				</div>
			</form>
		   
		   
		   
		   <div id="map-box">
					<div id="map">
					<center><h2>Our Location</h2></center>
					</div>
					<iframe width="99%" height="700" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=1000&amp;height=415&amp;hl=en&amp;q=24%20Noremac%20Grove,%20Lyndhurst,%20Melbourne,%20Victoria,%203975%20Lyndhurst+(Luca's%20Loaves%20by%20SCM1719%20-%20Sujan%20Shrestha)&amp;t=&amp;z=9&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='https://embedmaps.net'>google maps widget</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=7eddc567d97b9dbfd6b5c8a58675a9b24404f834'></script>
				</div>
            <br><br> <br><br><br><br>
           <?php
		   
		   require 'footer.php';
		   ?>
        </div>
    </body>
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
	</script>
</html>