<?php
/**
 * newindex.php
 *
 * Landing/homepage with carousel slider, services overview, about section,
 * testimonials, and contact form.
 *
 * Key functionality: Presents the public-facing homepage with a Bootstrap
 * carousel, service highlights, customer testimonials, a contact section,
 * and a membership call-to-action. Purely front-end with no PHP processing.
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
      <div class="header_top">
        <div class="container">
          <div class="row">
            <div class="col-sm-5">
              <div class="contact_main">
                <div class="contact_left">
                  <div class="call_text"><a href="#"><img src="images/call-icon.png"><span class="call_text_left">+255 1234567890</span></a></div>
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
                  <div class="call_text"><a href="#"><img src="images/mail-icon.png"><span class="call_text_left">obbms@gmail.com</span></a></div>
                </div>
                <div class="contact_right">
                  <div class="call_text"><a href="#"><img src="images/map-icon.png"><span class="call_text_left">Location is unkown</span></a></div>
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
            <a class="nav-item nav-link" href="login.html">ACCOUNT</a>
            <a class="nav-item nav-link" href="contact.html">CONTACT US</a>
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
                                <div class="image_1"><img src="images/Other Images/Leaders.jpg"></div>
                              </div>
                              <div class="col-md-6">
                                <h1 class="achive_text">Story Flani MATATA sana ;)</h1>
                                <p class="best_text">The best place for your hairstyle</p>
                                <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
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
                                <h1 class="achive_text">Alafu kastory kingine cha kukuvutia kidogo</h1>
                                <p class="best_text">The best place for your hairstyle</p>
                                <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
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
                                <h1 class="achive_text">Labda tutakuelimisha kidogo kuhusu kuchangia damu</h1>
                                <p class="best_text">Sema shuleni mmekimbia apah ndo mtaelewa ???</p>
                                <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
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
                                <h1 class="achive_text">Kuna kaboya flani maarufu kametoa damu hebu kaone</h1>
                                <p class="best_text">Anasema eti anataka kusaidia watu wanaohitaji damu XD</p>
                                <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
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
              <h1 class="years_text">Meet the developers</h1>
              <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velitLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit</p>
              <div class="read_more_bt"><a href="about.html">READ MORE</a></div>
            </div>
            <div class="col-md-6">
              <div class="image_2"><img src="images/img-2.png"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- about section end -->

      <!-- service section start -->
      <div class="service_section layout_padding">
        <div class="container">
          <h1 class="services_text">Our Services</h1>
          <p class="dolor_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
          <div class="service_section_2">
            <div class="row">
              <div class="col-sm-4">
                <div class="image_3"><img src="images/img-3.png"></div>
                <h1 class="classic_text">SET UP DONATION APPOINTMENTS</h1>
                <p class="consectetur_text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                <div class="read_bt_main">
                  <div class="read_bt"><a href="appointment.html">SET UP NOW</a></div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="image_3"><img src="images/img-4.png"></div>
                <h1 class="classic_text">ACCESS TO BLOOD BANK INVENTORIES</h1>
                <p class="consectetur_text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                <div class="read_bt_main">
                  <div class="read_bt"><a href="#">Read More</a></div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="image_3"><img src="images/img-5.png"></div>
                <h1 class="classic_text">STORING DONNOR'S DONATION HISTORY</h1>
                <p class="consectetur_text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                <div class="read_bt_main">
                  <div class="read_bt"><a href="#">Read More</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- service section end -->

      <!-- about section start -->
      <div class="about_section layout_padding">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="image_2"><img src="images/img-2.png"></div>
            </div>
            <div class="col-md-6">
              <p class="unique_text">The Developer's story</p>
              <h1 class="years_text">Meet the Developers</h1>
              <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velitLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit</p>
              <div class="read_more_bt"><a href="#">READ MORE</a></div>
            </div>
           
          </div>
        </div>
      </div>
      <!-- about section end -->

      <!--discount section start -->
      <div class="discount_section layout_padding">
        <div class="container">
          <div class="discount_bg">
            <div class="row">
              <div class="col-sm-8">
                <h1 class="get_tetx">GET FREE BLOOD</h1>
                <h1 class="every_tetx">CREATE AN ACCOUNT AND DONATE</h1>
                <h1 class="promo_tetx">A STRAW COMES AS EXTRA</h1>
              </div>
              <div class="col-sm-4">
                <div class="image_6"><img src="images/img-6.png"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- discount section end -->

      <!-- client section start --> 
      <div class="client_section layout_padding">
        <h1 class="client_taital">What is Say Our Customer</h1>
        <div class="container">
          <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-6">
                    <div class="alex_bg">
                      <h3 class="alex_text">John</h3>
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

      <!-- contact section start -->
      <div class="contact_section layout_padding">
        <div class="container">
          <h1 class="contact_taital">Contact Us</h1>
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
              <div class="col-md-6">
                <div class="map_text"><img src="images/call-icon-1.png"><span class="call_text_left">+255 738 877 620</span>
                <div class="map_text"><img src="images/mail-icon-1.png"><span class="call_text_left">Bloodbank01@gmail.com</span>
                <div class="map_text_1"><img src="images/map-icon-1.png"><span class="call_text_left">Location bado, ilah tunafikiria Bambalaga</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
      <!-- contact section end -->

      <!-- join us section start -->
      <div class="join_section">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1 class="member_text">Want To Be A Member? Join With Us</h1>
            </div>
            <div class="col-md-6">
              <div class="join_bt"><a href="#">SEND</a></div>
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