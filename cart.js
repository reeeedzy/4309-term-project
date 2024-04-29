document.addEventListener('DOMContentLoaded', function () {
	const articles = document.querySelectorAll('.article');

	articles.forEach(function (article) {
		const addButton = article.querySelector('#add');
		const minusButton = article.querySelector('.minus');
		const plusButton = article.querySelector('.plus');
		const numElement = article.querySelector('.num');
		const priceElement = article.querySelector('.order-image-txt p');

		let quantity = 1;

		// Function to update quantity and display
		function updateQuantityDisplay() {
			numElement.textContent = quantity;
		}

		// Function to update total price
		function updateTotalPrice() {
			const price = parseFloat(priceElement.textContent.slice(1)); // Remove the $
			const totalPrice = price * quantity;
			return totalPrice;
		}

		// Function to handle click on plus button
		plusButton.addEventListener('click', function () {
			quantity++;
			updateQuantityDisplay();
		});

		// Function to handle click on minus button
		minusButton.addEventListener('click', function () {
			if (quantity > 1) {
				quantity--;
				updateQuantityDisplay();
			}
		});

		// Function to handle add to cart button click
		addButton.addEventListener('click', function (event) {
			event.preventDefault(); // Prevent form submission

			// Create an object with item details
			const item = {
				name: article.querySelector('h3').textContent,
				quantity: quantity,
				price: updateTotalPrice(),
			};

			// Process the item or store it in cart
			addToCart(item);
		});
	});

	// Function to process the item and add it to the cart
	function addToCart(item) {
		const cart = document.getElementById('cart');
		if (cart) {
			const itemInfo = document.createElement('div');
			itemInfo.innerHTML = `<p>${item.name} - Quantity: ${
				item.quantity
			} - Price: $${item.price.toFixed(2)}</p>`;
			cart.appendChild(itemInfo);
		} else {
			console.error('Cart element not found.');
		}
	}
});
