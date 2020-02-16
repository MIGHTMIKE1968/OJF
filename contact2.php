<?php

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact Us</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://use.fontawesome.com/fb1c328b44.js"></script>
<link rel="stylesheet" type="text/css" href="css/contact2.css">
<link href="https://fonts.googleapis.com/css?family=Alex+Brush|Droid+Serif|Great+Vibes|Source+Sans+Pro" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
	<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a href="index.html" class="navbar-brand"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
		</div>
	<div class="collapse navbar-collapse" id="bs-nav-demo">
		 <ul class="nav navbar-nav">
        	<li ><a href="about3.html">About Us</a></li>
        	<li><a href="services3.html">Services</a></li>
        	<li><a href="preeneed3.html">Preneed</a></li>
        	<li><a href="cremation2.html">Cremation</a></li>
        	<li><a href="funerals.html">Funerals</a></li>
        	<li class="dropdown">
          		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consumer Info <span class="caret"></span></a>
          		<ul class="dropdown-menu">
            		<li><a href="caskets2.html">Caskets</a></li>
            		<li><a href="cemeteries2.html">Cemeteries</a></li>
					<li><a href="flowers2.html">Flowers</a></li>
            		<li><a href="headstones2.html">Headstones</a></li>
                    <li><a href="grief.html">Grief Assistance</a></li>
                    <li><a href="community.html">Community Bulletin Board</a></li>
                    <li><a href="videos.html">Videos</a></li>
          		</ul>
        	</li>
      	</ul>
      	<ul class="nav navbar-nav navbar-right">
        	<li><a href="contact2.php"><i class="fa fa-envelope envelope" aria-hidden="true"></i> &nbsp;Contact Us</a></li>
        </ul>		
	</div>
	</div>		
</nav>

<div class="container">
	
	<div>
		<h1><span class="letter">C</span>ontact Us</h1>
	</div>
</div>
         			
