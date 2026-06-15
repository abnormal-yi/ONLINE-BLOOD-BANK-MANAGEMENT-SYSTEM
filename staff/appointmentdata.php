<!DOCTYPE html>
    <head>
        <?php
            require_once('config/db_staff_connection.php');
            require_once('staffheader.php');
        ?>
        <title>
            User Data
        </title>
                    

    </head>
    
    <body>
        <main>
        <div class="form">
            <h3>Search user by the following</h3> 
            <form action="userdata.php" method="post">
                <input type="text" placeholder="First Name" name="fname">
                <input type="text" placeholder="Last Name" name="lname">
                <input type="text" placeholder="Email" name="email">
                <input type="text" placeholder="Phone Number" name="phone">
                <button type="submit" name="searchbutton"> Search </button>
                </form>
            </div>
            <div>
            <form action="userdata.php" method="post">
                <button type="submit" name="showall"> Show all Users </button>
            </form>
        </div>
        
        <?php
        
                $sql = "SELECT appid, OrganizationName, EventName, RepName, DateOfEvent, Ward, street, Email, PhoneNumber, State FROM appointments";

                $statement = $conn->prepare($sql);

                $statement->execute();

                $result = $statement -> fetchAll(PDO::FETCH_ASSOC);

                if($result)
                {

                ?>
                <div class="table-design">
                    <h2>All User Accounts</h2>
                    <table> 
                    <thead>
                        <th>Appointment ID</th>
                        <TH>Organization Name</TH>
                        <TH>Event Name</TH>
                        <th>Representative Name</th>
                        <th>Representative Email</th>
                        <th>Representative Phone Number</th>
                        <th>Ward</th>
                        <th>Street</th>
                        <th>Date Of Event</th>
                        <th>Appointment State </th>
                        <th>Appointment Control </th>
                    </thead>
                    <tbody>
                <?php
                    $sn=1;  
                
                    foreach($result as $data) {
                ?>
                    <tr>

                    <td><?php echo $data['appid']; ?> </td>

                    <td><?php echo $data['OrganizationName']; ?> </td>
                            
                    <td><?php echo $data['EventName']; ?> </td>
                        
                    <td><?php echo $data['RepName']; ?> </td>
                            
                    <td><?php echo $data['Email']; ?> </td>
                        
                    <td><?php echo $data['PhoneNumber']; ?> </td>
                            
                    <td><?php echo $data['Ward']; ?> </td>
                            
                    <td><?php echo $data['street']; ?> </td>

                    <td><?php echo $data['DateOfEvent']; ?> </td>

                    <td><?php echo $data['State']; ?> </td>

                    <td> 
                         <button> <?php
                                if($data['State'] == 'PENDING')
                                {
                                    echo 'ACCEPT';
                                }
                                else if($data['State'] == 'ACCEPT')
                                {
                                    echo 'CANCEL';
                                }
                             ?>
                         </button>
                    </td>
                            
                    </tr>  
                    </tbody>
                <?php
                        
                    }
                }
                else
                {
                    ?>
                        <h3> NO USERS WHERE FOUND. </h3>
                    <?php
                            }
    
                    ?>
                </table>

                    </div>
                    </div>
                    </main>

    </body>
    
</HTMl>

<?php
    require_once('stafffooter.php');
?>


