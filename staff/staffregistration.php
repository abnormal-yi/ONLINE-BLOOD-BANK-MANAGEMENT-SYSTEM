<?php
/**
 * File: staffregistration.php
 * 
 * Staff self-registration page for the OBBMS system.
 * New staff members can submit their details to create an account.
 * Accounts are created with a PENDING confirmation status and must
 * be approved by an administrator before access is granted.
 * 
 * Key functionality:
 * - Collects staff personal and account details via form
 * - Inserts new staff record with Confirmed = 'PENDING'
 * - Requires admin approval before staff can log in
 */
?>
<html>
    <HEAD>
        <?php

            require_once('staffheader.php');
            require_once('config/db_staff_connection.php');

        ?>
<link rel="stylesheet" href="./style.css"> 
        <TITle>
            STAFF REGISTRATION
        </TITle>
    </HEAD>

    <body>
    <main>
<?php

    // Process the staff registration form
    if(isset($_POST["addstaff"]))
    {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $passwd = $_POST['passwd'];
    $confpass = $_POST['confpass'];
    $conf = "PENDING";

    $data = [$fname, $lname, $uname, $email, $phone, $gender, $passwd, $conf, $dob];

    // Insert new staff account with PENDING confirmation status
    $sql = 'INSERT INTO staffaccounts(FirstName, LastName, Username, Email, PhoneNumber, Gender,  Passwd, Confirmed, DateOfBirth) 
    VALUE(?,?,?,?,?,?,?,?,?)';

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

        <div class="form">
        <form action="staffregistration.php" method="post">
            <div class="textbox">
                
    <h2>REGISTER AS NEW STAFF</h2>
    <span>Please fill in your corresponding information.</span>
            </div>
            <div class="textbox">
              <input type="text" placeholder="First Name" name="fname" required>
            </div>
            
            <div class="textbox">
              <input type="text" placeholder="Last Name" name="lname" required>
            </div>
            
            <div class="textbox">
              <input type="text" placeholder="UserName" name="username" required>
            </div>
            
            <div class="textbox">
              <input type="text" placeholder="Email" name="email" required>
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
                <h3> You already have an account? <a href="staffindex.php"> LOG IN </a> </h3>
                
            </div>

        </form>
    </div>
    <div>
        </div>
    </div>
</main>
</body>
</html>
