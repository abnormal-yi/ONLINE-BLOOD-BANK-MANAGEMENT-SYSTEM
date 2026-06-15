<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Maaterial Icons -->
    <link href = "https://fonts.googleapis.com/iconfamily=Material+icons+Sharp" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

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
                <a href="index.php" >
                    <span class= "material-icons-sharp" > * </span>
                    <h3>HOME</h3>
                    
                </a>
                
                <a href="<?php
                    if(isset($_SESSION['role']) && $_SESSION['role'] == 'user')
                    {
                        echo 'useraccount.php';
                    }
                    else
                    {
                        echo 'login.php';
                    }
                    ?> ">
                    <span class= "material-icons-sharp" > * </span>
                    <h3>USER ACCOUNT</h3>
                </a>
                
                <a href="hospreqblood.php">
                    <span class= "material-icons-sharp" > * </span>
                    <h3> HOSPITAL SERVICES </h3>
                </a>
                
                <a href="about.php">
                    <span class= "material-icons-sharp" > * </span>
                    <h3> ABOUT OBBMS </h3>
                </a>
                
                <a href="contact.php">
                    <span class= "material-icons-sharp" > * </span>
                    <h3>MORE DETAILS</h3>
                </a>

            </div>
        </aside>

        <!------------------------------- END OF SIDE BAR -------------------------->

        </head>
