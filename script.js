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
// Navigation Interactions
// Toggle the mobile icon to show and hide the main navigation
// Toggle the dropdown button to show and hide the dropdown content
document.addEventListener("DOMContentLoaded", () => {
	const mobileToggler = document.querySelector(".navbar-toggler");
	const navigation = document.querySelector(mobileToggler.getAttribute("data-target"));

	let dropdownToggle = document.querySelectorAll(".dropdown-toggle");

	mobileToggler.addEventListener("click", () => navigation.classList.toggle("collapse"));

	dropdownToggle.forEach((dropdown) => {
		dropdown.addEventListener("click", (toggler) => {
			let dropdownElement = dropdown.parentElement;
			dropdownElement.classList.toggle("collapse");
		});
	});
});

//Script for displaying background-images in the menu
const imageArray = [
	"images/cheese-pizza.avif",
	"images/tour-of-italy.avif",
	"images/chicken-parm.avif",
	"images/fettuccini-alfredo.avif",
	"images/spaghetti.avif",
	"images/garlic-rolls.avif",
	"images/mushrooms.jpg",
	"images/calamari.avif",
	"images/bruschetta.jpg",
	"images/zucchini.jpg",
	"images/fried-cheese.jpg",
	"images/hot-wings.jpg",
	"images/jalapeno.jpg",
	"images/artichoke.jpg",
	"images/garlic-bread.avif",
	"images/salmon-salad.avif",
	"images/greek-chicken.avif",
	"images/house-salad.avif",
	"images/grilled-chicken-salad.webp",
	"images/caesar.jpeg",
	"images/greek-salad.avif",
	"images/shrimp.jpg",
	"images/minestrone.jpg",
	"images/basil.jpg",
	"images/supreme.avif",
	"images/margarita.avif",
	"images/hawaiian.avif",
	"images/prosciutto.jpg",
	"images/focaccia.jpg",
	"images/alfredo-pizza.jpg",
	"images/meat-lovers.jpg",
	"images/veggie-pizza.jpg",
	"images/four-cheese.jpg",
	"images/tour-of-italy.avif",
	"images/fettuccini.avif",
	"images/meatball-parm.avif",
	"images/spaghetti.avif",
	"images/baked-ziti.avif",
	"images/meat-ravioli.avif",
	"images/ravioli.avif",
	"images/angel-hair-put.avif",
	"images/pesto-penne.jpg",
	"images/al-pana.jpg",
	"images/tort.jpg",
	"images/prima.jpg",
	"images/picatta.avif",
	"images/chicken-parm.avif",
	"images/florintini.jpg",
	"images/marsala.jpg",
	"images/cacci.jpg",
	"images/carchi.jpg",
	"images/seafood-special.avif",
	"images/veal-parm.avif",
	"images/grilled-salmon.avif",
	"images/scampi.jpg",
	"images/diavolo.jpg",
	"images/clams&shrimp.jpg",
	"images/lobster-ravioli.jpg",
	"images/tilapia.jpg",
	"images/veal-marsala.jpg",
	"images/veal-picatta.jpg",
	"images/cacci.jpg",
	"images/sausage-sub.jpg",
	"images/meatball-sub.jpg",
	"images/cheesesteak.jpg",
	"images/og-burger.jpg",
	"images/bacon-cheeseburger.jpg",
	"images/mushroom-swiss.jpg",
	"images/tiramisu.avif",
	"images/chocolate-mousse.avif",
	"images/cheesecake.webp",
	"images/cannoli.jpeg",
	"images/rum-cake.jpg",
];

const orderImages = document.querySelectorAll(".order-image");

for (let i = 0; i < orderImages.length; i++) {
	const imageElement = orderImages[i];
	imageElement.style.backgroundImage = `url(${imageArray[i]})`;
}
