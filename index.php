<?php
include ('shared.php');
?>
<!-- This wont work on replit -->

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Home - Roma's Pizza & Italian Restaurant</title>
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
									<li class="active">
										<a href="index.php"
											>Home <span class="sr-only">(current)</span></a
										>
									</li>
									<li>
										<a href="about.php">About Us</a>
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

	<div class="carousel-container">
		<div class="carousel-slide">
			<img src="images/slide1.png" alt="Slide 1" />
		</div>
		<div class="carousel-slide">
			<img src="images/slide2.png" alt="Slide 2" />
		</div>
		<div class="carousel-slide">
			<img src="images/slide3.png" alt="Slide 3" />
		</div>
		<button class="carousel-button prev">&#10094;</button>
		<button class="carousel-button next">&#10095;</button>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<section class="fstsect">
					<div class="fstsect__text-container">
						<h2>Start Ordering Online</h2>
						<h3>Convenient Online Ordering</h3>
						<p>
							Order your favorite dishes from Roma's Pizza online and enjoy
							the convenience of quick delivery or seamless curbside pickup.
							Explore our menu and place your order today!
						</p>
					</div>
					<div class="fstsect__image-container">
						<img src="images/pizzabut.png" alt="Image Description" />
						<a href="order.php" class="btn btn-secondary">Order Online</a>
					</div>
				</section>
			</div>
			<div class="col-xs-6">
				<section class="fstsect second-fstsect">
					<div class="fstsect__image-container">
						<img src="images/saladbut.webp" alt="Image Description" />
						<a href="about.php" class="btn btn-primary">About Us</a>
					</div>
					<div class="fstsect__text-container">
						<h2>Discover More About Roma's</h2>
						<h3>A Warm Welcome for Every Table</h3>
						<p>
							Roma's Pizza is all about creating lasting memories with the
							people you love. Our casual atmosphere makes everyone feel right
							at home, whether it's a date night, a family gathering, or a
							catch-up with friends. Learn more about how we have been serving
							the best Italian food in Dallas and North Texas at the link
							below!
						</p>
					</div>
				</section>
			</div>
			<div class="col-xs-6">
				<section class="testimonial-carousel">
					<h2>Hear from Actual Customers!</h2>
					<div class="carousel">
						<div class="carousel-slides">
							<img src="images/lane.jpg" alt="Testimonial 1" />
							<img src="images/jess.jpg" alt="Testimonial 2" />
							<img src="images/eric.jpg" alt="Testimonial 3" />
						</div>
						<button class="prev">&#10094;</button>
						<button class="next">&#10095;</button>
					</div>
				</section>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<section class="second-section">
					<div class="second-section__content">
						<h1 class="vip-heading">Join our VIP Diners Club</h1>
						<h2 class="flag-border">Text ROMAS to (214) 256-4112</h2>

						<h1 class="social-offers-heading">
							Follow us on Our Social Media!
						</h1>
						<h2>Get Exclusive Deals, Offers and Rewards!</h2>
						<div class="second-section__icons">
							<a href="https://www.facebook.com/your-restaurant-page" target="_blank"><i
									class="fab fa-facebook-f"></i></a>
							<a href="https://www.twitter.com/your-restaurant-page" target="_blank"><i
									class="fab fa-x-twitter"></i></a>
							<a href="https://www.instagram.com/your-restaurant-page" target="_blank"><i
									class="fab fa-instagram"></i></a>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>

	<div style="height: 10px"></div>

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