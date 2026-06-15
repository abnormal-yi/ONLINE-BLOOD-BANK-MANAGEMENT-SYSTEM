<?php
/**
 * signup.php
 *
 * Public user registration page for creating new accounts.
 *
 * Key functionality: Accepts user details (name, email, phone, DOB,
 * gender, district, street, password) via POST form, inserts a new
 * record into the useraccount table, and redirects to index.php on
 * successful registration.
 */

  require_once('config/db_connection.php');
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
      <title>Sign Up</title>
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

  <div>
    <?php
    
      // Process user sign-up form submission
      if(isset($_POST["createaccount"]))
      {
        // Capture all user registration form inputs
        $fnamedb = $_POST['firstname'];
        $lnamedb = $_POST['lastname'];
        $emaildb = $_POST['usermail'];
        $genderdb = $_POST['gender'];
        $dobdb = $_POST['dob'];
        $phonenumberdb = $_POST['phonenumber'];
        $districtdb = $_POST['dis'];
        $streetdb = $_POST['street'];
        $passworddb = $_POST['passwd'];
        $blood = "notadded";
        $acctype = "User";
        $accid = "notadded";

        // Prepare data array with all user fields for insertion
        $data = [ $fnamedb, $lnamedb, $emaildb, $phonenumberdb, $dobdb, $genderdb, $districtdb, $streetdb, $blood, $acctype, $passworddb ];

        // Insert new user record into the useraccount table
        $sql = "INSERT INTO useraccount(FirstName, LastName, Email, PhoneNumber, DateOfBirth, Gender, District, Street, BloodGroup, AccountType, Passwd) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        // commit the transaction
        $stmt = $conn->prepare($sql);

        // Execute the sql statement
        $result = $stmt->execute($data);

        if($result)
        {
          header('Location: index.php');
          echo 'Account saved' ;
        }
        else
        {
          echo ' Error ';
        }
        
      }
    ?>
  </div>
  <?php require_once('header.php');?>
<!-- sing up section start -->
<div class="contact_section layout_padding">
  <div class="container">
    <h1 class="contact_taital">Sign Up</h1>
    <div class="contact_section_2">
      <div class="row">
        <div class="col-md-6">
          <div class="mail_section">
            <form action="signup.php" method="post">
              <input type="text" class="mail_text" placeholder="First Name" name="firstname" required>
              <input type="text" class="mail_text" placeholder="Last Name" name="lastname" required>
              <input type="email" class="mail_text" placeholder="Email" name="usermail" required>
              <input type="password" class="mail_text" placeholder="Password" name="passwd" required>
              <input type="password" class="mail_text" placeholder="Confirm Password" name="confpasswd" required>
              <input type="text" class="mail_text" placeholder="Phone Number" name="phonenumber" required>
              <input type="date" class="mail_text" placeholder="date of birth" name="dob" required>
              <input type="text" class="mail_text" placeholder="Gender" name="gender" required>
              <input type="text" class="mail_text" placeholder="District" name="dis" required>
              <input type="text" class="mail_text" placeholder="Street" name="street" required>
              <input type="submit" class="btn btn-secondary" name="createaccount" value="SIGN UP">
            </form>
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