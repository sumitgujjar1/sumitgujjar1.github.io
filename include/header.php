<link rel="stylesheet" href="css/header.css">
<!-- <div id="preloader">
        <img class="gif" src="./logo_loader.gif" alt="gif">
    </div> -->
<header id="topnav">
        <div class="container">
           <div class="logo">
              <img src="images/logo_white.png" alt="escalelogo">
           </div>
           <nav>
               <div class="navigation">
                  <ul>
                      <li><a href="index.php">Home</a></li>
                      <li><a href="about.php">About Us</a></li>
                      <li class="open_megamenu" ><span class="open_menu" onclick="open_menu()" >What We Do <i class="fa fa-angle-down"></i></span>
                        <span class="close_menu" onclick="close_menu()" >What We Do <i class="fa fa-angle-up"></i></span>

                      </li>
                      <li><a href="process.php">Process</a></li>
                      <li><a href="portfolio.php">Portfolio</a></li>
                      <li><a href="#blog">Blog</a></li>
                      <li><a href="contact.php">Contact Us</a></li>
                      <li onclick="openNav()"  ><span  class="open_nav" >&#9776;</span></li>
                  </ul>
               </div>
          </nav>
          <nav>
              <div class="opennavbar" >
                    <li onclick="openNav1()"><span  class="open_nav1" >&#9776;</span></li>
              </div>
          </nav>
        </div>
    </header>
    <div class="megamenu">
            <ul>
                <li class="submenu1"><a class="submenu_head" href="#">Development</a>
                  <ul class="submenu">
                      <li><a href="web_development.php">Web Development</a></li>
                      <li><a href="mobile_app_development.php">Mobile App Development</a></li>
                      <li><a href="erp_solutions.php">ERP Solutions</a></li>
                      <li><a href="e_commerce.php">E-Commerce</a></li>

                   </ul>

                </li>
                <li class="submenu2"><a class="submenu_head" href="#">Marketing</a>
                   <ul class="submenu">
                           <li><a href="digital_marketing.php">Digital Marketing</a></li>
                           <li><a href="viral_marketing.php">Viral Marketing</a></li>
                           <li><a href="affiliate_marketing.php">Affiliate Marketing</a></li>
                           <li><a href="content_development.php">Content Development</a></li>

                        </ul>
                </li>
                <li class="submenu3"><a class="submenu_head" href="#">Consultancy</a>

                   <ul class="submenu">
                           <li><a href="product_consultancy.php" >Product Consultancy</a></li>
                           <li><a href="brand_consultancy.php" >Brand Consultancy</a></li>
                       </ul>
                </li>
            </ul>
           </div>
    <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="sidenav_menu">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li class="open_megamenu" ><span class="open_menu1" onclick="open_megamenu1()" >What We Do <i class="fa fa-angle-down"></i></span>
                    <span class="close_menu1" onclick="close_megamenu1()" >What We Do <i class="fa fa-angle-up"></i></span>
                    <ul class="megamenu1">
                        <li ><a class="category_head" href="#" onclick="open_submenu7()">Development</a>
                            <ul class="submenu7">
                                <li><a href="web_development.php">Web Development</a></li>
                                <li><a href="mobile_app_development.php">Mobile App Development</a></li>
                                <li><a href="blockchain_development.php">Blockchain Development</a></li>
                                <li><a href="erp_solutions.php">ERP Solutions</a></li>
                                <li><a href="e_commerce.php">E-Commerce</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="category_head" onclick="open_submenu4()">Marketing</a>
                            <ul class="submenu4">
                                <li><a href="digital_marketing.php">Digital Marketing</a></li>
                                <li><a href="viral_marketing.php">Viral Marketing</a></li>
                                <li><a href="affiliate_marketing.php">Affiliate Marketing</a></li>
                                <li><a href="content_development.php">Content Development</a></li>
                            </ul>
                        </li>
                        <li><a href="#"  class="category_head" onclick="open_submenu5()">Consultancy</a>
                            <ul class="submenu5">
                                <li><a href="product_consultancy.php" >Product Consultancy</a></li>
                                <li><a href="brand_consultancy.php" >Brand Consultancy</a></li>
                            </ul>
                        </li>
                    </ul>
                    
                
                </li>
                <li><a href="process.php">Process</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>

        </div>

    <h4 class="freeaudit">Get Free Audit</h4>
    <form class="contact-form" id="contactForm" name="contact-form" action="sendemail.php" method="POST">


                    <div class="form-group">
                        <label class="sr-only" for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                    </div>


                    <div class="form-group">
                        <label class="sr-only" for="email">Email</label>
                          <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                    </div>


            <div class="form-group">
                <label class="sr-only" for="subject">Subject</label>
                  <input list="services" type="text" name="subject" class="form-control" id="subject" placeholder="Select">


                    <datalist id="services">
                            <select>
                                    
                                      <option value="Web Development">Web Development</option>
                                      <option value="Mobile App Development">Mobile App Development</option>
                                      <option value="Blockchain Development">Blockchain Development</option>
                                      <option value="ERP Solutions">ERP Solutions</option>
                                      <option value="E-Commerce">E-Commerce</option>

                                            <option value="Digital Marketing">Digital Marketing</option>
                                            <option value="Viral Marketing">Viral Marketing</option>
                                            <option value="Affiliate Marketing">Affiliate Marketing</option>
                                            <option value="Content Development">Content Development</option>

                                                <option value="Product Consultancy">Product Consultancy</option>
                                                <option value="Brand Consultancy">Brand Consultancy</option>

                                  </select>
                    </datalist>

            </div>
            <div class="form-group">
                <label class="sr-only" for="message">Message</label>
                <textarea name="message" class="form-control" id="message" rows="5" placeholder="Your Message"></textarea>
            </div>
            <div>
                <button type="submit" name="submit" id="btn_free" class="btn btn-primary input-btn"><span>Submit</span></button>
            </div>
        </form>
