<?php
/*
 * File: config.php
 * Purpose: Alternate database connection configuration for OBBMS
 * Establishes a PDO connection to the MySQL database 'obbms' on localhost.
 * Key functionality: Creates and exposes $db PDO object (used by staff pages).
 * Uses localhost socket connection with user 'root' and no password.
 */

$db_user = "root";
$db_pass = "";
$db_name = "obbms";

$db = new PDO('mysql:host=localhost;dbname=' . $db_name . '; charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>