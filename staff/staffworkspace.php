<?php
/**
 * File: staffworkspace.php
 * 
 * Staff donation entry form for recording donor information.
 * Captures details of blood donors and saves them to the
 * donnations table in the database.
 * 
 * Key functionality:
 * - Form to enter donor personal and contact information
 * - Records donation date, place, district, and street
 * - Inserts donation record into the donnations table
 */
 
 require_once('config/db_staff_connection.php');
 require_once('staffheader.php');
 

?>

<!DOCTYPE html>
<html lang="en">

    <?php
      // Process the donation form submission
      if(isset($_POST["savedata"]))
      {
        $fnamedb = $_POST['firstname'];
        $lnamedb = $_POST['lastname'];
        $emaildb = $_POST['usermail'];
        $phonenumberdb = $_POST['phonenumber'];
        $genderdb = $_POST['gender'];
        $doddb = $_POST['dod'];
        $poddb = $_POST['pod'];
        $districtdb = $_POST['dis'];
        $streetdb = $_POST['str'];

        $data = [ $fnamedb, $lnamedb, $emaildb, $phonenumberdb, $genderdb,$doddb,$poddb, $districtdb, $streetdb ];

        $sql = "INSERT INTO donnations(FirstName, LastName, Email, PhoneNumber, Gender, DateOfDonnation, PlaceOfDonnation, District, Street) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        // commit the transaction
        $stmt = $conn->prepare($sql);

        // Execute the sql statement
        $result = $stmt->execute($data);

        if($result)
        {
          echo 'saved' ;
        }
        else
        {
          echo ' Error ';
        }
        
      }
   ?>

   <head>
      
   </head>
   
      
<!-- sing up section start -->
<div class="contact_section layout_padding">
  <div class="container">
    <h1 class="contact_taital">Save donnor's donation data</h1>
    <h1 class="contact_taital_sec">All information should be true and current.</h1>
    <div class="contact_section_2">
      <div class="row">
        <div class="col-md-6">
          <div class="mail_section">
            <form action="staffworkspace.php" method="post">
              <input type="text" class="mail_text" placeholder="Donator's First Name" name="firstname" required>
              <input type="text" class="mail_text" placeholder="Last Name" name="lastname" required>
              <input type="email" class="mail_text" placeholder="Email" name="usermail">
              <input type="text" class="mail_text" placeholder="Phone Number" name="phonenumber" required>
              <input type="text" class="mail_text" placeholder="Gender" name="gender" required>
              <input type="date" class="mail_text" placeholder="Phone Number" name="dod" required>
              <input type="text" class="mail_text" placeholder="Place Of Donnation" name="pod" required>
              <input type="text" class="mail_text" placeholder="District" name="dis" required>
              <input type="text" class="mail_text" placeholder="Street" name="str" required>
              <input type="submit" class="btn btn-secondary" name="savedata" value="SAVE">
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

      
   </body>
   </html>