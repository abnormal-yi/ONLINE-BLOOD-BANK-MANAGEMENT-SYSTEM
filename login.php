<?php
/**
 * login.php
 *
 * Multi-role user authentication page for OBBMS.
 *
 * Key functionality: Checks for existing session and redirects logged-in
 * users to their respective dashboards. Processes login form submissions
 * by querying useraccount, admin, staffaccounts, and hospitals tables
 * sequentially. On success, sets session variables (userid, role, name)
 * and redirects to the appropriate dashboard.
 */

session_start();

// Redirect already authenticated users to their role-specific page
if(isset($_SESSION['role']))
{
    switch($_SESSION['role'])
    {
        case 'admin': header('location: Admin/adminhome.php'); break;
        case 'staff': header('location: staff/userdata.php'); break;
        case 'hospital': header('location: hospreqblood.php'); break;
        default: header('location: index.php'); break;
    }
    exit();
}

require_once('userheader.php');
require_once('config/db_connection.php');
?>
<html>
    <HEAD>
        <TITle>
            SINGLE LOGIN - OBBMS
        </TITle>
    </HEAD>

    <body>
    <main>
<?php

    // Process login form submission
    if(isset($_POST["login"]))
    {
        // Capture email and password from the form
        $email = $_POST['email'];
        $passwd = $_POST['passwd'];

        $user = null;

        // Attempt authentication against useraccount table first
        $stmt = $conn->prepare("SELECT id, FirstName, 'user' AS role FROM useraccount WHERE Email = ? AND Passwd = ?");
        $stmt->execute([$email, $passwd]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Fall back to admin table if not found as a regular user
        if(!$user)
        {
            $stmt = $conn->prepare("SELECT AdminID AS id, FirstName, 'admin' AS role FROM admin WHERE Email = ? AND Passwd = ?");
            $stmt->execute([$email, $passwd]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
        }

        // Fall back to staff table if not found as admin
        if(!$user)
        {
            $stmt = $conn->prepare("SELECT StaffID AS id, FirstName, 'staff' AS role FROM staffaccounts WHERE Email = ? AND Passwd = ?");
            $stmt->execute([$email, $passwd]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
        }

        // Fall back to hospitals table if not found as staff
        if(!$user)
        {
            $stmt = $conn->prepare("SELECT HospitalID AS id, HospitalName AS FirstName, 'hospital' AS role FROM hospitals WHERE Email = ? AND Passwd = ?");
            $stmt->execute([$email, $passwd]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
        }

        // Authentication successful: set session and redirect
        if($user)
        {
            // Store user identity and role in session
            $_SESSION['userid'] = $user['id'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['name'] = $user['FirstName'];

            // Redirect to role-appropriate dashboard
            switch($user['role'])
            {
                case 'admin':
                    header('location: Admin/adminhome.php');
                    break;
                case 'staff':
                    header('location: staff/userdata.php');
                    break;
                case 'hospital':
                    header('location: hospreqblood.php');
                    break;
                default:
                    header('location: index.php');
                    break;
            }
            exit();
        }
        else
        {
            echo '<p style="color:red;text-align:center;">Invalid email or password. Please try again.</p>';
        }
    }
?>
        <h1>ACCOUNT</h1>
        <div class="form">
        <form action="login.php" method="post">
            <div class="textbox">
                <h2>LOG IN</h2>
            </div>
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
                <h3> You DON'T have an account? <a href="userregistration.php"> SIGN UP </a> </h3>
                
            </div>

        </form>
    </div>
    <div>
        </div>
    </div>
</main>
</body>
</html>
