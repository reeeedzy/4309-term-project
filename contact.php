<?php
include ('shared.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Contact Us - Roma's Pizza & Italian Restaurant</title>
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
									<li>
										<a href="promos.php">Promotions</a>
									</li>
									<li class="active">
										<a href="contact.php"
											>Contact Us <span class="sr-only">(current)</span></a
										>
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

	<div class="contact-banner">
		<h1>Contact Us</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-md-3 col-lg-2">
				<h2>Hours</h2>
				<p>
					Join us at our delightful restaurant, place an order for
					pickup/delivery, or inquire about catering services!
				</p>
				<ul class="hours">
					<li style="color: #008c45">
						<b>10:00 AM - 10:30 PM</b>
					</li>
					<li><b>Tuesday - Sunday</b></li>
				</ul>
				<ul class="hours">
					<li style="color: #cd121a"><b>Closed on Monday</b></li>
				</ul>
			</div>

			<div class="col-xs-6 col-md-3 col-lg-2">
				<h2>Reach Out</h2>
				<p>Feel free to reach out at any of the links below.</p>
				<ul class="unstyled inline">
					<li>
						<a href="tel:(214)-373-0500" target="_blank"><i class="fa-solid fa-phone"></i></a>
					</li>
					<li>
						<a class="links" href="tel:(214)-373-0500" target="_blank">(214)-373-0500</a>
					</li>
				</ul>
				<ul class="unstyled inline">
					<li>
						<a href="mailto:manager@romasdallas.com" target="_blank"><i
								class="fa-regular fa-envelope"></i></a>
					</li>
					<li>
						<a class="links" href="mailto:manager@romasdallas.com">manager@romasdallas.com</a>
					</li>
				</ul>
				<ul class="unstyled inline">
					<li>
						<a href="" target="_blank"><i class="fa-solid fa-location-dot"></i></a>
					</li>
					<li>
						<a class="links" href="https://maps.app.goo.gl/vVY8QDRWaMRh36cW6" target="_blank">7033
							Greenville Ave. Dallas, TX 75231
						</a>
					</li>
				</ul>
			</div>

			<div class="col-xs-6 col-md-3 col-lg-2">
				<h2>Social Media</h2>
				<ul class="unstyled inline">
					<li>
						<a href="https://www.instagram.com/romasitaliadallas/?hl=en" target="_blank"><i
								class="fa-brands fa-instagram"></i></a>
					</li>
					<li>
						<a class="links" href="https://www.instagram.com/romasitaliadallas/?hl=en"
							target="_blank">Instagram</a>
					</li>
				</ul>

				<ul class="unstyled inline">
					<li>
						<a href="https://www.facebook.com/RomasDallas" target="_blank"><i
								class="fa-brands fa-facebook"></i></a>
					</li>
					<li>
						<a class="links" href="https://www.facebook.com/RomasDallas">Facebook</a>
					</li>
				</ul>

				<ul class="unstyled inline">
					<li>
						<a href="https://www.linkedin.com/company/romaspizzadallas/" target="_blank"><i
								class="fa-brands fa-linkedin"></i></a>
					</li>
					<li>
						<a class="links" href="https://www.linkedin.com/company/romaspizzadallas/"
							target="_blank">LinkedIn</a>
					</li>
				</ul>

				<ul class="unstyled inline">
					<li>
						<a href="https://twitter.com/romasdallas" target="_blank"><i
								class="fa-brands fa-square-x-twitter"></i></a>
					</li>
					<li>
						<a class="links" href="https://twitter.com/romasdallas" target="_blank">Twitter/X</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="row contact">
			<div class="col-xs-6">
				<h2 class="text-center">Interested in Catering or Event Hosting?</h2>
				<h3 class="text-center">
					Please fill out the form below and we will get back to you as soon
					as possible!
				</h3>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-3">
				<iframe class="googlemap"
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11270.991741326021!2d-96.76862973841374!3d32.874734710868836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c20bc20539d65%3A0x6b69d112fef285d7!2sRoma&#39;s%20Pizza%20%26%20Italian%20Restaurant!5e0!3m2!1sen!2sus!4v1712776834299!5m2!1sen!2sus"
					width="800" height="425" style="border: 0" allowfullscreen="" loading="lazy"
					referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-3">
				<div class="form-wrapper">
					<form id="contact-form" class="contact-form" name="contact-form">
						<div class="form-line">
							<h3 class="form-text">Hi, I'm</h3>
							<input id="name" class="form-field" type="text" maxlength="256" name="name" data-name="Name"
								placeholder="Name*" required />
						</div>
						<div class="form-line">
							<h3 class="form-text">You can reach me at</h3>
							<input id="phone" class="form-field" type="tel" maxlength="256" name="phone"
								data-name="phone" placeholder="Phone*" required />
						</div>
						<div class="form-line">
							<h3 class="form-text">or at</h3>
							<input id="email" class="form-field" type="email" maxlength="256" name="email"
								data-name="email" placeholder="Email*" required />
						</div>
						<div class="form-line">
							<textarea class="form-field message" name="message" id="message" maxlength="5000"
								placeholder="Message*" required spellcheck="false" style="height: 112px"></textarea>
						</div>
						<div class="form-line">
							<button class="form-submit" type="submit">
								Send Message
								<i class="fa-regular fa-paper-plane"></i>
							</button>
						</div>
					</form>
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
	<script src="form.js"></script>
	<script src="script.js"></script>
</body>

</html>