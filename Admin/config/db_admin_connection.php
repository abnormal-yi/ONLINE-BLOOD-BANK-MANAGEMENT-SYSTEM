<?php
/**
 * File: db_admin_connection.php
 * Purpose: Database connection configuration for OBBMS admin panel.
 *
 * This file establishes a PDO connection to the MySQL database
 * (`test_obbms`) for all admin panel operations. It suppresses
 * PHP error display and sets PDO exception error mode. Include
 * this file in any admin page that requires database access.
 */
error_reporting(0);
ini_set('display_errors', 0);
$servername = "127.0.0.1";
$dbname = "test_obbms";
$username = "yichang";
$password = "";

try
{
    // Establish PDO connection to MySQL database
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e)
{
    echo "Connection failed.";
}

?> 