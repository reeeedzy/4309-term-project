document.addEventListener("DOMContentLoaded", function () {
	// Main carousel variables
	let slideIndex = 0;
	const slides = document.querySelectorAll(".carousel-slide");
	const prevButton = document.querySelector(".prev");
	const nextButton = document.querySelector(".next");

	// Testimonial carousel variables
	let testimonialSlideIndex = 0;
	const testimonialSlides = document.querySelectorAll(".testimonial-carousel .carousel-slides img");
	const testimonialPrevButton = document.querySelector(".testimonial-carousel .prev");
	const testimonialNextButton = document.querySelector(".testimonial-carousel .next");

	// Main carousel functions
	function showSlides(index) {
		slides.forEach((slide, i) => {
			if (i === index) {
				slide.style.display = "block";
			} else {
				slide.style.display = "none";
			}
		});
	}

	function nextSlide() {
		slideIndex = (slideIndex + 1) % slides.length;
		showSlides(slideIndex);
	}

	function prevSlide() {
		slideIndex = (slideIndex - 1 + slides.length) % slides.length;
		showSlides(slideIndex);
	}

	// Testimonial carousel functions
	function showTestimonialSlides(index) {
		testimonialSlides.forEach((slide, i) => {
			if (i === index) {
				slide.style.display = "block";
			} else {
				slide.style.display = "none";
			}
		});
	}

	function nextTestimonialSlide() {
		testimonialSlideIndex = (testimonialSlideIndex + 1) % testimonialSlides.length;
		showTestimonialSlides(testimonialSlideIndex);
	}

	function prevTestimonialSlide() {
		testimonialSlideIndex = (testimonialSlideIndex - 1 + testimonialSlides.length) % testimonialSlides.length;
		showTestimonialSlides(testimonialSlideIndex);
	}

	// Event listeners for main carousel
	nextButton.addEventListener("click", nextSlide);
	prevButton.addEventListener("click", prevSlide);

	// Event listeners for testimonial carousel
	testimonialNextButton.addEventListener("click", nextTestimonialSlide);
	testimonialPrevButton.addEventListener("click", prevTestimonialSlide);

	// Initial display for both carousels
	showSlides(slideIndex);
	showTestimonialSlides(testimonialSlideIndex);

	// Automatic slide change for main carousel (every 8 seconds)
	setInterval(nextSlide, 8000);

	// Automatic slide change for testimonial carousel (every 8 seconds)
	setInterval(nextTestimonialSlide, 8000);
});
