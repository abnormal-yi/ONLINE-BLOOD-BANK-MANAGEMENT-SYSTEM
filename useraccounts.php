<?php
/**
 * useraccounts.php
 *
 * Static login and sign-up template page (front-end only).
 *
 * Key functionality: Renders a static HTML template with login and
 * sign-up form placeholders. This is a design mockup; no backend
 * processing logic is implemented on this page.
 */
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Log In</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <!-- body -->
   <body>
      <!-- header top section start -->
      <div class="header_top">
        <div class="container">
          <div class="row">
            <div class="col-sm-5">
              <div class="contact_main">
                <div class="contact_left">
                  <div class="call_text"><a href="#"><img src="images/call-icon.png"><span class="call_text_left">+255 12345678</span></a></div>
                </div>
                <div class="contact_right">
                  <div class="call_text">Make an appointment</div>
                </div>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
            </div>
            <div class="col-sm-5">
              <div class="contact_main">
                <div class="contact_left">
                  <div class="call_text"><a href="#"><img src="images/mail-icon.png"><span class="call_text_left">B-Bank@gmail.com</span></a></div>
                </div>
                <div class="contact_right">
                  <div class="call_text"><a href="#"><img src="images/map-icon.png"><span class="call_text_left">+255 12345678</span></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- header top section end -->
      <!-- header section start -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="index.html">HOME</a>
            <a class="nav-item nav-link" href="index.html">SOMETHING</a>
            <a class="nav-item nav-link" href="services.html">SERVICES</a>
            <a class="nav-item nav-link" href="about.html">ABOUT</a>
            <a class="nav-item nav-link" href="pricing.html">PRICING</a>
            <a class="nav-item nav-link" href="contact.html">CONTACT US</a>
            <a class="nav-item nav-link" href="signup.html">SIGN UP</a>  
          </div>
        </div>
      </nav>
      <!-- header section end -->

<!-- sing up section start -->
<div class="contact_section layout_padding">
  <div class="container">
    <h1 class="contact_taital">Log In</h1>
    <div class="contact_section_2" >
      <div class="row">
        <div class="col-md-6">
          <div class="mail_section">
            <input type="text" class="mail_text" placeholder="Email" name="text">
            <input type="password" class="mail_text" placeholder="Password" name="text">
            <div class="send_bt"><a href="#">LOG IN</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- sign up section end -->


<!-- sing up section start -->
<div class="contact_section layout_padding">
  <div class="container">
    <h1 class="contact_taital">Sign Up</h1>
    <div class="contact_section_2">
      <div class="row">
        <div class="col-md-6">
          <div class="mail_section">
            <input type="text" class="mail_text" placeholder="First Name" name="text">
            <input type="text" class="mail_text" placeholder="Last Name" name="text">
            <input type="text" class="mail_text" placeholder="Email" name="text">
            <input type="password" class="mail_text" placeholder="Password" name="text">
            <input type="password" class="mail_text" placeholder="Confirm Password" name="text">
            <input type="text" class="mail_text" placeholder="Phone Number" name="text">
            <div class="send_bt"><a href="#">SIGN UP</a></div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- sign up section end -->


      <!-- footer section start -->
      <div class="footer_section layout_padding">
        <div class="container">
          <div class="social_icon">
            <ul>
              <li><a href="#"><img src="images/fb-icon.png"></a></li>
              <li><a href="#"><img src="images/twitter-icon.png"></a></li>
              <li><a href="#"><img src="images/linkdin-icon.png"></a></li>
              <li><a href="#"><img src="images/instagram-icon.png"></a></li>
            </ul>
          </div>
          <p class="lorem_ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
        </div>
      </div>
      <!-- footer section end -->

      <!-- copyright section start -->
      <div class="copyright_section">
        <div class="container">
          <p class="copyright_text">Copyright 2022 All Right Reserved By group #2</a></p>
        </div>
      </div>
      <!-- copyright section end -->

   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>

   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>

   <!-- javascript --> 
   <script src="js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

   <script>
     $('#myCarousel').carousel({
            interval: false
        });

        //scroll slides on swipe for touch enabled devices
        $("#myCarousel").on("touchstart", function(event){

            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){

                var yMove = event.originalEvent.touches[0].pageY;
                if( Math.floor(yClick - yMove) > 1 ){
                    $(".carousel").carousel('next');
                }
                else if( Math.floor(yClick - yMove) < -1 ){
                    $(".carousel").carousel('prev');
                }
            });
            $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
            });
        });
   </script>
   </body>
   </html>