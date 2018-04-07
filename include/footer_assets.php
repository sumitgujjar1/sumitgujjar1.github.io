<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/contact_me.js"></script>
<script src="js/owl.carousel.min.js"></script>
   <!-- Custom Theme JavaScript -->
   <script src="js/script.js"></script>
   <script>
      $(window).load(function() { // makes sure the whole site is loaded
      	$('#status').fadeOut(); // will first fade out the loading animation
      	$('#preloader').delay(350).fadeOut('slow');
          // will fade out the white DIV that covers the website.
      	$('body').delay(350).css({'overflow':'visible'});
      })
</script> 
<script>
  function initMap() {
    var uluru = {lat: 28.537591, lng:  77.121809};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 16,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
  }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5fK0dqPkg-5qjZko3q67M8Ed4xfvMOzQ&callback=initMap">
</script>