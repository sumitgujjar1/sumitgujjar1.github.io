
var $ = jQuery.noConflict();
// Page Loader
$(window).load(function () {
    
    "use strict";
	$('#loader').fadeOut();
});
    
////------- Testimonials Carousel
	
var testimonial = $("#testimonial-carousel");

testimonial.owlCarousel({
	navigation : true,
	pagination: true,
	slideSpeed : 500,
	stopOnHover: true,
	autoPlay: 3000,
	singleItem: true,
	transitionStyle : "fade",
	navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
});

var testimonial2 = $("#testimonial-carousel2");

testimonial2.owlCarousel({
    slideSpeed : 500,
    items:5,
    navigation : false,
    pagination : false,
    autoPlay:true,
	autoPlay:3000,
	transitionStyle : "fade",
	responsive:{
        0:{
            items:3,
        },
        768:{
            items:4,
        },
        992:{
            items:5,
        }

    }
});