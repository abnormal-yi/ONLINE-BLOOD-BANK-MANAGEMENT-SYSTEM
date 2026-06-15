<?php
/**
 * accountdetails.php
 *
 * Displays detailed user account information by ID.
 *
 * Key functionality: Accepts a user ID via POST, queries the useraccount
 * table, and renders the user's personal details (name, email, phone,
 * gender, district, street, blood group).
 */
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        require_once('config/db_connection.php');
        //require_once('header.php');
    ?>

</head>
<body>

    <?php
        if(isset($_POST['accountdets']))
        {
            $accid = $_POST['accid'];

            // Fetch user details from the useraccount table by the provided ID
            $sql = "SELECT FirstName, LastName, Email, PhoneNumber, DateOfBirth, Gender, District, Street, BloodGroup FROM useraccount WHERE id = ?";

            $statement = $conn->prepare($sql);

            $statement->execute([$accid]);

            $result = $statement -> fetchAll(PDO::FETCH_ASSOC);

            foreach($result as $data)
            {
                ?>
                    <div>
                        <label for="FirstName"> First Name </label>
                        <?php echo $data['FirstName'];?>
                    </div>

                    <div>
                        <label for="LastName"> Last Name </label>
                        <?php echo $data['LastName'];?>
                    </div>

                    <div>
                        <label for="Email"> Email </label>
                        <?php echo $data['Email'];?>
                    </div>

                    <div>
                        <label for="PhoneNumber"> Phone Number </label>
                        <?php echo $data['PhoneNumber'];?>
                    </div>

                    <div>
                        <label for="PhoneNumber"> Gender </label>
                        <?php echo $data['Gender'];?>
                    </div>

                    <div>
                        <label for="PhoneNumber"> District </label>
                        <?php echo $data['District'];?>
                    </div>

                    <div>
                        <label for="PhoneNumber"> Street </label>
                        <?php echo $data['Street'];?>
                    </div>

                    <div>
                        <label for="PhoneNumber"> Blood Group </label>
                        <?php echo $data['BloodGroup'];?>
                    </div>

                <?php
            }
        }
    ?>
<form action="accountdetails.php" method="post">
    <input type="text" name="accid" value=1>
    <button type="submit" name="accountdets">Account Data</button>
</form>
</body>
</html>