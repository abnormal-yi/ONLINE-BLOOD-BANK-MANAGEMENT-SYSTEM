<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Maaterial Icons -->
    <link href = "https://fonts.googleapis.com/iconfamily=Material+icons+Sharp" rel="stylesheet">

   <!-- STYLE SHEET -->
    <link rel="stylesheet" href="css/style.css">

    <!------------------------------- START OF SIDE BAR -------------------------->
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="images/tz.png" >
                    <h1> <SPAN class="logo" >OBBMS</SPAN> </h1>
                </div>
                
                <div class="close">
                    <span class= "material-icons-sharp" > X </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="adminhome.php" >
                    <span class= "material-icons-sharp" > * </span>
                    <h3>DASHBOARD</h3>
                </a>
                
                <a href="userdata.php">
                    <span class= "material-icons-sharp" > * </span>
                    <h3>USER DATA</h3>
                </a>
                
                <a href="staffdata.php">
                    <span class= "material-icons-sharp" > * </span>
                    <h3>STAFF DATA</h3><?php
                        $acctype = "PENDING";
                        $data;
                        $sql = "SELECT count(*) FROM staffaccounts WHERE Confirmed = ?";
                        $statment = $conn->prepare($sql);
                        
                        $statment->execute([$acctype]);

                        $result = $statment->fetchColumn(); 

                        if($result)
                        {
                            ?> <span class="notification-count"> <?php echo $result ?> </span> <?php
                        }

                    ?>
                </a>
                
                <a href="hospitaldata.php">
                    <span class= "material-icons-sharp" > * </span>
                    <h3> HOSPITAL DATA </h3><?php
                        $acctype = "PENDING";
                        $data;
                        $sql = "SELECT count(*) FROM hospitals WHERE RegistrationState = ?";
                        $statment = $conn->prepare($sql);
                        
                        $statment->execute([$acctype]);

                        $result = $statment->fetchColumn(); 

                        
                        if($result)
                        {
                            ?> <span class="notification-count"> <?php echo $result ?> </span> <?php
                        }

                    ?>
                    
                </a>

                <a href="hospreq.php">
                    <span class= "material-icons-sharp" > * </span>
                    <h3> HOSPITAL REQUESTS </h3>
                </a>
                
                <a href="showdonnations.php">
                    <span class= "material-icons-sharp" > * </span>
                    <h3> DONNATIONS </h3>
                </a>
                
                <a href="feedbackviewer.php">
                    <span class= "material-icons-sharp" > * </span>
                    <h3> REVIEW FEEDBACK </h3>
                </a>
                
                <a href="report.php">
                    <span class= "material-icons-sharp" > * </span>
                    <h3>REPORT</h3>
                </a>
                <a href="../logout.php">
                    <span class= "material-icons-sharp" > * </span>
                    <h3>LOG OUT</h3>
                </a>

            </div>
        </aside>

        <!------------------------------- END OF SIDE BAR -------------------------->

        </head>
