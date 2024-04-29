document.addEventListener('DOMContentLoaded', function () {
	const plusButtons = document.querySelectorAll('.plus-span');
	const minusButtons = document.querySelectorAll('.minus-span');
	const addButton = document.querySelectorAll('.add');
	const aside = document.getElementById('cart-aside');
	let cartItems = document.getElementById('cart-items');

	plusButtons.forEach((button, index) => {
		button.addEventListener('click', function () {
			let quantitySpan = button.parentElement.querySelector('.num-span');
			let currentValue = parseInt(quantitySpan.textContent);
			quantitySpan.textContent = currentValue + 1;
		});
	});

	minusButtons.forEach((button, index) => {
		button.addEventListener('click', function () {
			let quantitySpan = button.parentElement.querySelector('.num-span');
			let currentValue = parseInt(quantitySpan.textContent);
			if (currentValue > 1) {
				quantitySpan.textContent = currentValue - 1;
			}
		});
	});

	addButton.forEach((button) => {
		button.addEventListener('click', function (event) {
			event.preventDefault();
			const menuItem = event.target.closest('.article');
			const itemName = menuItem.querySelector('h3').textContent;
			const itemPrice = parseFloat(
				menuItem.querySelector('p').textContent.replace('$', '')
			);
			const itemQuantity = parseInt(
				menuItem.querySelector('.num-span').textContent
			);
			const totalPrice = itemPrice * itemQuantity;

			// Create table row for the item
			const row = document.createElement('tr');
			row.innerHTML = `
                <td><p>${itemName}</p></td>
                <td><input type="number" value="${itemQuantity}" min="1" class="item-quantity" /></td>
                <td><p>$${itemPrice.toFixed(2)}</p></td>
                <td><p class="total-price"><b>$${totalPrice.toFixed(
									2
								)}</b></p></td>
            `;
			if (!cartItems) {
				cartItems = document.createElement('tbody');
				cartItems.id = 'cart-items';
				document.querySelector('table').appendChild(cartItems);
			}
			cartItems.appendChild(row);

			// Show aside with sliding animation
			aside.classList.add('show');

			// Listen for changes in quantity input fields
			const quantityInput = row.querySelector('.item-quantity');
			quantityInput.addEventListener('input', function () {
				const newQuantity = parseInt(quantityInput.value);
				const newTotalPrice = itemPrice * newQuantity;
				row.querySelector('.total-price b').textContent =
					'$' + newTotalPrice.toFixed(2);
				updateTotalPrice();
			});
		});
	});

	document.getElementById('purchase').addEventListener('click', function () {
		// Implement purchase functionality here
		alert('Purchase completed!');
		// Clear the cart
		cartItems.innerHTML = '';
		// Hide aside with sliding animation
		aside.classList.remove('show');
	});

	function updateTotalPrice() {
		let totalCartPrice = 0;
		const totalPriceElements = document.querySelectorAll('.total-price b');
		totalPriceElements.forEach((element) => {
			totalCartPrice += parseFloat(element.textContent.replace('$', ''));
		});
		document.getElementById('total-price').textContent =
			'$' + totalCartPrice.toFixed(2);
	}
});
