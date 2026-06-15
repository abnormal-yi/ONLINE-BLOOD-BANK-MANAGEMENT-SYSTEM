<HTMl>
    <head>
        <?php
            require_once('config/db_admin_connection.php');
            require_once('adminheader.php');
        ?>
        <title>
            User Data
        </title>
    </head>

    <?php // This is where we find specific user accounts ?>
    <body>
        <?php
            if(isset($_POST['searchbutton']))
            {
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];


            }
        ?>
        <div>
            <h3>Search user by the following</h3>
            <form action="userdata.php" method="post">
                <input type="text" placeholder="First Name" name="fname">
                <input type="text" placeholder="Last Name" name="lname">
                <input type="text" placeholder="Email" name="email">
                <input type="text" placeholder="Phone Number" name="phone">
                <button type="submit" name="searchbutton"> Search </button>
            </form>
        </div>
        <?php

        ?>
    </body>
    
    <?php // This is where we render all the user account table ?>
    <body>
        <h2>User Accounts</h2>
        <table border="1" cellspacing="0" cellpadding="25"> 
            <tr>
                <th>S.N</th>
                <TH>First Name</TH>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Gender</th>
                <th>District</th>
                <th>Street</th>
                <th>Edit Details</th>
            </tr>

            <?php // Pull all the accounts in the user accounts database

                $sql = "SELECT FirstName, LastName, Email, PhoneNumber, DateOfBirth, Gender, District, Street FROM useraccount";

                $statement = $conn->prepare($sql);

                $statement->execute();

                $result = $statement -> fetchAll(PDO::FETCH_ASSOC);
                
                $sn=1;
                foreach($result as $data) {
            ?>
            <tr>

                <td><?php echo $sn++; ?> </td>

                <td><?php echo $data['FirstName']; ?> </td>
                    
                <td><?php echo $data['LastName']; ?> </td>
                    
                <td><?php echo $data['Email']; ?> </td>
                    
                <td><?php echo $data['PhoneNumber']; ?> </td>
                    
                <td><?php echo $data['Gender']; ?> </td>
                    
                <td><?php echo $data['District']; ?> </td>
                    
                <td><?php echo $data['Street']; ?> </td>

                <td> <Button> Edit </Button> </td>
                    
                </tr>  
            <?php

                }

            ?>
        </table>
    </body>

</HTMl>

<?php
    require_once('adminfooter.php');
?>


