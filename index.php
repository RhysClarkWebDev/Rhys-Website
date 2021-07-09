<!DOCTYPE>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="resetstyle.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato:700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
		<title>Web Developer Portfolio, UI/UX Javacript Specialist</title>
		<meta name="description" content="Freelance Wordpress and Front-End Web Developer specialising in UI/UX.">
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

	</head>

<!--VIDEO BACKGROUND-->
	<body>
		<div class="Video-container">
			<div id="video-overlay">
				<div class="video-overlay-textarea">
					<div class="video-text-1">
						<h1>Welcome, I'm <span>Rhys</span>.<br> I'm not your average web developer</h1>
					</div>
					<div class="video-button-hyper">
						<a href="#web-content">
							<div id="video-button">
								<p>Learn more about what i do</p>
								<span><p class="arrow down"></p></span>
							</div>
						</a>
					</div>
				</div>
			</div>
			<video autoplay loop muted playsinline id="background">
				<source src="img/background.mp4" type="video/mp4">
				<source src="img/background.webm" type="video/webm">
			</video>
		</div>

<!--NAVIGATION BAR-->
		<div id="web-content">
			<div id="nav-main">
				<div class="nav-wrapper">
					<ul>
						<li><a  style="color:#F33065;"href="#background">Home</a></li>
						<li><a href="method.html">Method</a></li>
						<li><a href="portfolio.html">Portfolio</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li><button onclick="toggleLights();" id="backgroundColor">&#128161;</button></li>
						<script type="text/javascript" src="master.js"></script>

					</ul>
				</div>
			</div>
			<div class="email-constant">
				<p>Email - <a href="contact.php">webdev@rhys-clark.com</a></p>
			</div>

			<div class="wrapper">
				<div id="about-content">
					<div class="about-main">
						<h2>ABOUT</h2>
						<p style="padding: 0 15%;">Hello, my name is Rhys and I am a Front-End Web Developer currently in the process of becoming a full stack
						Web Developer. I have serious passion for UI/UX, animations and creating intuitive, dynamic user experiences.
						I specialise in javascript to bring your content to life. Are you interested?<br>
						<a href="contact.html">Let's start a project.</a></p>
					</div>




<!--FAST RESPONSIVE INITUITIVE DYNAMIC-->

					<div class="frid">
							<article class="fast">
								<img src="img/fast.png" alt="Fast">
								<h2>Fast</h2>
								<p>Fast load times and lag free interaction. Of Highest Priority (Positively Affects Search Results and User Experience)</p>
							</article>
							<article class="responsive">
								<img src="img/responsive.png" alt="Responsive">
								<h2>Responsive</h2>
								<p>My layouts will work on any devive layout, big or small.</p>
							</article class="inituitive">
							<article>
								<img src="img/inituitive.png" alt="Inituitive">
								<h2>Inituitive</h2>
								<p>Creative thinking for easy to use, inituitive UI/UX.</p>
							</article>
							<article class="dynamic">
								<img src="img/dynamic.png" alt="Dynamic">
								<h2>Dynamic</h2>
								<p>Websites dont have to be static, see yours come to life before your eyes.</p>
							</article>
					</div>


					<!--PORTFOLIO-->
					<div class="portfolio-wrap">
						<div class="portfolio-rewrap">
							<div class="portfolio-grid">
								<article class="CherryParts">
									<div class="portfolio-image-container rectangle">
										<img src="" alt="Cherry Parts Website Web Developer Portfolio">
										<div class="">
											<p></p>
										</div>
									</div>
								</article>

								<article class="-">
									<div class="portfolio-image-container rectangle">
										<img src="" alt="Cherry Parts Website Web Developer Portfolio">
										<div class="">
											<p></p>
										</div>
									</div>
								</article>

								<article class="-">
									<div class="portfolio-image-container rectangle">
										<img src="" alt="Cherry Parts Website Web Developer Portfolio">
										<div class="">
											<p></p>
										</div>
									</div>
								</article>
							</div>
						</div>
					</div>


					<span class="myskills"><h2>MY SKILLS</h2></span>
					<div class="skills-grid">
						<article class="html">
							<img src="img/html.png" alt="Image">
							<h2>HTML</h2>
							<p>HTML (Hyper Text Markup Language) is your basic language used to include content on your website.
							Text, Links, Images, Videos, Etc</p>
						</article>
						<article class="css">
							<img src="img/css.png" alt="CSS">
							<h2>CSS</h2>
							<p>CSS (Cascading Style Sheets) tells the webpage how to layout the HTML which allows for a truly customisable
							website that fulfills all of your needs</p>
						</article>
						<article class="javascript">
							<img src="img/javascript.png" alt="Javascript">
							<h2>JAVASCRIPT</h2>
							<p>JavaScript is a client-side programming language which helps web developer to do Web Application Development
								and make dynamic and interactive web pages by implementing custom client-side scripts. Developers can also
								use cross-platform runtime engines like Node. js to write server-side code in JavaScript.</p>
						</article>
						<article class="seo">
							<img src="img/seologo.png" alt="SEO">
							<h2>SEO</h2>
							<p>Special care is taken to provide you with the very best Search Engine Optimisation.
							This means that your website isnt only on the web but is one of the very first to show in
							googles search results.</p>
						</article>
						<article class="ui">
							<img src="img/ui.png" alt="Brackets">
							<h2>UI/UX</h2>
							<p>User Interface/User Experience. At the most basic level, the user interface (UI) is the series of screens,
								pages, and visual elements—like buttons and icons—that enable a person to interact with a product or service.
								User experience (UX), on the other hand, is the internal experience that a person has as they interact with every aspect of a
								company’s products and services.</p>
						</article>
					</div>
				</div>



				<div class="" style="padding-top:45px;">
					<hr style=-"color:white;">
					<hr style=-"color:white;">
					<hr style=-"color:white;">
					<hr style=-"color:white;">
					<hr style=-"color:white;">
					<hr style=-"color:white;">
				</div>

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
								<a href="https://www.facebook.com/RhysClarkWebDev"><img src="imgsocial/facebook.png" alt="Facebook"></a>
								<a href="https://www.Instagram/ig.clxrk"><img src="imgsocial/instagram.png" alt="instagram"></a>
								<a href="https://www.Twitter.com/RhysClarkWebDev"><img src="imgsocial/twitter.png" alt="twitter"></a>
								<a href="https://www.github.com/RhysClarkWebDev"><img src="imgsocial/github.png" alt="github"></a>
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
