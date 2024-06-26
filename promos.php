<?php
include ('shared.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Promotions - Roma's Pizza & Italian Restaurant</title>
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
									<li>
										<a href="about.php">About Us</a>
									</li>
									<li class="active">
										<a href="promos.php"
											>Promotions <span class="sr-only">(current)</span></a
										>
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

	<div class="promo-banner">
		<h1>Promotions & Offers</h1>
	</div>

	<div class="container promo-cont">
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="promofirst__text">
					<h2>Catering From Roma's</h2>
					<p>
						At Roma's Pizza, we offer catering services that bring the taste
						of Italy to your special events. Whether it's a corporate
						luncheon, a wedding reception, or a birthday party, our diverse
						menu and attention to detail will ensure a memorable dining
						experience for you and your guests. For inquiries or to book our
						catering services, feel free to contact us at the link below!
					</p>
					<a href="contact.php" class="btn btn-primary">Contact Us</a>
				</div>
			</div>
			<div class="promo-div2 col-xs-6 col-md-3">
				<img src="images/catering.png" alt="Promo Image" />
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="promosecond__image">
					<a href="order.php"><img src="images/promo1.png" alt="Promo Image 1" /></a>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="promosecond__image">
					<img src="images/promo2.png" alt="Promo Image 2" />
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row promo-row">
			<div class="col-xs-6 col-md-3">
				<div class="promofirst__text">
					<h2>Sweet Deals!</h2>
					<p>
						At Roma's Pizza in Dallas, we regularly have limited time
						offers/deals. Either in our restaurant or online! Check out our
						menu for some of the best deals in Texas right now.
					</p>
					<a href="order.php" class="btn btn-secondary">Order Online</a>
				</div>
			</div>
			<div class="promo-div2 col-xs-6 col-md-3">
				<div class="promofirst__image">
					<img src="images/11.png" alt="Promo Image" />
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<section class="testimonial-carousel">
					<h2 class="flag-border">New Items & Limited Offers</h2>
					<div class="carousel">
						<div class="carousel-slides">
							<img src="images/9.png" alt="Testimonial 1" />
							<img src="images/10.png" alt="Testimonial 2" />
							<img src="images/11.png" alt="Testimonial 3" />
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