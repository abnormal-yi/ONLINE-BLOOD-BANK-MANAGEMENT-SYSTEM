<?php
$servername = "127.0.0.1";
$dbname = "test_obbms";
$username = "yichang";
$password = "";

try // To connect to the database using PDO Approach
{
    // Connecting . . . 
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     //echo "Connected successfully";
}

catch(PDOException $e) // Catch exucutes when the try fails or is exited
{
    // Show the user the error found when connecting to the database
    echo "Connection failed: " . $e->getMessage();
}

SESSION_START();

?> 