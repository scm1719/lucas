<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
		<link rel="shortcut icon" href="img/logo.png" />
        <title>Luca's Loaves</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap 3 Contact Form - reusable form</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
		 <link rel="stylesheet" href="css/style.css" type="text/css">
		
		<link rel="stylesheet" href="css/style2.css" type="text/css">
    </head>

<?php
    require 'header.php';
 ?>
		   
<div class="container">
	<div class="row">
		<div class="col-md-6 " id="form_container">
			<h2>Contact Us</h2> 
			<p> Please send your message below. We will get back to you at the earliest! </p>
			<form role="form" method="post" id="reused_form">
				<div class="row">
					<div class="col-sm-12 form-group">
						<label for="message"> Message:</label>
						<textarea class="form-control" type="textarea" id="message" name="message" maxlength="6000" rows="7"></textarea>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 form-group">
						<label for="name"> Your Name:</label>
						<input type="text" class="form-control" id="name" name="name" required>
					</div>
					<div class="col-sm-6 form-group">
						<label for="email"> Email:</label>
						<input type="email" class="form-control" id="email" name="email" required>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 form-group">
						<button type="submit" class="btn btn-lg btn-default pull-right" >Send &rarr;</button>
					</div>
				</div>
			</form>
			<div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Posted your message successfully!</h3> </div>
			<div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
		</div>
	</div>
	
	<style>
		iframe{
			float:right;
			margin-top:-400px;
			padding:20px;
			margin-left:20px;
			margin-bottom:200px;
			
		}
	</style>
	
	<iframe width="50%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=1000&amp;height=415&amp;hl=en&amp;q=24%20Noremac%20Grove,%20Lyndhurst,%20Melbourne,%20Victoria,%203975%20Lyndhurst+(Luca's%20Loaves%20by%20SCM1719%20-%20Sujan%20Shrestha)&amp;t=&amp;z=9&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='https://embedmaps.net'>google maps widget</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=7eddc567d97b9dbfd6b5c8a58675a9b24404f834'></script>
	
	
	<?php
	require 'footer.php';
	?>