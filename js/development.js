$(document).ready(function () {
   
  $("#owl-demo").owlCarousel({
    items: 3
    , loop: true,
    slideSpeed : 500
    , nav: false
    , autoplay: true
    , autoplayTimeout: 6000,
    autoplayHoverPause: true 
    , responsiveClass: true
    , responsive: {
        0: {
            items: 1
        , }
        , 768: {
            items: 2
        , }
        , 992: {
            items: 3
        , }
        }});
});