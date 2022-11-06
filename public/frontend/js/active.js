/*********************************************************************************

	Template Name: Karbar - Multipurpose Bootstrap 4 Template
	Template URI: https://themeforest.net/user/themes-hub   
	Description: Karbar is a best templete for your corporate/business website which comes with unique design and user friendly code.  
	Author: Themes-Hub
	Author URI: https://hastech.company/
	Version: 1.0

	Note: This is active js. Plugins activation code here.

**********************************************************************************/

/*===============================================================================

	[ INDEX ]
	|
	|___Scroll Animation Active
	|___Scroll Up Activation
	|___Carousel Activation
	|	|___Banner Slider Active
	|	|___Banner Slider active with navigation
	|	|___Testimonial style 1 Slider Active
	|	|___Testimonial style 2 Slider Active
	|	|___Sidemenu testimonial slider active
	|	|___Testimonial style 3 Slider Active
	|	|___Testimonial style 4 Slider Active
	|	|___Testimonial style 5 Slider Active
	|	|___Testimonial style 6 Slider Active
	|	|___Brand Logo Slider Active
	|	|___Service Slider Active
	|	|___Portfolios Slider Active
	|	|___Single Portfolio Gallery Slider Active
	|	|___Single Portfolio Related portfolios slider
	|	|___Gallery Blog slider
	|	|___Blog details gallery slider
	|	|___Service Details Image slider
	|
	|___Lightgallery Activations
	|	|___Video Area video popup
	|	|___Video blog video popup
	|	|___Videobox video popup
	|	|___Video blog details video popup
	|	|___Blog details image popup
	|
	|___Portfolio Active
	|	|___Portfolio popup with zoom button
	|	|___Portfolio minimal 1 popup
	|	|___Portfolio minimal 2 popup
	|	|___Portfolio Details Image Popup
	|
	|___CounterUp Active
	|___Mobile Menu
	|___Mobile Menu Minimal
	|___Parallax Active
	|___Instafeed Activation
	|___Particle Activation
	|___Tilter Activation
	|___Youtube Background Activation
	|
	[END INDEX ]

================================================================================*/

