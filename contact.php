<!DOCTYPE>
<?php
	include('form_handler.php');
?>


<html>
	<head>
		<link rel="stylesheet" type="text/css" href="resetstyle.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato:700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
		<title>Web Developer Portfolio, UI/UX Javacript Specialist</title>
		<meta name="description" content="Hello, Im Rhys Clark. I am a Freelance Front-End Web Developer specialising in UI/UX, come and have a look at my portfolio site.">
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
		<link rel="manifest" href="img/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>


	</head>
<!--NAVIGATION BAR-->
		<div id="web-content">
			<div id="nav-main">
				<div class="nav-wrapper">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="method.html">Method</a></li>
						<li><a href="portfolio.html">Portfolio</a></li>
						<li><a  style="color:#F33065;" href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="contact-wrapper">
				<div class="contact-info">
					<h2>Start a project</h2>
					<p>Spiders arent the only specialised web developers.<br>
					Please fill in the form below telling me what you want from me, please leave a phone number as it
				 is my preferred method of getting back in contact with you to discuss further with you on what you
			   would like.</p>
				</div>
			</div>
<!--FORM-->

			<div id="form-container">
				<div class="contact-left">
					<div class="social-contact">
						<h4>Follow Me On Social Media</h4>
						<div class="social-img">
							<a href="www.facebook.com/RhysClarkWebDev"><img src="imgsocial/facebook.png" alt="Facebook"></a>
							<a href="www.Instagram/ig.clxrk"><img src="imgsocial/instagram.png" alt="instagram"></a>
							<a href="www.Twitter.com/RhysClarkWebDev"><img src="imgsocial/twitter.png" alt="twitter"></a>
							<a href="www.github.com/RhysClarkWebDev"><img src="imgsocial/github.png" alt="github"></a>
						</div>
					</div>
					<div class="contact-address-contact">
						<h4>Mobile</h4>
						<p>07783557905</p>
						<h4>Email</h4>
						<p>WebDev@rhys-clark.com</p>
						<h4>Address</h4>
						<p>18 Rutland Road<br>
						Moorside<br>
						Consett<br>
						DH8 8EF</p>
					</div>
			</div>
				<div class="form-box">
					<form id="email-form" method="post" action="<?php $_SERVER['PHP_SELF']?>">
						<h2>CONTACT FORM</h2>
						<label for="email">Email</label>
						<input type="text" name="email" placeholder="Your Email Here" value="<?php echo $email;?>">
						<div class="error"><?php echo $email_error;?></div>

						<label for="text">What are your requirements?</label>
						<textarea name="message" rows="8" cols="80" placeholder="How many pages?"></textarea>
						<div class="error"><?php echo $message_error;?></div>
						<label for="budget">Budget</label>
						<div class="radio-section">
							<label for="£100-£200">£100-£200</label><input type="radio" name="budget" value="£100-£200" id="£100-£200">
							<label for="£200-£300">£200-£300</label><input type="radio" name="budget" value="£200-£300" id="£200-£300">
							<label for="£300-£400">£300-£400</label><input type="radio" name="budget" value="£300-£400" id="£300-£400">
							<label for="£400-£500">£400-£500</label><input type="radio" name="budget" value="£400-£500" id="£400-£500">
							<label for="£500+">£500+</label><input type="radio" name="budget" value="£500+" id="£500+">
							<div class="error"><?php echo $budget_error;?></div>
						</div>
						<div class="g-recaptcha" data-sitekey="6LcqM-4UAAAAACihMseWbgt0OPNQ2fZ93BEnGWem"></div><br>
						<div class="error"><?php echo $recaptcha_error;?></div>
						<button type="submit" name="submit">Submit</button>
						<div class="sent"><?php echo $success;?></div>
					</form>
				</div>
			</div>
<!--FOOTER-->
		<div id="footer">
			<div class="footwrap">
				<div class="footer-content">
					<div class="footer-grid">
						<div class="social">
							<h4>Follow Me On Social Media</h4>
							<div class="social-img">
								<a href="www.facebook.com/RhysClarkWebDev"><img src="imgsocial/facebook.png" alt="Facebook"></a>
								<a href="www.Instagram/ig.clxrk"><img src="imgsocial/instagram.png" alt="instagram"></a>
								<a href="www.Twitter.com/RhysClarkWebDev"><img src="imgsocial/twitter.png" alt="twitter"></a>
								<a href="www.github.com/RhysClarkWebDev"><img src="imgsocial/github.png" alt="github"></a>
							</div>
						</div>
						<div class="contact-address">
							<h4>Mobile</h4>
							<p>07783557905</p>
							<h4>Email</h4>
							<p>WebDev@rhys-clark.com</p>
							<h4>Address</h4>
							<p>18 Rutland Road<br>
							Moorside<br>
							Consett<br>
							DH8 8EF</p>
						</div>
						<div class="privacy">
							<p>©Rhys Clark Web Developer<br>All Rights Reserved.<a href="privacy.html">Privacy Policy</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>



	</body>

</html>
