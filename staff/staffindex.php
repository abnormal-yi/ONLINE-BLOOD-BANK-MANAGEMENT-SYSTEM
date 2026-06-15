<HEAD>
    <?php
        session_start();
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
            if(isset($_POST['stafflogin']))
            {
                $username = $_POST['username'];
                $passwd = $_POST['passwd'];

                $data = [$username, $passwd];

                $sql = "SELECT StaffID, FirstName, LastName, Confirmed FROM staffaccounts WHERE UserName = ? AND Passwd = ?";

                $statement = $conn->prepare($sql);

                $statement->execute($data);

                $result = $statement -> fetchAll(PDO::FETCH_ASSOC);

                if($result)
                {
                    foreach($result as $data)
                    {
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
