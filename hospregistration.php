<?php
/**
 * hospregistration.php
 *
 * Hospital registration request form for new hospital accounts.
 *
 * Key functionality: Accepts hospital details (name, email, phone,
 * district, street, password) via POST, inserts a new record into
 * the hospitals table with a PENDING registration state.
 */

  require_once('config/db_connection.php');
?>

<!DOCTYPE html>
<html lang="en">
   <head>
     <?php
        require_once('config/db_connection.php');
        require_once('userheader.php');
     ?>
   </head>
   <!-- body -->
   <body>

    <?php
    
      // Process hospital registration form submission
      if(isset($_POST["sendrequest"]))
      {
        // Collect hospital registration form data
        $hospname = $_POST['Hospitalname'];
        $emaildb = $_POST['hospmail'];
        $phonenumberdb = $_POST['phonenumber'];
        $districtdb = $_POST['dis'];
        $streetdb = $_POST['street'];
        $passworddb = $_POST['passwd'];
        $State = "PENDING";

        // Prepare data array for parameterized insert
        $data = [ $hospname, $emaildb, $phonenumberdb, $districtdb, $streetdb, $State, $passworddb ];

        // Insert new hospital registration request with PENDING state
        $sql = "INSERT INTO hospitals(HospitalName, Email, PhoneNumber, District, Street, RegistrationState, Passwd) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";
        
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
    

  <main>
    <h1>Request Hospital Registration</h1>
          <div class="form">
            <form action="hospregistration.php" method="post">
              <div class="textbox">
              <input type="text" class="mail_text" placeholder="Hospital Name" name="Hospitalname" required>
              </div>
              <div class="textbox">
              <input type="email" class="mail_text" placeholder="Hospital Email" name="hospmail" required>
              </div>
              <div class="textbox">
              <input type="password" class="mail_text" placeholder="Password" name="passwd" required>
              </div>
              <div class="textbox">
              <input type="password" class="mail_text" placeholder="Confirm Password" name="confpasswd" required>
              </div>
              <div class="textbox">
              <input type="text" class="mail_text" placeholder="Hospital Phone Number" name="phonenumber" required>
              </div>
              <div class="textbox">
              <input type="text" class="mail_text" placeholder="District" name="dis" required>
              </div>
              <div class="textbox">
              <input type="text" class="mail_text" placeholder="Street" name="street" required>
              </div>
              <div class="textbox">
              <input type="submit" class="btn btn-secondary" name="sendrequest" value="SEND REQUEST">
              </div>
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

<main>
   </body>
   </html>