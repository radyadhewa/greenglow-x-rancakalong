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
			header.style.backgroundColor = 'rgba(29, 45, 39, 1)'; /* Opaque background */
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


(function($) {
	// 'use strict';

	// Main Navigation
	$( '.hamburger-menu' ).on( 'click', function() {
			$(this).toggleClass('open');
			$('.site-navigation').toggleClass('show');
	});

	// Hero Slider
	var mySwiper = new Swiper('.hero-slider', {
			slidesPerView: 1,
			spaceBetween: 0,
			loop: true,
			pagination: {
					el: '.swiper-pagination',
					clickable: true,
					renderBullet: function (index, className) {
							return '<span class="' + className + '">' + (index + 1) + '</span>';
					}
			},
			navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev'
			}
	});

	var current_slide = mySwiper.activeIndex;
	var countdown_date = $('.swiper-slide').eq(current_slide).data("date");

	$('.countdown').countdown(countdown_date, function(event) {
			$('.dday').html(event.strftime('%-D'));
			$('.dhour').html(event.strftime('%-H'));
			$('.dmin').html(event.strftime('%-M'));
			$('.dsec').html(event.strftime('%-S'));
	});

	mySwiper.on('slideChange', function (slider) {
			var current_slide = mySwiper.activeIndex;
			var countdown_date = $('.swiper-slide').eq(current_slide).data("date");

			$('.countdown').countdown(countdown_date, function(event) {
					$('.dday').html(event.strftime('%-D'));
					$('.dhour').html(event.strftime('%-H'));
					$('.dmin').html(event.strftime('%-M'));
					$('.dsec').html(event.strftime('%-S'));
			});
	});

	// Events Slider
	var swiper = new Swiper('.homepage-regional-events-slider', {
			slidesPerView: 6,
			spaceBetween: 30,
			loop: true,
			breakpoints: {
					// when window width is <= 320px
					576: {
							slidesPerView: 2,
					},
					768: {
							slidesPerView: 3
					},
					992: {
							slidesPerView: 4
					},
					1200: {
							slidesPerView: 5
					}
			},
			navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev'
			}
	});

	// Load more events
	var $container      = $('.events-list');
	var $item           = $('.single-event');

	$item.slice(0, 6).addClass('visible');

	$('.load-more-btn a').on('click', function (e) {
			e.preventDefault();

			$('.single-event:hidden').slice(0, 6).addClass('visible');
			$container.masonry('layout');
	});

	// Events Page
	$container.masonry({
			itemSelector: '.single-event'
	});

	// Buy Tickets Form
	$(".increase-ticket").click(function() {
			var $n = $(this)
					.parent(".number-of-ticket")
					.parent(".flex")
					.parent(".ticket-row")
					.find(".ticket-count");
			$n.val(Number($n.val())+1 );
	});

	$(".decrease-ticket").click(function() {
			var $n = $(this)
					.parent(".number-of-ticket")
					.parent(".flex")
					.parent(".ticket-row")
					.find(".ticket-count");
			var amount = Number($n.val());
			if (amount > 0) {
					$n.val(amount-1);
			}
	});

	$(".clear-ticket-count").on( 'click', function() {
			var $count = $('.ticket-count');
			$count.val('1');
	});

	// Tabs
	$(function() {
			$('.tab-content:first-child').show();

			$('.tab-nav').bind('click', function(e) {
					$this = $(this);
					$tabs = $this.parent().parent().next();
					$target = $($this.data("target"));
					$this.siblings().removeClass('active');
					$target.siblings().css("display", "none");
					$this.addClass('active');
					$target.fadeIn("slow");
			});

			$('.tab-nav:first-child').trigger('click');
	});

	// Accordion & Toggle
	$('.accordion-wrap.type-accordion').collapsible({
			accordion: true,
			contentOpen: 0,
			arrowRclass: 'arrow-r',
			arrowDclass: 'arrow-d'
	});

	$('.accordion-wrap .entry-title').on('click', function() {
			$('.accordion-wrap .entry-title').removeClass('active');
			$(this).addClass('active');
	});

	// Circular Progress Bar
	$('#festivals').circleProgress({
			startAngle: -Math.PI / 4 * 2,
			value: 0.75,
			size: 124,
			fill: {
					gradient: ["#581687", "#ab00ff"]
			}
	}).on('circle-animation-progress', function(event, progress) {
			$(this).find('strong').html(Math.round(75 * progress) + '<i>%</i>');
	});

	$('#concerts').circleProgress({
			startAngle: -Math.PI / 4 * 2,
			value: 0.83,
			size: 124,
			fill: {
					gradient: ["#581687", "#ab00ff"]
			}
	}).on('circle-animation-progress', function(event, progress) {
			$(this).find('strong').html(Math.round(83 * progress) + '<i>%</i>');
	});

	$('#conference').circleProgress({
			startAngle: -Math.PI / 4 * 2,
			value: 0.25,
			size: 124,
			fill: {
					gradient: ["#581687", "#ab00ff"]
			}
	}).on('circle-animation-progress', function(event, progress) {
			$(this).find('strong').html(Math.round(25 * progress) + '<i>%</i>');
	});

	$('#new_artists').circleProgress({
			startAngle: -Math.PI / 4 * 2,
			value: 0.82,
			size: 124,
			fill: {
					gradient: ["#581687", "#ab00ff"]
			}
	}).on('circle-animation-progress', function(event, progress) {
			$(this).find('strong').html(Math.round(82 * progress) + '<i>%</i>');
	});

	// Counter
	$(".start-counter").each(function () {
			var counter = $(this);

			counter.countTo({
					formatter: function (value, options) {
							return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
					}
			});
	});

	// Back to Top
	if ( $( '.back-to-top' ).length) {
			var scrollTrigger = 500, // px
					backToTop = function () {
							var scrollTop = $(window).scrollTop();
							if (scrollTop > scrollTrigger) {
									$('.back-to-top').addClass('show');
							} else {
									$('.back-to-top').removeClass('show');
							}
					};
			backToTop();
			$(window).on('scroll', function () {
					backToTop();
			});
			$('.back-to-top').on('click', function (e) {
					e.preventDefault();
					$('html,body').animate({
							scrollTop: 0
					}, 800);
			});
	}

})(jQuery);

$(document).ready(function() {
	// Function to check if an element is in viewport
	function isInViewport(element) {
			var bounding = element.getBoundingClientRect();
			return (
					bounding.top >= 0 &&
					bounding.left >= 0 &&
					bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
					bounding.right <= (window.innerWidth || document.documentElement.clientWidth)
			);
	}

	// Function to fade in elements when they come into view
	function fadeInOnScroll() {
			$('.fade-in').each(function() {
					if (isInViewport(this)) {
							$(this).addClass('visible');
					}
			});
	}

	// Fade in elements on page load
	fadeInOnScroll();

	// Fade in elements when scrolling
	$(window).on('scroll', function() {
			fadeInOnScroll();
	});
});
