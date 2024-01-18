(function() {
	'use strict';

	var tinyslider = function() {
		var el = document.querySelectorAll('.testimonial-slider');

		if (el.length > 0) {
			var slider = tns({
				container: '.testimonial-slider',
				items: 1,
				axis: "horizontal",
				controlsContainer: "#testimonial-nav",
				swipeAngle: false,
				speed: 700,
				nav: true,
				controls: true,
				autoplay: true,
				autoplayHoverPause: true,
				autoplayTimeout: 3500,
				autoplayButtonOutput: false
			});
		}
	};
	tinyslider();




	var sitePlusMinus = function() {

		var value,
    		quantity = document.getElementsByClassName('quantity-container');

		function createBindings(quantityContainer) {
	      var quantityAmount = quantityContainer.getElementsByClassName('quantity-amount')[0];
	      var increase = quantityContainer.getElementsByClassName('increase')[0];
	      var decrease = quantityContainer.getElementsByClassName('decrease')[0];
	      increase.addEventListener('click', function (e) { increaseValue(e, quantityAmount); });
	      decrease.addEventListener('click', function (e) { decreaseValue(e, quantityAmount); });
	    }

	    function init() {
	        for (var i = 0; i < quantity.length; i++ ) {
						createBindings(quantity[i]);
	        }
	    };

	    function increaseValue(event, quantityAmount) {
	        value = parseInt(quantityAmount.value, 10);

	        console.log(quantityAmount, quantityAmount.value);

	        value = isNaN(value) ? 0 : value;
	        value++;
	        quantityAmount.value = value;
	    }

	    function decreaseValue(event, quantityAmount) {
	        value = parseInt(quantityAmount.value, 10);

	        value = isNaN(value) ? 0 : value;
	        if (value > 0) value--;

	        quantityAmount.value = value;
	    }

	    init();

	};
	sitePlusMinus();


})

// script.js
window.addEventListener('scroll', function() {
	var header = document.querySelector('header');
	var scrollPosition = window.scrollY;

	// Adjust the scroll threshold as needed
	if (scrollPosition > 50) {
			header.style.backgroundColor = 'rgba(51, 51, 51, 1)'; /* Opaque background */
	} else {
			header.style.backgroundColor = 'rgba(51, 51, 51, 0)'; /* Transparent background */
	}
});

// Add bg color on navbar when scroll
document.addEventListener("DOMContentLoaded", function () {
  console.log('Document is ready.');

  var header = document.querySelector('header');
  var navHeight = document.querySelector('.custom-navbar').offsetHeight;

  function updateHeader() {
    console.log('Updating header...');
    if (window.scrollY > navHeight) {
      header.classList.add('fixed-header');
      header.classList.remove('transparent-header');
    } else {
      header.classList.remove('fixed-header');
      header.classList.add('transparent-header');
    }
  }

  // Initial call to set header transparency based on initial scroll position
  updateHeader();

  // Event listener for scroll events
  window.addEventListener('scroll', function () {
    updateHeader();
  });
});


// Play youtube video when button click
function play1() {
	var videoUrl = "https://www.youtube.com/embed/8ZsRryHYBwg?si=EAt1gVMRD3a1qunq";

	window.open(videoUrl, "YouTube Video");
}