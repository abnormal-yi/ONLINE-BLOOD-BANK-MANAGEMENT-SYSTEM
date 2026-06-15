<?php
/*
 * File: config/db_connection.php
 * Purpose: Database connection configuration for OBBMS
 * Establishes a PDO connection to the MySQL database 'test_obbms'.
 * Key functionality: Creates and exposes $conn PDO object for use by other pages.
 * Uses TCP connection to 127.0.0.1 with user 'yichang' and no password.
 */

error_reporting(0);
ini_set('display_errors', 0);

$servername = "127.0.0.1";
$dbname = "test_obbms";
$username = "yichang";
$password = "";

try
{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e)
{
    echo "Connection failed.";
}

?> 