<HTMl>
    <head>
        <?php
            require_once('config/db_admin_connection.php');
            require_once('adminheader.php');
        ?>
        <title>
            Staff Data
        </title>
    </head>

    
    <body>
        <main>
            <h3>Search user by the following</h3>
            <div class = "form"> 
            <form action="staffdata.php" method="post">
                <input type="text" class="textbox" placeholder="First Name" name="fname">
                <input type="text" placeholder="Last Name" name="lname">
                <input type="text" placeholder="Email" name="email">
                <input type="text" placeholder="Phone Number" name="phone">
                <button type="submit" name="searchbutton"> Search </button>
            </form>
            </div>

                <?php
                if(isset($_POST["accesscontrol"]))
                {
                    $staffid = $_POST['staffid'];
                    $state = $_POST['state'];

                    $sql = "UPDATE staffaccounts SET Confirmed = ? WHERE StaffID = ?";

                    $statement = $conn->prepare($sql);

                    if($state == "GRANTED")
                    {
                        $statement->execute(["DENIED", $staffid]);
                        header('location: staffdata.php');
                    }
                    elseif ($state == "DENIED") 
                    {
                        $statement->execute(["GRANTED", $staffid]);
                    } 
                    elseif ($state == "PENDING") 
                    {
                        $statement->execute(["GRANTED", $staffid]);
                    } 

                    //$result = $statement -> fetchAll(PDO::FETCH_ASSOC);
                }
                ?>

        <?php
            if(isset($_POST['searchbutton']))
            {
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];


            }
        ?>
            
    
        <div class="table-design">
        <h2>User Accounts</h2>
        <table > 
            <thead>
            <tr>
                <th>S.N</th>
                <TH>First Name</TH>
                <th>Last Name</th>
                <th>username</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Gender</th>
                <th>Confirmation</th>
                <th>ACCESS CONTROL</th>
            </tr>
        </thead>
        <tbody>
            <?php // Pull all the accounts in the user accounts database

                $sql = "SELECT FirstName, LastName, username, Email, PhoneNumber, Gender, Passwd, Confirmed, DateOfBirth, StaffID FROM staffaccounts";

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
                    
                <td><?php echo $data['username']; ?> </td>
                    
                <td><?php echo $data['Email']; ?> </td>
                    
                <td><?php echo $data['PhoneNumber']; ?> </td>
                    
                <td><?php echo $data['Gender']; ?> </td>

                <td><?php echo $data['Confirmed']; ?> </td>

                <td>
                    <div class="form">
                        <form action="staffdata.php" method="post"> 
                            <INPUt type="hidden" value=<?php echo $data['StaffID']; ?> name="staffid" ></INPUt>
                            <INPUt type="hidden" value=<?php echo $data['Confirmed']; ?> name="state" ></INPUt>
                            <button type="submit" name="accesscontrol"> 
                                <?php 
                                    if($data['Confirmed'] == "DENIED" )
                                    {
                                        ?><span class="granted"> <?php ECHO "GRANT ACCESS"; ?> </span> <?php
                                    }
                                    else if($data['Confirmed'] == "GRANTED")
                                    {
                                        ECHO "REVOKE ACCESS";
                                    }
                                    else if($data['Confirmed'] == "PENDING")
                                    {
                                        ECHO "APPROVE";
                                    }
                                ?> 
                            </button>
                        </form>
                        </div>
                    </td>
                </tr>  
            <?php

                }

            ?>
</tbody>
        </table>
            </main>
            </div>
    </body>

</HTMl>

<?php
    require_once('adminfooter.php');
?>


