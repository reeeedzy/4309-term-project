//Form Validation & Submission Script
const form = document.getElementById('contact-form');

form.addEventListener('submit', (event) => {
	event.preventDefault();

	const nameInput = document.getElementById('name');
	const phoneInput = document.getElementById('phone');
	const emailInput = document.getElementById('email');
	const messageInput = document.getElementById('message');

	let isValid = true;

	// Name validation - check if empty
	if (!nameInput.value.trim()) {
		alert('Please enter your name.');
		isValid = false;
	}

	// Phone validation - removes characters that are not digits and must be 10 digits long
	const phone = phoneInput.value.replace(/[^0-9]/g, '');
	phoneInput.value = phone;
	if (!phone || phone.length !== 10) {
		alert('Please enter a valid 10-digit phone number.');
		isValid = false;
	}

	// Email validation is using built-in HTML validation
	if (!emailInput.checkValidity()) {
		alert('Please enter a valid email address.');
		isValid = false;
	}

	// Message validation - check if empty
	if (!messageInput.value.trim()) {
		alert('Please enter your message.');
		isValid = false;
	}

	// Submit form if all fields are valid
	if (isValid) {
		console.log('Form submitted successfully!');

		// Redirect to message.html on successful submission
		window.location.href = 'message.html';
	}
});
