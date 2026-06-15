<?php
/**
 * File: edituserdata.php
 * 
 * Allows staff to update a user's blood group information.
 * Displays the selected user's details and provides a form
 * to change their blood group from a dropdown selection.
 * 
 * Key functionality:
 * - Retrieves and displays user account details by ID
 * - Updates the BloodGroup field in the useraccount table
 * - Redirects back to userdata.php after successful update
 */
?>
<HTMl>
    <head>
        
        <!-- importer for what this page needs (Connection to database, header e.t.c) -->
        <?php
            require_once('config/db_staff_connection.php');
            require_once('staffheader.php');
        ?>

        <title>
            Edit User Data
        </title>

    </head>

    <body>
        <main>
            
        <?php
            // Process the blood group update form submission
            if(isset($_POST['updateuserdata']))
            {
                $newblood = $_POST['blood'];
                $accid = $_POST['id'];

                $sql = "UPDATE useraccount SET BloodGroup = ? WHERE id = ?";

                $statement = $conn->prepare($sql);

                $statement->execute([$newblood, $accid]);

                header('Location: userdata.php');
            }
        ?>

        <!-- render the selected account from the database -->
        <?php
        
            // Retrieve the selected user's full account details for editing
            if(isset($_POST['calluserdata']))
            {
                $id = $_POST['accid'];

                $sql = "SELECT id, FirstName, LastName, Email, PhoneNumber, DateOfBirth, Gender, BloodGroup, District, Street FROM useraccount WHERE id = ?";

                $statement = $conn->prepare($sql);

                $statement->execute([$id]);

                $result = $statement -> fetchAll(PDO::FETCH_ASSOC);

                if($result)
                {
            ?>
                <div class="table-design">
                    <h2>UPDATE USER INFORMATION</h2>
                    <table>
                        <thead> 
                        <tr>
                            <th>S.N</th>
                            <TH>First Name</TH>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Gender</th>
                            <th>Blood Group</th>
                            <th>District</th>
                            <th>Street</th>
                        </tr>
                </thead>
                <tbody>

            <?php
                $sn=1;  

                foreach($result as $data) {
                    
                $idnumber = $data['id'];
            ?>

                <tr>

                    <td><?php echo $data['id']; ?> </td>

                    <td><?php echo $data['FirstName']; ?> </td>
                
                    <td><?php echo $data['LastName']; ?> </td>
                
                    <td><?php echo $data['Email']; ?> </td>
                
                    <td><?php echo $data['PhoneNumber']; ?> </td>
                
                    <td><?php echo $data['Gender']; ?> </td>
                
                    <td> <?php echo $data['BloodGroup']; ?> </td>
                
                    <td><?php echo $data['District']; ?> </td>
                
                    <td><?php echo $data['Street']; ?> </td>


                    
        <!-- The UI to save the new changes in the database -->
        <div class="form">
        <form action="edituserdata.php" method="post">
            <input type="text" name="id" value = <?php echo $data['id']; ?> >

            <h2>UPDATE BloodGroup</h2>
            <div class="textbox">
            <SELECT SIZE="1" name = "blood" >
                <OPTION VALUE="A +" > A +</OPTION>
                <OPTION VALUE="A - "> A - </OPTION>
                <OPTION VALUE="B + "> B + </OPTION>
                <OPTION VALUE="B - "> B - </OPTION>
                <OPTION VALUE="AB + "> AB + </OPTION>
                <OPTION VALUE="AB - "> AB - </OPTION>
                <OPTION VALUE="O + "> O + </OPTION>
                <OPTION VALUE="O - "> O - </OPTION>
            </SELECT>
            </div>

            <button type = "submit" name="updateuserdata"> UPDATE </button>
        </form>
        </div>
                </tr>  
                
        </tbody>

            <?php
                        }
                    }
                }
                else
                {
            ?>
                <h3> NO USER WITH THIS INFORMATION WAS FOUND. </h3>
            <?php
                }
        ?>
        
        </table>

        </main>
        </div>
        <!-- Change information in the database -->
    </body>

</html>

<?php
    require_once('stafffooter.php');
?>