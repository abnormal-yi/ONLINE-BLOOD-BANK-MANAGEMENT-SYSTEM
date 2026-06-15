<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>
</head>
<body>
    <main>
    <?php
        session_start();
        require_once('userheader.php');
        require_once('config/db_connection.php');     
        if(isset($_SESSION['role']) && $_SESSION['role'] == 'user')
        {
            $accid = $_SESSION['userid'];
            $sql = "SELECT * FROM useraccount WHERE id = ?";
            $statement = $conn->prepare($sql);
            $statement->execute([$accid]);
            $user = $statement->fetch(PDO::FETCH_ASSOC);

            if($user)
            {
                echo '<h2>WELCOME ' . strtoupper($_SESSION['role']) . ': ' . $user['FirstName'] . ' ' . $user['LastName'] . '</h2>';
                echo '<div class="table-design"><table>';
                echo '<tr><td>Name:</td><td>' . $user['FirstName'] . ' ' . $user['LastName'] . '</td></tr>';
                echo '<tr><td>Email:</td><td>' . $user['Email'] . '</td></tr>';
                echo '<tr><td>Phone:</td><td>' . $user['PhoneNumber'] . '</td></tr>';
                echo '<tr><td>Blood Group:</td><td>' . $user['BloodGroup'] . '</td></tr>';
                echo '<tr><td>District:</td><td>' . $user['District'] . '</td></tr>';
                echo '<tr><td>Street:</td><td>' . $user['Street'] . '</td></tr>';
                echo '</table></div>';
            }
        }
        else
        {
            echo '<h2>ACCOUNT</h2><p>Please <a href="login.php">log in</a> to view your account.</p>';
        }
    ?>
    </main>
    
</body>
</html>
