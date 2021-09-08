<!DOCTYPE>
<?php
	include('form_handler.php');
?>


<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/resetstyle.css?version=#">
		<link rel="stylesheet" type="text/css" href="css/style.css?version=1.2">
		<link rel="stylesheet" type="text/css" href="css/preloader.css?version=1.12">

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

		<link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato:700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
		<title>Contact - Web Developer Portfolio, UI/UX Javascript Specialist</title>
		<meta name="description" content="Contact me on a Web Development project, i specialise in an array of different languages.">
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">


		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/preloader.js"></script>

	</head>


	<body>



		<div id="particles-js"></div>
		<script type="text/javascript" src="js/particles.min.js"></script>
		<script type="text/javascript" src="js/customParticles.js"></script>

		<!--MOBILE HAMBURGER MENU-->
		<div class="hamburger-menu-container"id="hamburger-menu-container">
			<div class="hamburger-menu">
				<p>Menu</p>
					<div class="hamburger"id="openmenu">
						<svg height="384pt" viewBox="0 -53 384 384" width="384pt" xmlns="http://www.w3.org/2000/svg"><path d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0" class="white"/><path d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0" class="white"/><path d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 	16-16zm0 0" class="white"/></svg>
					</div>
			</div>
		</div>


		<!--HAMBURGER NAVIGATION FULL SCREEN MENU-->
		<div class="hamburger-fullscreen-container" id="hamburger-fullscreen-container">
			<div class="hamburger"id="closemenu">
				<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 343.52 343.52"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M356.68,49.06,48.05,355.8c-7.75,7.69-18.67,9.27-24.4,3.51s-4.08-16.68,3.67-24.37L336,28.2c7.75-7.69,18.67-9.27,24.4-3.51S364.43,41.37,356.68,49.06Z" transform="translate(-20.24 -20.24)"/><path class="cls-1" d="M334.94,356.68,28.2,48.05c-7.69-7.75-9.27-18.67-3.51-24.4s16.68-4.08,24.37,3.67L355.8,336c7.69,7.75,9.27,18.67,3.51,24.4S342.63,364.43,334.94,356.68Z" transform="translate(-20.24 -20.24)"/></svg>
			</div>


			<div class="hamburger-navigation">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="method.php">Method</a></li>
					<!-- <li><a href="portfolio.php">Portfolio</a></li> -->
					<li><a href="contact.php">Contact</a></li>
					<li><a href="pricing.php">Pricing</a></li>
				</ul>
			</div>
		</div>

			<div id="web-content">
				<div class="contact-wrapper">
					<div class="contact-info">
						<h2>Start a project</h2>
						<p style="margin: 15px 0px;">Spiders arent the only specialised web developers.</p>
						<p>Please fill in the below form giving me as much detail as you can about your project; please include:<br>
							 Page Quantity, Your Business Type, Budget, Preferred Method of Contact, Do You have content? (Images, Logo & Text)<br>
						 	I look forward for our future project together.</p>
					</div>
				</div>
	<!--FORM-->

				<div id="form-container">
					<div class="contact-left">
						<div class="footer-content">
							<div class="footer-emailnumber">
								<div class="footer-contact">
									<p style="line-height: 1.2">&nbsp;webdev@rhys-clark.com</p>
									<h3>Email -</h3>
								</div>
								<div class="footer-contact">
									<p style="line-height: 1.2">&nbsp;077835&zwj;57905</p>
									<h3>Mobile -</h3>
								</div>
							</div>
							<div class="footer-links">
								<div class="footer-contact">
									<a href="https://facebook.com/RhysClarkWebDev">
										<p>Facebook</p>
										<img src="imgsocial/facebook.png" alt="Facebook Social Image">
									</a>
								</div>
								<div class="footer-contact">
									<a href="https://Instagram.com/RhysClarkWebDev">
										<p>Instagram</p>
										<img src="imgsocial/instagram.png" alt="Instagram Social Image">
									</a>
								</div>
								<div class="footer-contact">
									<a href="https://github.com/RhysClarkWebDev">
										<p>Github</p>
										<img src="imgsocial/github.png" alt="Github Social Image">
									</a>
								</div>
								<div class="footer-contact">
									<a href="https://www.linkedin.com/in/rhysclarkwebdev">
										<p>LinkedIn</p>
										<img src="imgsocial/LinkedIn.png" alt="LinkedIn Social Image">
									</a>
								</div>
							</div>
							<div class="footerCopyright">
								<p>© Rhys Clark Web Developer</p>
							</div>
						</div>
				</div>
					<div class="form-box">
						<form id="email-form" method="post" action="<?php $_SERVER['PHP_SELF']?>">
							<h2>CONTACT</h2>
							<label for="email">Email</label>
							<input type="text" name="email" placeholder="Your Email Here" value="<?php echo $email;?>">
							<div class="error"><?php echo $email_error;?></div>

							<label for="text">What are your requirements?</label>
							<textarea name="message" rows="8" cols="80" placeholder="How many pages?"></textarea>
							<div class="error"><?php echo $message_error;?></div>
							<label for="budget" class="budget-label">Budget</label>

							<!--
							<div class="radio-section">
								<div class="£500-£750 radio-flex">
									<label for="£500-£750">£500-£750</label><input type="radio" name="budget" value="£500-£750" id="£500-£750">
								</div>
								<div class="£750-£1000 radio-flex">
									<label for="£750-£1000">£750-£1000</label><input type="radio" name="budget" value="£750-£1000" id="£750-£1000">
								</div>

								<div class="£1000-£1500 radio-flex">
									<label for="£1000-£1500">£1000-£1500</label><input type="radio" name="budget" value="£1000-£1500" id="£1000-£1500">
								</div>

								<div class="£1500-£2000 radio-flex">
									<label for="£1500-£2000">£1500-£2000</label><input type="radio" name="budget" value="£1500-£2000" id="£1500-£2000">
								</div>

								<div class="£2000+ radio-flex">
									<label for="£2000+">£2000+</label><input type="radio" name="budget" value="£2000+" id="£2000+">
								</div>

								<div class="error"><?php echo $budget_error;?></div>
							</div> -->

							<input type="text" name="budget" value="<?php echo $budget;?>" placeholder="Budget?">


							<div class="g-recaptcha" data-sitekey="6LcqM-4UAAAAACihMseWbgt0OPNQ2fZ93BEnGWem"data-size="compact"></div><br>
							<div class="error"><?php echo $recaptcha_error;?></div>
							<button type="submit" name="submit">Submit</button>


							<div class="sent">
									<p><?php echo $success;?></p>
							</div>


						</form>
					</div>
				</div>
				<!--FOOTER-->
						<footer id="footer-contact">
							<div class="footer-wrapper">
								<div class="footer-content">
									<div class="footer-emailnumber">
										<div class="footer-contact">
											<p style="line-height: 1.2">&nbsp;webdev@rhys-clark.com</p>
											<h3>Email -</h3>
										</div>
										<div class="footer-contact">
											<p style="line-height: 1.2">&nbsp;077835&zwj;57905</p>
											<h3>Mobile -</h3>
										</div>
									</div>
									<div class="footer-links">
										<div class="footer-contact">
											<a href="https://facebook.com/RhysClarkWebDev">
												<p>Facebook</p>
												<img src="imgsocial/facebook.png" alt="Facebook Social Image">
											</a>
										</div>
										<div class="footer-contact">
											<a href="https://Instagram.com/RhysClarkWebDev">
												<p>Instagram</p>
												<img src="imgsocial/instagram.png" alt="Instagram Social Image">
											</a>
										</div>
										<div class="footer-contact">
											<a href="https://github.com/RhysClarkWebDev">
												<p>Github</p>
												<img src="imgsocial/github.png" alt="Github Social Image">
											</a>
										</div>
										<div class="footer-contact">
											<a href="https://www.linkedin.com/in/rhysclarkwebdev">
												<p>LinkedIn</p>
												<img src="imgsocial/LinkedIn.png" alt="LinkedIn Social Image">
											</a>
										</div>
									</div>
									<div class="footerCopyright">
										<p>© Rhys Clark Web Developer</p>
									</div>
								</div>
							</div>
						</footer>


		<script type="text/javascript" src="js/master.js?version=1.1"></script>
	</body>

</html>
