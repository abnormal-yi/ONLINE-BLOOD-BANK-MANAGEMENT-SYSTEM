<?php
    session_start();
    if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin')
    {
        header('location: adminhome.php');
        exit();
    }
    require_once('config/db_admin_connection.php');
?>

<head>
    <TItle>
        Home | Admin
    </TItle>
</head>

<?php
            if(isset($_POST['adminlogin']))
            {
                $username = $_POST['username'];
                $passwd = $_POST['passwd'];

                $data = [$username, $passwd];

                $sql = "SELECT AdminID, FirstName, LastName FROM admin WHERE AdminName = ? AND Passwd = ?";

                $statement = $conn->prepare($sql);

                $statement->execute($data);

                $result = $statement -> fetchAll(PDO::FETCH_ASSOC);

                if($result)
                {
                    foreach($result as $data)
                    {
                        $_SESSION['userid'] = $data['AdminID'];
                        $_SESSION['role'] = 'admin';
                        $_SESSION['name'] = $data['FirstName'];
                        header('location: adminhome.php');
                        exit();
                    }
                }
                else {
                    echo "Account not Found. ARE YOU AN ADMIN ???? CALLING THE FBI ... NOW";
                }
            }
        ?>

<body>

    <DIV>
        <h3>ADMIN ONLY (LIMITED ACCESS)</h3>
        <li><a href="adminlogin.php"> Home </a></li>
        <P>Please confirm your identity before going any further. </P>
        <div>
            <form action="adminlogin.php" method="post">
                <label for="hospitalName"> Admin Name</label>
                <input type="text" name="username">
                <label for="hospitalName"> Admin Password</label>
                <input type="text" name="passwd">
                <button type="submit" name="adminlogin"> Log in</button>
            </form>
        </div>
        <div>
            <p>Register as new staff member. </p>
            <a href="addadmin.php"> REGISTER </a>
        </div>
    </DIV>

</body>

<?php
    require_once('adminfooter.php');
?>
