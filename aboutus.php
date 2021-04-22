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
		
		<link rel="stylesheet" href="css/style2.css" type="text/css">

    </head>

<?php
    require 'header.php';
 ?>
 <div style="padding:20px; margin:20px">
 <div style="margin-left:20px">
 <h4>About Us</h4>
 <p>We make real bread from the best organic ingredients – by hand, with dedication and with the best of care. <br> Opening hours are: 7am to 4 pm 7 days a week.</p>
 </div>
	<div id="joblist" style="padding:20px">
		<h3 style="text-decoration:underline">Current Job Openings at Luca's Loaves:</h3>
		<br>
		
		<div class="jobtitle">	
			<h4>Kitchenhand</h4>
			<p>Experienced kitchenhand who has fast-paced working ability needed for our bakery.</p> <br>
			<button style="height:30px; width:100px; background-color:grey; margin-top:-25px"><a href="contactus.php" style="color:white">Apply</a></button>
		</div>
		<br>
		<!--
		<div class="jobtitle">	
			<h4>Baker</h4>
			<p>Experienced baker who has varities of bread baking ability needed for our bakery.</p> <br>
			<button style="height:30px; width:100px; background-color:grey; margin-top:-25px"><a href="contactus.php" style="color:white">Apply</a></button>
		</div>
		-->
		
	
	</div>
</div>

	
<?php
require 'footer.php';

?>
	
</html>