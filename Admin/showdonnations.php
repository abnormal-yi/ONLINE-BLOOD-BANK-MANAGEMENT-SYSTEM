<?php
/**
 * File: showdonnations.php
 * Purpose: Blood donations display page for OBBMS admin panel.
 *
 * This page allows admins to view all blood donation records. It
 * supports filtering by date range (start date to end date) and can
 * also display all donations. Results are shown in a table with donor
 * details including name, contact, gender, donation date, and location.
 */
?>
<html>
    <head>
        <?php
            require_once('config/db_admin_connection.php');
            require_once('adminheader.php');
        ?>
        <title>
            Donnations
        </title>
    </head>

    <body>
        <main>
            <h1>WELCOME ADMIN</h1>
                <form action="showdonnations.php" method="post">
                        <h3>SPECIFY DATES NEEDED</h3>
                        <div class = "date">
                            <label for="">Start Date</label>
                            <input type="date" name="startdate" placeholder="Start Date">
                        </div>

                        <div class="date">
                            <label for="">End Date</label>
                            <input type="date" name="enddate" placeholder="End Date">
                        </div>
                        <div class="click-button">
                            <button type="submit" name="searchbutton" > Show Donnations  </button>
                            
                            <button type="submit" name="alldonnations" > Show ALL Donnations  </button>
                        </div>
                </form>
                    
                <?php
                    
                    # Handle date-filtered donation search
                    if(isset($_POST['searchbutton']))
                    {
                        $fromdate = $_POST['startdate'];
                        $todate = $_POST['enddate'];
                            if($fromdate && $todate != null)
                            {
                                $data = [$fromdate, $todate];

                                // Query donations within the specified date range
                                $sql = "SELECT FirstName, LastName, Email, PhoneNumber, Gender, DateOfDonnation,PlaceOfDonnation, District, Street FROM donnations 
                                        WHERE DateOfDonnation >= ? AND DateOfDonnation <= ?";
                                
                                $statement = $conn->prepare($sql);

                                $statement->execute($data);

                                $result = $statement -> fetchAll(PDO::FETCH_ASSOC);

                        if($result)
                        {
                        ?>
                        
                        <div class="table-design">
                        <h2>Donnations</h2>
                        <table>
                            <thead>
                                <th>S.N</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Gender</th>
                                <th>Date Of Donnation</th>
                                <th>Place Of Donnation</th>
                                <th>Donnator's District</th>
                                <th>donnator's Street</th>
                            </thead>
                        <tbody>
                        <?php
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
                                    
                                <td><?php echo $data['DateOfDonnation']; ?> </td>
                                    
                                <td><?php echo $data['PlaceOfDonnation']; ?> </td>
                                    
                                <td><?php echo $data['District']; ?> </td>
                                    
                                <td><?php echo $data['Street']; ?> </td>

                            </tr>  
                        <?php
                        }
                            
                        }
                        else
                        {
                            ?>
                                NO USER WITH THIS INFORMATION WAS FOUND. 
                            <?php
                        }
                    }
                    else {
                        ?>
                            <h3>PLEASE INPUT THE DATE OR USE THE SHOW ALL DONNATIONS BUTTON </h3>
                        <?php
                    }
                }
                
                
                    # Show all donations when no date filter is applied
                    //if(isset($_POST['alldonnations']))
                    else {
                        // Fetch all donation records
                        $sql = "SELECT FirstName, LastName, Email, PhoneNumber, Gender, DateOfDonnation,PlaceOfDonnation, District, Street FROM donnations";
                        
                        $statement = $conn->prepare($sql);

                        $statement->execute();

                        $result = $statement -> fetchAll(PDO::FETCH_ASSOC);

                        if($result)
                        { ?>

                        <div class="table-design">
                            <h2>Donnations</h2>
                            <table>
                                <thead>
                                    <th>S.N</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Gender</th>
                                    <th>Date Of Donnation</th>
                                    <th>Place Of Donnation</th>
                                    <th>Donnator's District</th>
                                    <th>donnator's Street</th>
                                </thead>
                                <tbody>
                                <?php
                                    $sn=1;  
                                
                                    foreach($result as $data) { ?>

                                    <tr>

                                        <td><?php echo $sn++; ?> </td>

                                        <td><?php echo $data['FirstName']; ?> </td>
                                            
                                        <td><?php echo $data['LastName']; ?> </td>
                                            
                                        <td><?php echo $data['Email']; ?> </td>
                                            
                                        <td><?php echo $data['PhoneNumber']; ?> </td>
                                            
                                        <td><?php echo $data['Gender']; ?> </td>
                                            
                                        <td><?php echo $data['DateOfDonnation']; ?> </td>
                                            
                                        <td><?php echo $data['PlaceOfDonnation']; ?> </td>
                                            
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
            ?>
                    </tbody>
                    </table>
                

            </div>

        </main>
        </div>
    </body>
</html>