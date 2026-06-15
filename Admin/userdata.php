<!DOCTYPE html>
    <head>
        <?php
            require_once('config/db_admin_connection.php');
            require_once('adminheader.php');
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
            #Show the user accounts with the following specific details
            if(isset($_POST['searchbutton']))
            {
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];

                $sql = "SELECT id, FirstName, LastName, Email, PhoneNumber, DateOfBirth, Gender, BloodGroup, District, Street FROM useraccount WHERE FirstName LIKE ? OR LastName LIKE ?
                        OR Email LIKE ? OR PhoneNumber LIKE ?";

                $statement = $conn->prepare($sql);

                $statement->execute([$fname, $lname, $email, $phone]);

                $result = $statement -> fetchAll(PDO::FETCH_ASSOC);

                if($result)
                {
                ?>
                <div class="table-design">
                <h2>User Accounts</h2>
                <table>
                    <thead>
                        <th>S.N</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Gender</th>
                        <th>Blood Group</th>
                        <th>District</th>
                        <th>Street</th>
                    </thead>
                <tbody>
                <?php
                    $sn=1;  
                
                    foreach($result as $data) {
                    ?>
                    <tr>

                        <td><?php echo $data['id']; ?> </td>
        
                        <td><?php echo $data['FirstName']; ?> </td>
                            
                        <td><?php echo $data['LastName']; ?> </td>
                            
                        <td><?php echo $data['Email']; ?> </td>
                            
                        <td><?php echo $data['PhoneNumber']; ?> </td>
                            
                        <td><?php echo $data['Gender']; ?> </td>
                            
                        <td><?php echo $data['BloodGroup']; ?> </td>
                            
                        <td><?php echo $data['District']; ?> </td>
                            
                        <td><?php echo $data['Street']; ?> </td>
        
                    </tr>  
                    
                <?php
                }
                    
                }
                else
                {
                    ?>
                        <h3> NO USER WITH THIS INFORMATION WAS FOUND. </h3>
                    <?php
                }
            }

            # Show all the users data in the database
            //if(isset($_POST['showall']))
            else
            {
                $sql = "SELECT id, FirstName, LastName, Email, PhoneNumber, DateOfBirth, Gender, BloodGroup, District, Street FROM useraccount";

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
                        <th>S.N</th>
                        <TH>First Name</TH>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Gender</th>
                        <th>Blood Group</th>
                        <th>District</th>
                        <th>Street</th>
                    </thead>
                    <tbody>
                <?php
                    $sn=1;  
                
                    foreach($result as $data) {
                ?>
                    <tr>

                    <td><?php echo $data['id']; ?> </td>

                    <td><?php echo $data['FirstName']; ?> </td>
                            
                    <td><?php echo $data['LastName']; ?> </td>
                        
                    <td><?php echo $data['Email']; ?> </td>
                            
                    <td><?php echo $data['PhoneNumber']; ?> </td>
                        
                    <td><?php echo $data['Gender']; ?> </td>
                            
                    <td><?php echo $data['BloodGroup']; ?> </td>
                            
                    <td><?php echo $data['District']; ?> </td>
                            
                    <td><?php echo $data['Street']; ?> </td>

                    
                            
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
                        }
    
                    ?>
                </table>

                    </div>
                    </div>
                    </main>

    </body>
    
</HTMl>

<?php
    require_once('adminfooter.php');
?>


