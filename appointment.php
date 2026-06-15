<?php
/**
 * appointment.php
 *
 * Static appointment scheduling page for blood donation events.
 *
 * Key functionality: Displays a contact form and date/time picker
 * for users to schedule donation appointments. This is a front-end
 * template only; no backend processing is implemented.
 */
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      

   
   </head>
   <!-- body -->
   <body>

<div>
   
</div>

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
                  <div class="call_text">Donate blood to save a life</div>
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
            <a class="nav-item nav-link" href="index.php">HOME</a>
            <a class="nav-item nav-link" href="index.php">SOMETHING</a>
            <a class="nav-item nav-link" href="services.php">SERVICES</a>
            <a class="nav-item nav-link" href="about.php">ABOUT</a>
            <a class="nav-item nav-link" href="contact.php">CONTACT US</a>
            <a class="nav-item nav-link" href="login.php">ACCOUNT</a>  
          </div>
        </div>
      </nav>
      <!-- header section end -->

<!-- sing up section start -->
<div class="contact_section layout_padding">
  <div class="container">
    <h1 class="contact_taital">Set up an appointment</h1>
    <div class="contact_section_2">
      <div class="row">
        <div class="col-md-6">
          <div class="mail_section">
            <input type="text" class="mail_text" placeholder="Name" name="text">
            <input type="text" class="mail_text" placeholder="Email" name="text">
            <input type="text" class="mail_text" placeholder="Phone Number" name="phonenumber">
            <input type="text" class="mail_text" placeholder="Address" name="Location">
            <SPAn></SPAn>
            <p >Start Date
            <input type="date" class="text" placeholder="Start Date" name="startdate">
            End Date
            <input type="date" class="text" placeholder="End Date" name="enddate">
            </p>
            <p>Start Time
            <input type="time" class="text" placeholder="Start Time" name="starttime">
            End Time
            <input type="time" class="text" placeholder="End Time" name="endtime">
            </p>
            <div class="send_bt"><a href="#">SET UP</a></div>
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