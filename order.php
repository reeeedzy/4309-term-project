<?php
include ('shared.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Order Online - Roma's Pizza & Italian Restaurant</title>
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>

<body>
	<a id="top" class="anchor"></a>

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
									<li>
										<a href="contact.php">Contact Us</a>
									</li>

									<li>
										<a class="order" href="order.php"
											>Order Online <span class="sr-only">(current)</span></a
										>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</section> -->

	<div class="menu-banner">
		<h1>Order Online</h1>
		<h2>Take-Out & Delivery</h2>
	</div>

	<!-- On-page Navigation -->
	<header>
		<nav>
			<ul>
				<li><a href="#apps">Appetizers</a></li>
				<li><a href="#soups">Soups & Salads</a></li>
				<li><a href="#calzone">Calzones</a></li>
				<li><a href="#pizza">Pizza</a></li>
				<li><a href="#pasta">Pasta</a></li>
				<li><a href="#specials">Specialties</a></li>
				<li><a href="#entrees">Entrees</a></li>
				<li><a href="#subs">Handhelds</a></li>
				<li><a href="#desserts">Desserts</a></li>
				<li><a href="#bevs">Beverages</a></li>
			</ul>
		</nav>
	</header>

	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<h2 class="flag-border">Popular Dishes</h2>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>8" Cheese Pizza</h3>
							<p>$9.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>
						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Tour of Italy</h3>
							<p>$18.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Chicken Parmigiana</h3>
							<p>$14.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Chicken Fettucini Alfredo</h3>
							<p>$15.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Spaghetti</h3>
							<p>$12.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Garlic Rolls</h3>
							<p>$5.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
		</div>
	</div>
	<a id="apps" class="anchor"></a>
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<h2 class="flag-border">Appetizers</h2>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Appetizer Sampler</h3>
							<p>$12.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Calamari</h3>
							<p>$10.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Bruschetta Bread</h3>
							<p>$6.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Fried Zucchini</h3>
							<p>$9.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Fried Cheese</h3>
							<p>$8.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Hot Wings</h3>
							<p>$12.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Stuffed Jalapenos</h3>
							<p>$8.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Fried Artichoke</h3>
							<p>$8.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Garlic Bread</h3>
							<p>$4.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
		</div>
	</div>
	<a id="soups" class="anchor"></a>
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<h2 class="flag-border">Soups & Salads</h2>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Grilled Salmon Salad</h3>
							<p>18.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Chicken Greek Salad</h3>
							<p>13.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>House Salad</h3>
							<p>9.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Grilled Chicken Salad</h3>
							<p>13.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Caesar Salad</h3>
							<p>9.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Greek Salad</h3>
							<p>9.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Grilled Shrimp Salad</h3>
							<p>16.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Minestrone Soup</h3>
							<p>8.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Tomato Basil Soup</h3>
							<p>8.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- *Need to figure something out for this section -->
	<a id="calzone" class="anchor"></a>
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<h2 class="flag-border">Roma's Signature Calzones</h2>
			</div>
			<div class="col-xs-6 col-md-2 col-lg-2">
				<div class="article">
					<div class="menu-img">
						<img src="images/calzone.jpeg" alt="" />
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-2 col-lg-2">
				<ul class="unstyled">
					<li class="text-center">
						<b>Meat Lovers</b>
					</li>
					<li class="text-center">
						Ricotta & mozzarella cheese with beef, sausage, pepperoni and
						Canadian bacon
					</li>
				</ul>
				<ul class="unstyled">
					<li class="text-center">
						<b>Veggie Lovers</b>
					</li>
					<li class="text-center">
						Ricotta & mozzarella cheese and mix fresh veggies
					</li>
				</ul>
			</div>
			<div class="col-xs-6 col-md-2 col-lg-2">
				<ul class="unstyled">
					<li class="text-center">
						<b>Beef/Sausage/Pepperoni</b>
					</li>
					<li class="text-center">
						Ricotta & mozzarella cheese with choice of beef, sausage or
						pepperoni
					</li>
				</ul>
				<ul class="unstyled">
					<li class="text-center">
						<b>Spinach</b>
					</li>
					<li class="text-center">Spinach, ricotta & mozzarella</li>
				</ul>
				<ul class="unstyled">
					<li class="text-center">
						<b>Stromboli</b>
					</li>
					<li class="text-center">
						Pepperoni, mushrooms, beef, & mozzarella cheese
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- *Need to figure something out for this section -->
	<a id="pizza" class="anchor"></a>
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<h2 class="flag-border">Roma's Hand Tossed Pizza</h2>
			</div>
			<div class="col-xs-6 col-md-2 col-lg-2">
				<ul class="unstyled">
					<li class="text-center">
						<h3>Sizes</h3>
					</li>
					<li class="text-center">
						<h4>Personal: 8" = 1 Person</h4>
					</li>
					<li class="text-center">
						<h4>Small: 12" = 1-2 People</h4>
					</li>
					<li class="text-center">
						<h4>Medium: 14" = 2 People</h4>
					</li>
					<li class="text-center">
						<h4>Large: 16" = 3-4 People</h4>
					</li>
					<li class="text-center">
						<h4>Extra Large: 18" = 4-5 People</h4>
					</li>
				</ul>
			</div>
			<div class="col-xs-6 col-md-2 col-lg-2">
				<ul class="unstyled">
					<li class="text-center">
						<h3>Toppings</h3>
					</li>
					<li class="text-center"><b>Meat</b></li>
					<li class="text-center">
						Anchovies, Bacon, Canadian Bacon, Ham, Hamburger, Pepperoni,
						Salami, Sausage
					</li>
					<li class="text-center"><b>Veggies</b></li>
					<li class="text-center">
						Artichoke Hearts, Black Olives, Broccoli, Fresh Garlic, Fresh
						Basil, Fresh Tomatoes, Green Olives, Green Peppers, Jalapenos,
						Mushrooms, Onions, Pineapple, Spinach
					</li>
				</ul>
			</div>
			<div class="col-xs-6 col-md-2 col-lg-2">
				<div class="article">
					<div class="menu-img">
						<img src="images/cheese-pizza.avif" alt="" />
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<h2 class="flag-border">Roma's Signature Pizzas</h2>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Roma's Supreme</h3>
							<p>11.95</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Margarita</h3>
							<p>10.95</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Hawaiian</h3>
							<p>10.95</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Prosciutto</h3>
							<p>11.95</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Focaccia</h3>
							<p>10.95</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Chicken Alfredo</h3>
							<p>10.95</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Meat Lovers</h3>
							<p>11.95</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Veggie Lovers</h3>
							<p>11.95</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Four Cheese</h3>
							<p>10.95</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
		</div>
	</div>
	<a id="pasta" class="anchor"></a>
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<h2 class="flag-border">Homemade Pasta</h2>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Tour of Italy</h3>
							<p>18.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Fettuccini Alfredo</h3>
							<p>12.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Meatball Parmigiana</h3>
							<p>14.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Spaghetti</h3>
							<p>12.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Baked Ziti</h3>
							<p>12.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Meat Ravioli</h3>
							<p>12.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Ravioli</h3>
							<p>12.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Angel Hair Puttanesca</h3>
							<p>14.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Pesto Penne</h3>
							<p>12.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Tortellini Al Pana</h3>
							<p>12.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Tortellini Alfredo</h3>
							<p>12.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Fettuccini Primavera</h3>
							<p>14.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
		</div>
	</div>
	<a id="specials" class="anchor"></a>
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<h2 id="specials" class="flag-border">House Specialties</h2>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Chicken Picatta</h3>
							<p>14.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Chicken Parmigiana</h3>
							<p>14.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Chicken Florintini</h3>
							<p>14.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Chicken Marsala</h3>
							<p>14.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Chicken Cacciatore</h3>
							<p>14.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Chicken Carchioffi</h3>
							<p>14.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
		</div>
	</div>
	<a id="entrees" class="anchor"></a>
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<h2 class="flag-border">Entrees</h2>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Seafood Special</h3>
							<p>20.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Veal Parmigiana</h3>
							<p>15.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Grilled Salmon</h3>
							<p>18.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Shrimp Scampi</h3>
							<p>15.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Shrimp fra Diavolo</h3>
							<p>15.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Linguine Clams & Shrimp</h3>
							<p>18.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Lobster & Shrimp Ravioli</h3>
							<p>18.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Grilled Tilapia</h3>
							<p>16.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Veal Marsala</h3>
							<p>15.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Veal Picatta</h3>
							<p>15.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Chicken Capri</h3>
							<p>16.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
		</div>
	</div>
	<a id="subs" class="anchor"></a>
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<h2 class="flag-border">Hot Subs</h2>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Sausage & Pepper Parmigiana</h3>
							<p>12.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Meatball Parmigiana</h3>
							<p>12.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Philly Cheesesteak</h3>
							<p>12.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>

			<div class="col-xs-6">
				<h2 class="flag-border">Burgers</h2>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>The Original Burger</h3>
							<p>12.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Bacon Cheeseburger</h3>
							<p>12.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Mushroom Swiss Burger</h3>
							<p>12.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
		</div>
	</div>
	<a id="desserts" class="anchor"></a>
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<h2 class="flag-border">Desserts</h2>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Tiramisu</h3>
							<p>6.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Chocolate Mousse Cake</h3>
							<p>7.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Cheesecake</h3>
							<p>4.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Cannoli</h3>
							<p>5.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-2">
				<div class="article">
					<div class="order-image">
						<div class="order-image-txt">
							<h3>Italian Rum Cake</h3>
							<p>7.99</p>
						</div>
					</div>
					<form class="add-to-cart">
						<div class="number-wrapper">
							<span class="minus-span prevent-select">-</span>
							<span class="num-span prevent-select">1</span>
							<span class="plus-span prevent-select">+</span>
						</div>

						<input name="add" class="add cart-button" type="submit" value="Add to Cart" />
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- *Need to figure something out for this section -->
	<a id="bevs" class="anchor"></a>
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<h2 class="flag-border">Beverages</h2>
			</div>
			<div class="col-xs-6 col-md-2 col-lg-2">
				<ul class="unstyled">
					<li class="text-center">
						<h3>Soft Drinks</h3>
					</li>
					<li class="text-center">
						Coke, Diet Coke, Sprite, Dr. Pepper, Root Beer
					</li>

					<li class="text-center">
						<h3>To-Go 2-Liters</h3>
					</li>
					<li class="text-center">Coke, Diet Coke, Sprite, Root Beer</li>
				</ul>
			</div>
			<div class="col-xs-6 col-md-2 col-lg-2">
				<ul class="unstyled">
					<li class="text-center">
						<h3>Non-Carbonated</h3>
					</li>
					<li class="text-center"><b>Caffeinated</b></li>
					<li class="text-center">Coffee, Hot Tea</li>
					<li class="text-center"><b>Decaf</b></li>
					<li class="text-center">Coffee, Iced Tea, Sweet Tea</li>
					<li class="text-center"><b>Juice</b></li>
					<li class="text-center">Orange, Cranberry, Lemonade</li>
				</ul>
			</div>
			<div class="col-xs-6 col-md-2 col-lg-2">
				<ul class="unstyled">
					<li class="text-center">
						<h3>Alcohol</h3>
					</li>
					<li class="text-center"><b>Red Wine</b></li>
					<li class="text-center">
						Chianti Frescobaldi, Red Rock Merlot, Sangiovese, Gascon Malbec,
						Mirassou Pinot Noir, Lambrusco, Brancaia Tre Toscana
					</li>
					<li class="text-center"><b>White Wine</b></li>
					<li class="text-center">
						William Hill Chardonnay, Ecco Domani Pinot Grigio, Moscato
						Allegro, Sauvignon Blanc, White Zinfandel, Prosecco, Covey Run
						Riesling
					</li>
				</ul>
			</div>
		</div>
	</div>
	<aside id="cart-aside">
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<table>
						<thead>
							<tr>
								<th>Item</th>
								<th>Quantity</th>
								<th>Price</th>
								<th>Total</th>
							</tr>
						</thead>
						<tbody>
							<tr></tr>
						</tbody>
					</table>
					<div class="purchase-div">
						<button id="purchase" class="cart-btn">Purchase</button>
					</div>
				</div>
			</div>
		</div>
	</aside>

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
	<script src="cart.js"></script>
	<script src="script.js"></script>
</body>

</html>