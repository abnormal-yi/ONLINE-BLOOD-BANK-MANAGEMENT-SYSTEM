<?php
/*
 * File: index.php
 * Purpose: Home/Landing page for OBBMS
 * Main entry point featuring a banner carousel about blood donation awareness,
 * mission/vision section, customer testimonials, and a feedback form.
 * Key functionality: Static informational landing page with navigation.
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
      <title>OBBMS</title>
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
      <div>
        <img src="images/banner1.png" width="100%" height="23vh" >
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
            <a class="nav-item nav-link" href="services.php">SERVICES</a>
            <a class="nav-item nav-link" href="about.php">ABOUT</a>
            <a class="nav-item nav-link" href="login.php">ACCOUNT</a>
            <a class="nav-item nav-link" href="">LOCATION</a>
            <a class="nav-item nav-link" href="contact.php">CONTACT US</a>
          
          </div>
        </div>
      </nav>
      <!-- header section end -->

      <!-- banner section start -->
      <div class="banner_section">
        <section class="slide-wrapper">
          <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                      <li data-target="#myCarousel" data-slide-to="3"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                      <div class="carousel-item active">
                          <div class="container">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="image_1"><img src="images/Dodoma.jpg"></div>
                              </div>
                              <div class="col-md-6">
                                <h2 class="achive_text">ABOUT DODOMA DAMU SALAMA</h2>
                                <p class="best_text"> Dodoma damu salama</p>
                                <p class="lorem_text"> In Dodoma Region, blood collection, safety and management is an activity that is carried out by Dodoma Damu Salama branch of Tanzania National Blood Transfusion Service (NBTS) under the Ministry of Health (MOH), mandated to collect blood from voluntary non remurated blood donors (VNRBDs). .</p>
                                <div class="appointment_bt"><a href="post1page.html">Read More</a></div>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="carousel-item">
                          <div class="container">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="image_1"><img src="images/Other Images/people spawn 1.jpg"></div>
                              </div>
                              <div class="col-md-6">
                                <h2 class="achive_text">ABOUT BLOOD DONNATION</h2>
                                <p class="best_text">Why Donate?</p>
                                <p class="lorem_text">We donate to help people who need a blood transfusion. The act of blood donation produces a feeling of goodwill and a wonderful sense of achievement </p>
                                <div class="appointment_bt"><a href="post2page.html">Read More</a></div>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="carousel-item">
                          <div class="container">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="image_1"><img src="images/Other Images/educators.jpg"></div>
                              </div>
                              <div class="col-md-6">
                                <h2 class="achive_text">AWERNESS ON BLOOD DONNATION</h2>
                                <p class="best_text">Be Awere About Blood Donnation</p>
                                <p class="lorem_text"> World blood donor day take place on 14 june each year. The aim is to raise global awerness of the need for safe blood products for transfusion and the critical contribution
                                  voluntary, unpaid blood donors make to national health system. </p>
                                <div class="appointment_bt"><a href="post3page.html">Read More</a></div>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="carousel-item">
                          <div class="container">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="image_1"><img src="images/Other Images/sp1.jpg"></div>
                              </div>
                              <div class="col-md-6">
                                <h2 class="achive_text"> FACTS ABOUT BLOOD AND BLOOD TYPES</h2>
                                <p class="best_text">Blood Types and Transfusion
                                <p class="lorem_text">Now you know how your blood type will help recipients, please schedule an appointment to donate today </p>
                                <div class="appointment_bt"><a href="post4page.html">Read More</a></div>
                              </div>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </section>
      </div>
      <!-- banner section end -->

      <!-- about section start -->
      <div class="about_section layout_padding">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p class="unique_text">About us</p>
              <h1 class="years_text">MISSION & VISION</h1>
              <p class="ipsum_text"></p><h2>MISSION</h2>Our mission is to assist Dodoma Damu salama center  to keep blood donor records, monitor blood bank data, blood stock, donor list, planning and share information with other hospitals in a more confidential, convenient and secure way using modern technology.
<p></P>
<h3>VISION</h3>Our vission is to ensure provision of sufficient safe blood to save lives in Dodoma
              <div class="read_more_bt"><a href="about.php">READ MORE</a></div>
            </div>
            <div class="col-md-6">
              <div class="aa"><img src="images/aa.jpg"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- about section end -->

      <!-- client section start --> 
      <div class="client_section layout_padding">
        <h1 class="client_taital">What Our Customers say</h1>
        <div class="container">
          <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-6">
                    <div class="alex_bg">
                      <h3 class="alex_text">John </h3>
                      <p class="reader_text"> well done system developer!!!</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="alex_bg">
                      <h3 class="alex_text">Haruni </h3>
                      <p class="reader_text">Accurate report will be generated...Keep it up system Developers</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-6">
                    <div class="alex_bg">
                      <h3 class="alex_text">Seif</h3>
                      <p class="reader_text"> Its good system which help we system user to create an account for </p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="alex_bg">
                      <h3 class="alex_text">M Leo</h3>
                      <p class="reader_text"> Well done!</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-6">
                    <div class="alex_bg">
                      <h3 class="alex_text">Mr Deus</h3>
                      <p class="reader_text"> It amazing system for the dodoma dam salam</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="alex_bg">
                      <h3 class="alex_text">Jane</h3>
                      <p class="reader_text">Woow</p>
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

      <!-- contact section start -->
      <div class="contact_section layout_padding">
        <div class="container">
          <h1 class="contact_taital">Feedback</h1>
          <div class="contact_section_2">
            <div class="row">
              <div class="col-md-6">
                <div class="mail_section">
                  <input type="text" class="mail_text" placeholder="Name" name="text">
                  <input type="text" class="mail_text" placeholder="Email" name="text">
                  <input type="text" class="mail_text" placeholder="Phone Number" name="text">
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
      <!-- contact section end -->

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
          <p class="copyright_text">Copyright 2022 All Right Reserved By group 2</a></p>
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