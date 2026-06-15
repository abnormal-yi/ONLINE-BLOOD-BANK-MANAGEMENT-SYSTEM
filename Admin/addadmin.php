<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <?php
            require_once('config/db_admin_connection.php');
        ?>
        <title>
        <TItle>
        Log in | Admin
    </TItle>
        </title>

</head>
<body>
    
<?php

if(isset($_POST["addstaff"]))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uname = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$passwd = $_POST['pass'];

$data = [$fname, $lname, $uname, $email, $phone, $gender, $passwd, $dob];

$sql = 'INSERT INTO admin(FirstName, LastName, AdminName, Email, PhoneNumber, Gender,  Passwd, DateOfBirth) 
VALUE(?,?,?,?,?,?,?,?)';

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

<H3>REGISTER AS NEW ADMIN</H3>
        <li><a href="adminlogin.php"> Home </a></li>
    <P>Please fill in your corresponding information.</P>
    <div class="container">
        <form action="addadmin.php" method="post">
            <div class="input_johntextbox" >
                <label for="First Name"> First Name</label>
                <input class="input_johntextbox" type="text" name="fname" required>
            </div>
            
            <div>
                <label for="Last Name"> Last Name</label>
                <input class="input_johntextbox" type="text" name="lname" required> 
            </div>

            <div>
                <label for="Username"> Admin Name</label>
                <input type="text" name="username" required>
            </div>
            <div>
                <label for="Email"> Email</label>
                <input type="Email" name="email">
            </div>

            <div>
                <label for="Phone Number"> Phone Number</label>
                <input type="text" name="phone" required>
            </div>

            <div>
                <label for="Date of Birth"> Date Of Birth</label>
                <input type="date" name="dob" required>
            </div>
            
            <label for="Gender"> Gender </label>
            <SELECT SIZE="1" NAME="gender" required>
                <OPTION VALUE="Male" SELECTED>-- Gender --</OPTION>
                <OPTION VALUE="Male" >Male</OPTION>
                <OPTION VALUE="Female">Female</OPTION>
            </SELECT>

            <label for="password"> Password</label>
            <input type="text" name="pass" required>
            <label for="Confirm Password"> Confirm Password</label >
            <input type="text" name="confpass" required>

            <button class="login_btn" type="submit" name="addstaff"> Register</button>

        </form>
    </div>
</body>
</html>