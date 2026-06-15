<?php
/**
 * services.php
 *
 * Services listing page showcasing OBBMS features.
 *
 * Key functionality: Displays the site header, service cards (Donation
 * Appointments, About Blood Donation, Donation History), customer
 * testimonials carousel, feedback form, and membership prompt.
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
      <title>Services</title>
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
  <?php require_once('header.php');?>
      <!-- header section end -->
      <!-- service section start -->
      <!-- service section start -->
      <div class="service_section layout_padding">
        <div class="container">
          <h1 class="services_text">Our Services</h1>
          <p class="dolor_text">The services provided by our website. </p>
          <div class="service_section_2">
            <div class="row">
              <div class="col-sm-4">
                <div class="image_3"><img src="images/Appointment.png"></div>
                <h1 class="classic_text">DONATION APPOINTMENTS</h1>
                <p class="consectetur_text">Set up for blood donation appointment for organisations like Schools, offices collages, Universities, Banks and etc.</p>
                <div class="read_bt_main">
                  <div class="read_bt"><a href="appointment.php">SET UP NOW</a></div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="image_3"><img src="images/BloodBankn.png"></div>
                <h1 class="classic_text">ABOUT BLOOD DONATION</h1>
                <p class="consectetur_text">Get Educated the importance of donating blood, and how it can help the hospitals.</p>
                <div class="read_bt_main">
                  <div class="read_bt"><a href="post3page.html">Read More</a></div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="image_3"><img src="images/Report.png"></div>
                <h1 class="classic_text">DONATION HISTORY</h1>
                <p class="consectetur_text">For users with an account, they can check their donation history.</p>
                <div class="read_bt_main">
                  <div class="read_bt"><a href="#">Read More</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- service section end -->

      <!-- clie
      <!-- service section end -->
      
      <!-- client section start --> 
      <div class="client_section layout_padding">
        <h1 class="client_taital">What Our Customers Say</h1>
        <div class="container">
          <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-6">
                    <div class="alex_bg">
                      <h3 class="alex_text">John Wa Project</h3>
                      <p class="reader_text">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="alex_bg">
                      <h3 class="alex_text">Haruni mgogo</h3>
                      <p class="reader_text">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-6">
                    <div class="alex_bg">
                      <h3 class="alex_text">Cholo Master</h3>
                      <p class="reader_text">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="alex_bg">
                      <h3 class="alex_text">Bila kumsahau CR</h3>
                      <p class="reader_text">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-6">
                    <div class="alex_bg">
                      <h3 class="alex_text">Bwana Deus</h3>
                      <p class="reader_text">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="alex_bg">
                      <h3 class="alex_text">Mtu Flani ivi</h3>
                      <p class="reader_text">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
              <i class="fa fa-long-arrow-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
              <i class="fa fa-long-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- client section end -->

      
<!-- sing up section start -->
<div class="contact_section layout_padding">
  <div class="container">
    <h1 class="contact_taital">Give Us Your Feedback</h1>
    <div class="contact_section_2">
      <div class="row">
        <div class="col-md-6">
          <div class="mail_section">
            <input type="text" class="mail_text" placeholder="First Name" name="text">
            <input type="text" class="mail_text" placeholder="Last Name" name="text">
            <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="Message"></textarea>
            <div class="send_bt"><a href="#">SEND</a></div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- sign up section end -->


      <!-- join us section start -->
      <div class="join_section">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1 class="member_text">Want To Be A Member? Join With Us</h1>
            </div>
            <div class="col-md-6">
              <div class="join_bt"><a href="#">ACCOUNT</a></div>
            </div>
          </div>
        </div>
      </div>
      <!-- join us section end -->
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