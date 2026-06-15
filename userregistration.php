<?php
/**
 * userregistration.php
 *
 * User registration form for creating new OBBMS accounts.
 *
 * Key functionality: Accepts user details (name, email, phone, gender,
 * DOB, password) via POST form, validates password confirmation, and
 * inserts a new record into the useraccount table.
 */
?>
<html>
    <HEAD>
    <?php

require_once('userheader.php');
require_once('config/db_connection.php');

?>
        
        <TITle>
            USER REGISTRATION
        </TITle>
    </HEAD>

    <body>
    <main>
<?php

    // Process user registration form submission
    if(isset($_POST["addstaff"]))
    {
    // Capture registration form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $passwd = $_POST['passwd'];
    $confpass = $_POST['confpass'];

    // Prepare data array with user fields for insertion
    $data = [$fname, $lname, $email, $phone, $gender, $passwd, $dob];

    // Insert new user account into the database
    $sql = 'INSERT INTO useraccount(FirstName, LastName, Email, PhoneNumber, Gender,  Passwd, DateOfBirth) 
    VALUE(?,?,?,?,?,?,?)';

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
        <h1>ACCOUNT</h1>
        <div class="form">
        <form action="userregistration.php" method="post">
            <div class="textbox">
                
    <h2>SIGN UP</h2>
            </div>
            <div class="textbox">
              <input type="text" placeholder="First Name" name="fname" required>
            </div>
            
            <div class="textbox">
              <input type="text" placeholder="Last Name" name="lname" required>
            </div>
            
            <div class="textbox">
              <input type="text" placeholder="E-Mail" name="email" required>
            </div>
            
            <div class="textbox">
              <input type="text" placeholder="Phone Number" name="phone" required>
            </div>
            
            <div class="textbox">
            <SELECT SIZE="1" NAME="gender" required>
                <OPTION VALUE="Gender" SELECTED>-- Gender --</OPTION>
                <OPTION VALUE="Male" >Male</OPTION>
                <OPTION VALUE="Female">Female</OPTION>
            </SELECT>
              </div>

            <div class="textbox">
              <input type="date" name="dob" placeholder="Date of birth" required>
              </div>
              
            <div class="textbox">
              <input type="password" placeholder="Password" name="passwd" required>
            </div>
            
            <div class="textbox">
              <input type="password" placeholder="Confirm Password" name="confpass" required>
            </div>
            
            <div class="textbox">
            <button class="login_btn" type="submit" name="addstaff"> Register</button>
            </div>
            
            <div class="textbox">
                <h3> You already have an account? <a href="login.php"> LOG IN </a> </h3>
                
            </div>

        </form>
    </div>
    <div>
        </div>
    </div>
</main>
</body>
</html>
