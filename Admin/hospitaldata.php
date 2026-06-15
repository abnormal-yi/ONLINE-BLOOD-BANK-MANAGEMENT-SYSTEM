<?php
/**
 * File: hospitaldata.php
 * Purpose: Hospital management page for OBBMS admin panel.
 *
 * This page allows admins to search for hospitals by name, email, or
 * phone number, and view all hospital records. Each hospital entry
 * includes an access control button to toggle the registration state
 * between APPROVED, REVOKED, and PENDING statuses.
 */
?>
<HTMl>
    <head>
        <?php
            require_once('config/db_admin_connection.php');
            require_once('adminheader.php');
        ?>
        <title>
            Hospital Data
        </title>
        
    </head>

    <?php // This is where we find specific user accounts ?>
    <body>
        <main>
            <h3>Search user by the following</h3>
            <form action="hospitaldata.php" method="post">
                <input type="text" placeholder="Hospital's Name" name="fname">
                <input type="email" placeholder="Hospital's Email" name="email">
                <input type="text" placeholder="Hospital's Phone Number" name="phone">
                <button type="submit" name="searchbutton"> Search </button>
            </form>
        <?php

        ?>
    
                <?php
                    // Handle hospital access control toggle (approve/revoke)
                    if(isset($_POST["control"]))
                    {
                        $hospid = $_POST['hospid'];
                        $state = $_POST['state'];

                        $sql = "UPDATE hospitals SET RegistrationState = ? WHERE HospitalID = ?";

                        $statement = $conn->prepare($sql);

                        // Toggle logic: APPROVED -> REVOKED, PENDING -> APPROVED, REVOKED -> APPROVED
                        if($state == "APPROVED")
                        {
                            $statement->execute(["REVOKED", $hospid]);
                            header('location: hospitaldata.php');
                        }
                        elseif ($state == "PENDING") 
                        {
                            $statement->execute(["APPROVED", $hospid]);
                            header('location: hospitaldata.php');
                        }

                        elseif ($state == "REVOKED") 
                        {
                            $statement->execute(["APPROVED", $hospid]);
                            header('location: hospitaldata.php');
                        }

                        $result = $statement -> fetchAll(PDO::FETCH_ASSOC);
                    }
                ?>

                <?php
        // Handle hospital search by name, email, or phone
        if(isset($_POST['searchbutton']))
        {
            $hospname = $_POST['fname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            $sql = "SELECT HospitalID, HospitalName, Email, PhoneNumber, District, Street, RegistrationState FROM hospitals WHERE HospitalName LIKE ?
                    OR Email LIKE ? OR PhoneNumber LIKE ?";

            $statement = $conn->prepare($sql);

            $statement->execute([$hospname, $email, $phone]);

            $result = $statement -> fetchAll(PDO::FETCH_ASSOC);
            if($hospname != null || $email != null || $phone != null)
            {
                if($result)
                { ?>
                    
                    <div class="table-design">
                    <h2>Hospital Data</h2>
                    <table > 
                        <thead>
                        <tr>
                            <th>S.N</th>
                            <TH>Hospital Name</TH>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>District</th>
                            <th>Street</th>
                            <th>Registration State</th>
                            <th>Access Control</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php

                    foreach($result as $data) {
                    ?>
                        <tr>
        
                            <td><?php echo $data['HospitalID']; ?> </td>
        
                            <td><?php echo $data['HospitalName']; ?> </td>
                                
                            <td><?php echo $data['Email']; ?> </td>
                                
                            <td><?php echo $data['PhoneNumber']; ?> </td>
                                
                            <td><?php echo $data['District']; ?> </td>
                                
                            <td><?php echo $data['Street']; ?> </td>
        
                            <td><?php echo $data['RegistrationState']; ?> </td>
        
                            <td>
                                <div class=form>
                                <div class=textbox>
                                <form action="hospitaldata.php" method="post"> 
                                    <INPUt type="hidden" value=<?php echo $data['HospitalID']; ?> name="hospid" ></INPUt>
                                    <INPUt type="hidden" value=<?php echo $data['RegistrationState']; ?> name="state" ></INPUt>
                                    <button type="sublmit" name="control"> 
                                        <?php 
                                            // Display contextual button label based on current state
                                            if($data['RegistrationState'] == "PENDING" )
                                            {
                                                ECHO "APPROVE";
                                            }
                                            else if($data['RegistrationState'] == "APPROVED")
                                            {
                                                ECHO "REVOKE";
                                            }
                                            else if($data['RegistrationState'] == "REVOKED")
                                            {
                                                ECHO "APPROVE";
                                            }
                                                
                                        ?> 
                                    </button>
                                </form>    
                                </div>
                                </div>
                            </td>
                            
                        </tr>  
                    </tbody>
                    <?php
                        }
                    }
            }
                else {
                    ?>
                        <h3> YOU NEED SOME ACCTUAL INFORMATION TO SEARCH FOR SOMETHING GENIOUS </h3>
                    <?php
                }
            }
                    
    else {
        // Display all hospitals when no search is active
        ?>
        <div class="table-design">
        <h2>Hospital Data</h2>
        <table > 
            <thead>
            <tr>
                <th>S.N</th>
                <TH>Hospital Name</TH>
                <th>Email</th>
                <th>Phone Number</th>
                <th>District</th>
                <th>Street</th>
                <th>Registration State</th>
                <th>Access Control</th>
            </tr>
            </thead>
            <tbody>

            <?php // Pull all the accounts in the user accounts database
        
                $sql = "SELECT HospitalID, HospitalName, Email, PhoneNumber, District, Street, RegistrationState FROM hospitals";

                $statement = $conn->prepare($sql);

                $statement->execute();

                $result = $statement -> fetchAll(PDO::FETCH_ASSOC);
                
                $sn=1;
                foreach($result as $data) {
            ?>
                <tr>

                    <td><?php echo $data['HospitalID']; ?> </td>

                    <td><?php echo $data['HospitalName']; ?> </td>
                        
                    <td><?php echo $data['Email']; ?> </td>
                        
                    <td><?php echo $data['PhoneNumber']; ?> </td>
                        
                    <td><?php echo $data['District']; ?> </td>
                        
                    <td><?php echo $data['Street']; ?> </td>

                    <td><?php echo $data['RegistrationState']; ?> </td>

                    <td>
                        <div class=form>
                        <div class=textbox>
                        <form action="hospitaldata.php" method="post"> 
                            <INPUt type="hidden" value=<?php echo $data['HospitalID']; ?> name="hospid" ></INPUt>
                            <INPUt type="hidden" value=<?php echo $data['RegistrationState']; ?> name="state" ></INPUt>
                            <button type="sublmit" name="control"> 
                                <?php 
                                    // Display contextual button label based on current state
                                    if($data['RegistrationState'] == "PENDING" )
                                    {
                                        ECHO "APPROVE";
                                    }
                                    else if($data['RegistrationState'] == "APPROVED")
                                    {
                                        ECHO "REVOKE";
                                    }
                                    else if($data['RegistrationState'] == "REVOKED")
                                    {
                                        ECHO "APPROVE";
                                    }
                                        
                                ?> 
                            </button>
                        </form>    
                        </div>
                        </div>
                    </td>
                    
                </tr>  
                </tbody>
            <?php
                }

                }

            ?>
            
        </table>
        </div>
            </main>
            </div>
    </body>

</HTMl>

<?php
    require_once('adminfooter.php');
?>


