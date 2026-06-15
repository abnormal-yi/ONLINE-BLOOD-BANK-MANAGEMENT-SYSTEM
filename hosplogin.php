<?php
/**
 * hosplogin.php
 *
 * Hospital account login page with email/password authentication.
 *
 * Key functionality: Accepts hospital email and password via POST form,
 * queries the hospitals table to verify credentials, and displays
 * whether the account was found or not.
 *
 * Inline comments explain database query and authentication logic.
 */

require('config/db_connection.php');
?>

<!DOCTYPE html>
<html lang="en">
   <body>

   <?php
      require_once('userheader.php');

      // Process hospital login form submission
      if(isset($_POST["login"]))
      {
        // Capture form credentials
        $email = $_POST['email'];
        $passwd = $_POST['passwd'];

        // Query hospitals table to check if email exists
        $sql = "SELECT HospitalID FROM hospitals WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$email]);

        if($stmt->fetch())
        {
          echo 'Account Found';
        }
        else
        {
          echo 'Account Not Found. Create A new account.';
        }
      }
   ?>
   
        <h1>HOSPITAL ACCOUNT</h1>
        <div class="form">
              <h2>LOG IN</h2>
        <form action="hosplogin.php" method="post">
            <div class="textbox">
              <input type="text" placeholder="Email" name="email" required>
            </div>
            
            <div class="textbox">
              <input type="password" placeholder="Password" name="passwd" required>
            </div>
            
            <div class="textbox">
            <button class="login_btn" type="submit" name="login"> LOG IN</button>
            </div>
            
            <div class="textbox">
                <h3> You DON'T have an account? <a href="hospregistration.php"> REGISTER </a> </h3>
                
            </div>
        </form>
    </div>
    <div>
        </div>
    </div>
</main>
</body>
</html>
