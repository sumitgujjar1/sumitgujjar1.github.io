$(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll > 600) {
	    $("#topnav").css("background" , "black");
	  }

	  else{
		  $("#topnav").css("background" , "rgba(0,0,0,0.7");  	
	  }
  })
});