<?php
include ('shared.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>About Us - Roma's Pizza & Italian Restaurant</title>
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>

<body>
	<?php echo $nav ?>
	<!-- This wont work on replit -->

	<!-- <section class="nav-wrapper">
			<div class="container nav-container">
				<div class="row">
					<div class="col-xs-6">
						<nav class="navbar">
							<a class="navbar-brand" href="index.php">Navbar</a>
							<button
								class="navbar-toggler"
								type="button"
								data-target="#navigation"
							>
								<span class="fa-solid fa-bars fa-xl"></span>
							</button>

							<div class="navigation collapse" id="navigation">
								<ul class="navbar-nav">
									<li>
										<a href="index.php">Home</a>
									</li>
									<li class="active">
										<a href="about.php"
											>About Us <span class="sr-only">(current)</span></a
										>
									</li>
									<li>
										<a href="promos.php">Promotions</a>
									</li>
									<li>
										<a href="contact.php">Contact Us</a>
									</li>

									<li>
										<a class="order" href="order.php">Order Online</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</section> -->

	<div class="about-banner">
		<h1>About Us</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="fact-item">
				<img src="images/fact1.png" alt="Fact 1" />
			</div>
			<div class="fact-item">
				<img src="images/fact2.png" alt="Fact 2" />
			</div>
			<div class="fact-item">
				<img src="images/fact3.png" alt="Fact 3" />
			</div>
			<div class="fact-item">
				<img src="images/fact4.png" alt="Fact 4" />
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="about-text-container">
					<h2 class="about-h2 flag-border">
						A Slice of Italy on Greenville Ave in Dallas
					</h2>
					<p>
						We strive to blend the freshest ingredients and Italy's most
						authentic recipes, with our made from scratch philosophy. The
						result is the some of the best pizza, Italian food, and American
						staples in the Dallas-Fort Worth Metroplex. Roma's is dedicated to
						serving our guests with hospitality and has been family owned and
						operated since our inception.
					</p>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="about-image-container">
					<img src="images/firstsecone.jpg" alt="About Image" />
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<section class="aboutoptions">
					<img src="images/foodoptions.png" alt="Banner" class="food-banner" />
				</section>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row about-section">
			<div class="col-xs-6 col-md-3">
				<div class="about-text-container">
					<h2 class="about-h2 flag-border">
						Serving North Texas for 20+ years!
					</h2>
					<p>
						We care deeply about our local community. Roma's is dedicated to
						serving the Dallas community, as well as the surrounding
						neighborhoods. We have guests come from Plano, Richardson, Euless,
						Fort Worth, Grapevine, Grand Prarie, and beyond that LOVE our
						food.
					</p>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="about-image-container">
					<img src="images/alfredo-pizza.jpg" alt="About Image" />
				</div>
			</div>
		</div>
	</div>

	<?php echo $footer ?>
	<!-- This wont work on replit -->

	<!-- <footer class="message-footer">
		<div class="container company-details no-pattern">
			<div class="row btm-pad">
				<div class="col-xs-6 col-md-3 col-lg-2">
					<h3 class="footer-header">Roma's Pizza & Italian Restaurant</h3>
					<p class="footer-p">
						Here at Roma's, we strive to blend the freshest ingredients and
						Italy's most authentic recipes, with our made from scratch
						philosophy. The result is the some of the best pizza, Italian
						food, and American staples in the Dallas-Fort Worth Metroplex.
					</p>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-2">
					<h3 class="footer-header">Directions</h3>
					<iframe class="googlemap"
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11270.991741326021!2d-96.76862973841374!3d32.874734710868836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c20bc20539d65%3A0x6b69d112fef285d7!2sRoma&#39;s%20Pizza%20%26%20Italian%20Restaurant!5e0!3m2!1sen!2sus!4v1712776834299!5m2!1sen!2sus"
						width="380" height="170" style="border: 0" allowfullscreen="" loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-1">
					<h3 class="footer-header">Hours</h3>
					<ul class="unstyled big-links footer-hours">
						<li id="green">
							<b>10:00 AM - 10:30 PM</b>
						</li>
						<li><b>Tuesday - Sunday</b></li>
					</ul>
					<ul class="unstyled big-links footer-hours">
						<li id="red"><b>Closed on Monday</b></li>
					</ul>
					<a class="btn btn-secondary" href="order.php" title="Read more on our Contact Page">Order
						Online</a>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-1">
					<h3 class="footer-header">Contact Us</h3>
					<ul class="unstyled inline big-links">
						<li class="footer-icons">
							<a href="tel:(214)-373-0500" target="_blank"><i class="fa-solid fa-phone"></i></a>
						</li>
						<li>
							<a class="links" href="tel:(214)-373-0500" target="_blank">(214)-373-0500</a>
						</li>
					</ul>
					<ul class="unstyled inline big-links">
						<li>
							<a class="footer-icons" href="mailto:manager@romasdallas.com" target="_blank"><i
									class="fa-regular fa-envelope"></i></a>
						</li>
						<li>
							<a class="links" href="mailto:manager@romasdallas.com">Email Us</a>
						</li>
					</ul>
					<a class="btn btn-primary" href="contact.php" title="Read more on our Contact Page">More Info</a>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container copy">
				<div class="row">
					<div class="col-xs-6 col-md-4">
						<p class="copyright-text">
							&copy; 2024 Roma's Pizza & Italian Restaurant - All pages are
							mock ups, created by Michael Pacheco and Reed Turner for our
							4309 Internet Marketing term project.
						</p>
					</div>
					<div class="col-xs-6 col-md-2">
						<ul class="inline social-media">
							<li>
								<a href="https://www.instagram.com/romasitaliadallas/?hl=en" target="_blank"><i
										class="fa-brands fa-instagram"></i></a>
							</li>
							<li>
								<a href="https://www.facebook.com/RomasDallas" target="_blank"><i
										class="fa-brands fa-facebook"></i></a>
							</li>
							<li>
								<a href="mailto:manager@romasdallas.com" target="_blank"><i
										class="fa-regular fa-envelope"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer> -->
	<a href="#" class="to-top">
		<i class="fa-solid fa-angles-up"></i>
	</a>

	<script src="script.js"></script>
</body>

</html>