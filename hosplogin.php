<?php 
require('config/db_connection.php');
?>

<!DOCTYPE html>
<html lang="en">
   <body>

   <?php
      require_once('userheader.php');

      if(isset($_POST["login"]))
      {
        $email = $_POST['email'];
        $passwd = $_POST['passwd'];

        $sql = "SELECT HospitalID FROM hospitals WHERE email = ". $email . ")";
        
        // use exec() because no results are returned
        $statement = $conn->execute($sql);
        
        if($result)
        {
          echo 'Accoount Found';
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