</div>

    <script>
    $(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll > 500) {
	    $("#topnav").css("background" , "black");
	  }

	  else{
		  $("#topnav").css("background" , "rgba(0,0,0,0.7)");  	
	  }
  })
})
       function open_menu(){
           document.querySelector(".megamenu").style.display = "block";
           document.querySelector(".open_menu").style.display = "none";
           document.querySelector(".close_menu").style.display = "inline";
       }
       function open_megamenu1(){
           document.querySelector(".megamenu1").style.display = "block";
           document.querySelector(".close_menu1").style.display = "inline";
           document.querySelector(".open_menu1").style.display= "none";
   
       }
       function close_menu(){
           document.querySelector(".megamenu").style.display ="none";
           document.querySelector(".close_menu").style.display = "none";
           document.querySelector(".open_menu").style.display = "inline";
        }
        function close_megamenu1(){
           document.querySelector(".megamenu1").style.display ="none";
           document.querySelector(".close_menu1").style.display = "none";
           document.querySelector(".open_menu1").style.display= "inline";
          
        }     
    function openNav() {
        document.getElementById("mySidenav").style.width = "320px";
        document.querySelector(".open_nav").style.color = "transparent";
         $("body").css("overflow", "hidden");
 

    }
    function openNav1() {
        document.getElementById("mySidenav").style.width = "300px";
        document.querySelector(".open_nav1").style.display = "none";        
        $("body").css("overflow", "hidden");
        
    }
    function open_submenu4(){
        document.querySelector(".submenu4").style.display = "block";
        document.querySelector(".submenu5").style.display = "none";
        document.querySelector(".submenu7").style.display = "none";
    }
    function open_submenu5(){
        document.querySelector(".submenu5").style.display = "block";
        document.querySelector(".submenu4").style.display = "none";
        document.querySelector(".submenu7").style.display = "none";
    }
    function open_submenu7(){
        // document.querySelector(".submenu1").classList.toggle("show");
        document.querySelector(".submenu7").style.display = "block";
        document.querySelector(".submenu4").style.display = "none";
        document.querySelector(".submenu5").style.display = "none";
    }
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.querySelector(".open_nav").style.color = "white";
        document.querySelector(".open_nav1").style.display = "inline";
        $("body").css("overflow", "visible");
    }
    
    </script>
