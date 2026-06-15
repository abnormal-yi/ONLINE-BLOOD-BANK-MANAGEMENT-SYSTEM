<?php
/**
 * File: db_staff_connection.php
 * 
 * Database connection configuration for the OBBMS staff panel.
 * Establishes a PDO connection to the MySQL database and starts
 * the session for authenticated staff access.
 * 
 * Key functionality:
 * - Connects to the test_obbms database using PDO
 * - Sets PDO error mode to exception for error handling
 * - Starts the PHP session for authentication state
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

SESSION_START();

?> 