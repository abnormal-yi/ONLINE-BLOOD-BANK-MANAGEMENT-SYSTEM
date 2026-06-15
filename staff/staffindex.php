<?php
/**
 * File: staffindex.php
 * 
 * Staff login page for the OBBMS staff panel.
 * Authenticates staff members against the staffaccounts table
 * and checks if their account has been confirmed by an admin.
 * 
 * Key functionality:
 * - Redirects already-logged-in staff to the dashboard
 * - Validates staff username and password against the database
 * - Checks account confirmation status (GRANTED/DENIED/PENDING)
 * - Sets session variables on successful login
 */
?>
<HEAD>
    <?php
        session_start();
        // Redirect if already logged in as staff
        if(isset($_SESSION['role']) && $_SESSION['role'] == 'staff')
        {
            header('location: userdata.php');
            exit();
        }
        require_once('config/db_staff_connection.php');
    ?>
    
    <title>HOME | STAFF</title>
</HEAD>

<?php
            // Process the staff login form
            if(isset($_POST['stafflogin']))
            {
                $username = $_POST['username'];
                $passwd = $_POST['passwd'];

                $data = [$username, $passwd];

                // Query staff accounts for matching credentials
                $sql = "SELECT StaffID, FirstName, LastName, Confirmed FROM staffaccounts WHERE UserName = ? AND Passwd = ?";

                $statement = $conn->prepare($sql);

                $statement->execute($data);

                $result = $statement -> fetchAll(PDO::FETCH_ASSOC);

                if($result)
                {
                    foreach($result as $data)
                    {
                        // Check account confirmation status
                        if($data['Confirmed'] == "GRANTED")
                        {
                            $_SESSION['userid'] = $data['StaffID'];
                            $_SESSION['role'] = 'staff';
                            $_SESSION['name'] = $data['FirstName'];
                            header('location: userdata.php');
                            exit();
                        }
                        else if($data['Confirmed'] == "DENIED")
                        {
                            header('location: unconfirmedstaff.php');
                            exit();
                        }
                        else 
                        {
                            echo "your account is invalid";
                        }
                    }
                }
                else
                {
                    echo '<p style="color:red;">Invalid username or password.</p>';
                }
            }
        ?>

<body>

    <DIV>
        <h3>STAFF ONLY (LIMITED ACCESS)</h3>
        <P>Please confirm your identity before going any further. </P>
        <div>
            <form action="staffindex.php" method="post">
                <label> Username</label>
                <input type="text" name="username">
                <label> Password</label>
                <input type="text" name="passwd">
                <button type="submit" name="stafflogin"> Log in</button>
            </form>
        </div>
        <div>
            <p>Register as new staff member. </p>
            <a href="staffregistration.php"> REGISTER </a>
        </div>
    </DIV>

</body>

<?php
    require_once('stafffooter.php');
?>
