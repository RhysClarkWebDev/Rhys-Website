<!DOCTYPE>
<?php
	include('form_handler.php');
?>


<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/resetstyle.css?version=#">
		<link rel="stylesheet" type="text/css" href="css/style.css?version=1.31">
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
		<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
		<title>Contact | Rhys Clark Web Designer & Developer</title>
		<meta name="description" content="Contact me regarding a Web Development project. Creative web designer, North East. E-commerce store design and development available.">
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">


		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/preloader.js"></script>
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-208062257-2"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-208062257-2');
		</script>
	</head>


	<body>



		<div id="particles-js"></div>
		<script type="text/javascript" src="js/particles.min.js"></script>
		<script type="text/javascript" src="js/customParticles.js"></script>

		<!--MOBILE HAMBURGER MENU-->
		<div class="navigation-mobile">
			<nav class="navBar">
				<div class="hamburger-menu">
					<div class="line line-1"></div>
					<div class="line line-2"></div>
					<div class="line line-3"></div>
				</div>
				<ul class="nav-list">
					<li class="nav-list">
						<a href="index.php" class="nav-link">Home</a>
					</li>
					<li class="nav-list">
						<a href="method.php" class="nav-link">Method</a>
					</li>
					<li class="nav-list">
						<a href="pricing.php" class="nav-link">Pricing</a>
					</li>
					<li class="nav-list">
						<a href="blogs.php" class="nav-link">Blog</a>
					</li>
					<li class="nav-list">
						<a href="contact.php" class="nav-link">Contact</a>
					</li>
				</ul>
			</nav>
		</div>

			<div id="web-content">
				<div class="contact-wrapper">
					<div class="contact-info">
						<h2>Start a Project</h2>
						<p>If you would like to get in touch please contact me via email or phone, or send me a message using the contact form below.</p>
					</div>
				</div>
	<!--FORM-->

				<div id="form-container">
					<div class="form-box">
						<form id="email-form" method="post" action="<?php $_SERVER['PHP_SELF']?>">
							<h2>CONTACT</h2>


							<div class="formNames">
								<input type="text" name="first_name" value="<?php echo $first_name;?>" placeholder="Forename">
								<input type="text" name="last_name" value="<?php echo $last_name;?>" placeholder="Surname">
							</div>
							<div class="error"><?php echo $first_name_error;?></div>
							<div class="error"><?php echo $last_name_error;?></div>

							<input type="tel" name="number" value="<?php echo $number;?>" placeholder="Number*">
							<div class="error"><?php echo $number_error;?></div>


							<input type="text" name="email" placeholder="Email*" value="<?php echo $email;?>">
							<div class="error"><?php echo $email_error;?></div>

							<input type="text" name="budget" value="<?php echo $budget;?>" placeholder="Budget?*">
							<div class="error"><?php echo $budget_error;?></div>

							<textarea name="message" rows="8" cols="80" placeholder="Message*"></textarea>
							<div class="error"><?php echo $message_error;?></div>



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
								<footer id="footer">
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