(function ($) {
	'use strict';


	/* Scroll Animation Active */
	//new WOW().init();



	/* Scroll Up Activation */
	// $.scrollUp({
	// 	scrollText: '<i class="icofont icofont-rounded-up"></i>',
	// 	easingType: 'linear',
	// 	scrollSpeed: 900,
	// 	animation: 'slide'
	// });




	/* Carousel Activation */
	// Banner Slider Active
	// $('.banner-slider-active').slick({
	// 	dots: false,
	// 	infinite: true,
	// 	speed: 500,
	// 	slidesToShow: 1,
	// 	slidesToScroll: 1,
	// 	autoplay: true,
	// 	autoplaySpeed: 6000,
	// 	adaptiveHeight: true,
	// 	arrows: false,
	// 	pauseOnHover: false,
	// });




	// Banner Slider active with navigation 
	// $('.banner-slider-active-with-navigation').slick({
	// 	dots: false,
	// 	infinite: true,
	// 	speed: 500,
	// 	slidesToShow: 1,
	// 	slidesToScroll: 1,
	// 	autoplay: false,
	// 	adaptiveHeight: true,
	// 	arrows: true,
	// 	prevArrow: '<span class="cr-slider-nav cr-slider-nav-left"><i class="icofont icofont-simple-left"></i></span>',
	// 	nextArrow: '<span class="cr-slider-nav cr-slider-nav-right"><i class="icofont icofont-simple-right"></i></span>'
	// });




	// Testimonial style 1 Slider Active
	$(document).ready(function() {
        $(".testimonial_section_box_active").owlCarousel({
            loop: true,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
            }
        });

		$(".software_technology_active").owlCarousel({
			loop: true,
			nav: false,
			margin: 10,
			dots: true,
			autoplay: true,
			autoplayTimeout: 3000,
			autoplayHoverPause: true,
			responsive: {
			0: {
				items: 2
			},
			600: {
				items: 3
			},
			1000: {
				items: 3
			}
			}
		});
    });

	/* Lightgallery Activations */
	// Video Area video popup
	// $('.video-area-inner').lightGallery({
	// 	selector: '.video-popup-trigger'
	// });




	// Video blog video popup
	// $('.pg-blog-video').lightGallery({
	// 	selector: '.pg-blog-thumb a'
	// });




	// Videobox video popup
	// $('.video-box').lightGallery({
	// 	selector: 'a.play-button'
	// });



	// Video blog details video popup
	// $('.blog-video').lightGallery({
	// 	selector: '.blog-thumb a'
	// });



	// Blog details image popup
	// $('.blog-details-thumb').lightGallery({
	// 	selector: 'img',
	// 	thumbnail: false
	// });




	/* Portfolio Active */
	var isotopFilter = $('.portfolio-filters');
	var isotopGrid = $('.portfolios:not(.portfolios-slider-active)');
	var isotopGridItemSelector = $('.portfolio-single');
	var isotopGridItem = '.portfolio-single';

	isotopFilter.find('button:first-child').addClass('active');




	// Portfolio popup with zoom button
	// $('.portfolios-zoom-button-holder').lightGallery({
	// 	selector: '.portfolio-zoom-trigger',
	// 	thumbnail: false
	// });


	// Portfolio minimal 1 popup
	// $('.portfolios-minimal-1').lightGallery({
	// 	selector: '.portfolio',
	// 	thumbnail: true
	// });



	// Portfolio minimal 2 popup
	// $('.portfolios-minimal-2').lightGallery({
	// 	selector: '.portfolio',
	// 	thumbnail: true
	// });



	// Portfolio Details Image Popup
	// $('.pg-portfolio-images').lightGallery({
	// 	selector: 'a',
	// 	thumbnail: true
	// });



	/* CounterUp Active */
	$('.counter-active').counterUp({
		delay: 10,
		time: 1000
	});



	/* Mobile Menu */
	$('.header-style-1 nav.menu, .header-style-2 nav.menu, .header-style-3 nav.menu').meanmenu({
		meanMenuClose: '<i class="icofont icofont-close"></i>',
		meanMenuCloseSize: '18px',
		meanScreenWidth: '991',
		meanExpandableChildren: true,
		meanMenuContainer: '.mobile-menu',
		onePage: true
	});




	/* Mobile Menu Minimal */
	$('.header-minimal-1 nav.menu, .header-minimal-2 nav.menu, .header-minimal-3 nav.menu').meanmenu({
		meanMenuClose: '<i class="icofont icofont-close"></i>',
		meanMenuCloseSize: '18px',
		meanScreenWidth: '991',
		meanExpandableChildren: true,
		meanMenuContainer: '.mobile-menu',
		onePage: true
	});




	/* Parallax Active */
	$('.bg-parallax').scrolly({
		bgParallax: true
	});



	/* Instafeed Activation */
	if ($('#sidebar-instagram-feed').length) {
		var userFeed = new Instafeed({
			get: 'user',
			userId: 6665768655,
			accessToken: '6665768655.1677ed0.313e6c96807c45d8900b4f680650dee5',
			target: 'sidebar-instagram-feed',
			resolution: 'thumbnail',
			limit: 6,
			template: '<li><a href="{{link}}" target="_new"> <img src="{{image}}" /><ul class="likes-comments"><li><i class="icofont icofont-heart"></i><span>{{likes}}</span></li><li><i class="icofont icofont-speech-comments"></i><span>{{comments}}</span></li></ul></a></li>',
		});
		userFeed.run();
	}



	/* Particle Activation */
	if ($('#particles-js').length) {
		particlesJS.load('particles-js', 'particles.json', function () {
			console.log('callback - particles.js config loaded');
		});
	}



	/* Tilter Activation */
	if ($('[data-tilt]').length) {
		$('[data-tilt]').tilt({
			perspective: 800,
		});
	}


	/* Youtube Background Activation */
	if ($('.youtube-bg').length) {
		$('.youtube-bg').YTPlayer({
			containment: '.youtube-bg',
			autoPlay: true,
			loop: true,
			realfullscreen: true,
			showControls: false,
			mobileFallbackImage: '../images/bg/11.jpg',
		});
	}



})(jQuery);