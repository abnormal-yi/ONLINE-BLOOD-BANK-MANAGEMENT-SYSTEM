<?php
/**
 * File: managestaff.php
 * Purpose: User account listing page for OBBMS admin panel.
 *
 * This page displays all registered user accounts from the `useraccount`
 * table in a table format. It includes a search form to filter users by
 * name, email, or phone number. Despite the filename, this page actually
 * manages end-user accounts, not staff accounts.
 */
?>
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

    <?php // Search form for finding specific user accounts ?>
    <body>
        <?php
            if(isset($_POST['searchbutton']))
            {
                // Capture search input values
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
    
    <?php // Render all user account records in a table ?>
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

            <?php // Fetch all user accounts from the database
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