<div class="container">
			
	<div class="row" id="urn">
	
		<div>
			<h2 class="heads"><strong>OFFICE</strong></h2>
			<h3><strong>3619 Finney Avenue @ North Grand Boulevard • St. Louis, MO 63113</strong></h3><br>
      		
      		<h2 class="heads"><strong>GENERAL OFFICE HOURS</strong></h2>
			<h3><strong>Monday - Friday • 8:30 AM - 6:30 PM</strong></h3>
			<?php include("store-hours2.php"); ?>
			<h3>
				<p><span class="slant">tel. </span><strong>1.314.652.3305</strong> • <span class="slant">fax.</span> <strong>1.314.652.3309</strong> • <span class="slant">cell.</span> <strong>1.314.719.9643</strong> • <span class="slant">email. </span><a href="mailto:info@ozellajfosterfh.com">info@ozellajfosterfh.com</a></p>
			</h3><br>
		</div>
	
		<div><h2 class="heads"><strong>OUR STAFF</strong></h2></div>
		
		<div class="col-lg-6 col-sm-6">
			<h3>
				<p><strong>Ozella J. Foster-Robinson</strong></p>
          		<p class="title">Founder - C.E.O.</p>
           	</h3><br>
           		
           	<h3>
				<p><strong>LaNelle M. Jones-Jackson</strong></p>
          		<p class="title">President</p>
           	</h3><br>
           		
           	<h3>
				<p><strong>Christopher R. Jones</strong></p>
          		<p class="title">Vice President</p>
           	</h3><br>
           		
           	<h3>
				<p><strong>Thomas Foster, Sr.</strong></p>
          		<p class="title">Building Manager</p>
           	</h3><br>
           		
           	<h3>
				<p><strong>Reverend William Johnson, Sr.</strong></p>
          		<p class="title">Ministerial Staff</p>
           	</h3><br>
           		
           	<h3>
				<p><strong>Henry L. Duckworth</strong></p>
          		<p class="title">Licensed Funeral Director</p>
           	</h3><br>
		</div>
		
		<div class="col-lg-6 col-sm-6">
			<h3>
				<p><strong>Samuel Farmer</strong></p>
          		<p class="title">Licensed Funeral Director</p>
           	</h3><br>
           		
           	<h3>
				<p><strong>Al Yokley</strong></p>
          		<p class="title">Transportation</p>
           	</h3><br>
           		
           	<h3>
				<p><strong>William Foster, Sr.</strong></p>
          		<p class="title">Staff Representative</p>
           	</h3><br>
           		
           	<h3>
				<p><strong>Ronald Kelly</strong></p>
          		<p class="title">Staff Representative</p>
           	</h3><br>
           		
           	<h3>
				<p><strong>Michael Johnson</strong></p>
          		<p class="title">Minister Of Music</p>
           	</h3><br>
           		
           	<h3>
				<p><strong>Maria A. Jones</strong></p>
          		<p class="title">Cosmetologist - "Hair By Pumpkin"</p>
           	</h3><br>
		</div>
		
		
		</div>
	
	
	<div id="contact" class="container">
			
			<h1>Reach Out to Us!</h1>
		  
			
			<?php
			
			// Check for header injections
			function has_header_injection($str) {
				return preg_match( "/[\r\n]/", $str );
			}
		
			if(isset($_POST["contact_submit"])) {
				
				$name = trim($_POST["name"]);
				$email = trim($_POST["email"]);
				$msg = $_POST["message"];
				
				// Check to see if $name or $email have header injections
				if (has_header_injection($name) || has_header_injection($email)) {
					die(); // If true, kill the script
				}
				
				if( !$name || !$email || !$msg ) {
					
					echo '<h4 class="error">All fields required.</h4><a href="contact.php" class="\">Go back and try again</a>';
					exit;
					
				}
				
				// Add the recipient email to a variable
				$to = "info@ozellajfosterfh.net";
				
				// Create a subjext
				$subject = "$name sent you a message via your contact form";
				
				// Construct the message
				$message .= "Name: $name\r\n";
				$message .= "Email: $email\r\n\r\n";
				$message .= "Message:\r\n$msg";
				
				// If the subscribe checkbox was checked...
				if(isset($_POST["subscribe"]) && $_POST["subscribe"] == "Subscribe") {
					
					// Add a new line to the $message
					$message .= "\r\n\r\nPlease add $email to the mailing list.\r\n";
					
				}
				
				$message = wordwrap($message, 75);
				
				// Set the mail headers 
				$headers  = "MIME-Version: 1.0\r\n";
				$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
				$headers .= "From: " . $name . " <" . $email . ">\r\n";
				$headers .= "X-Priority: 1\r\n";
				$headers .= "X-MSMail-Priority: High\r\n\r\n";
				
				// Send the email!
				mail( $to, $subject, $message, $headers );

			?>
			
			<!-- Show success message after email has sent -->
		<h5>Thanks for contacting Ozella J. Foster</h5>
		<p>Please allow 24 hours for a response.</p>
		<p><a href="index.html" class="button block">&laquo; Go To Home Page</a></p>
		
		<?php 
			} else { 
		?>
		
        
		<form method="post" action="" id="contact-form">
			
			<label for="name">Your Name</label>
			<input type="text" id="name" name="name">
			
			<label for="email">Your Email</label>
			<input type="email" id="email" name="email">
			
			<label for="message">Your Message</label>
			<textarea id="message" name="message"></textarea>
			
			<input type="submit" class="button next" name="contact_submit" value="Send Message">
			
		</form>
        
		
		<?php } ?>
		
	</div><!-- contact -->
		
		
		<div class="container">
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3116.1866069981065!2d-90.23155654910819!3d38.64458937951027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87d8b4af2948a9e7%3A0x1182696ad805d803!2s3619+Finney+Ave%2C+St.+Louis%2C+MO+63113!5e0!3m2!1sen!2sus!4v1505759085614" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>

</div>



<div class="container social">
	<h4><a href="https://www.facebook.com/ozellajfosterfh/"><img class="social2 hvr-float" src="img/black fb logo.png" width="50px" height="auto" alt="facebook"/></a>
	<a href="https://twitter.com/OJFfunerals"><img class="social2 hvr-float" src="img/black twitter logo copy.png" width="50" height="auto" alt="twitter"/></a>
	<a href="https://www.youtube.com/channel/UCF3EhB6YlE4w-fx0L50TNRA"><img class="social2 hvr-float" src="img/black yt logo.png" width="50px" height="auto" alt="youtube"/></a></h4>										  
</div>

<footer id="the_footer">
	<div class="container">

	<br><h5>3619 Finney Avenue&nbsp;&nbsp;<span class="bullet">•</span>&nbsp;&nbsp;Saint Louis, Missouri 63113&nbsp;&nbsp;<span class="bullet">•</span>&nbsp;&nbsp;<span class="it">tel.</span> 314.652.3305</h5>
<h5>Copyright © 2016, Ozella J. Foster Services for Funerals. All Rights Reserved.</h5><br>
		<h6 class="sonic">Web Design by Sonicpress</h6><br>
		<h5><i class="fa fa-arrow-up" aria-hidden="true"></i>
		<p class="arrow"><a href="#ozella">Back To Top</a></p>
		</h5>	
	</div>
</footer>


<script   src="https://code.jquery.com/jquery-3.1.1.js"   integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="   crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
