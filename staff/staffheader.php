<?php
/**
 * File: staffheader.php
 * 
 * Header and sidebar navigation template for the OBBMS staff panel.
 * Renders the logo, sidebar menu with links to all staff pages,
 * and includes required CSS and Material Icons.
 * 
 * Key functionality:
 * - Displays the OBBMS brand logo
 * - Provides navigation links to all staff management pages
 * - Includes a logout link to terminate the session
 */
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Maaterial Icons -->
    <link href = "https://fonts.googleapis.com/iconfamily=Material+icons+Sharp" rel="stylesheet">

   <!-- STYLE SHEET -->
    <link rel="stylesheet" href="./css/style.css">

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
                <a href="userdata.php">
                    <span class= "material-icons-sharp" > * </span>
                    <h3>USER DATA</h3>
                </a>
                
                <a href="incomingblood.php"> 
                    <span class= "material-icons-sharp" > * </span>
                    <h3>ADD DONNATIONS</h3>
                </a>
                
                <a href="hospreqdata.php">
                    <span class= "material-icons-sharp" > * </span>
                    <h3> HOSPITAL REQUESTS </h3>
                </a>
                
                <a href="showdonnations.php">
                    <span class= "material-icons-sharp" > * </span>
                    <h3> DONNATIONS </h3>
                </a>
                
                <a href="staffregistration.php">
                    <span class= "material-icons-sharp" > * </span>
                    <h3>STAFF REGISTRATION</h3>
                </a>
                <a href="../logout.php">
                    <span class= "material-icons-sharp" > * </span>
                    <h3>LOG OUT</h3>
                </a>
            </div>
        </aside>

        <!------------------------------- END OF SIDE BAR -------------------------->

        </head>
