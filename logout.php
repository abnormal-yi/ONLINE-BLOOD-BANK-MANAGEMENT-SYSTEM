<?php
/**
 * logout.php
 *
 * Handles user logout by destroying the current session.
 *
 * Key functionality: Calls session_start() to access the active session,
 * then session_destroy() to clear all session data, and redirects the
 * user to the login page.
 */

session_start();
session_destroy();
header('location: login.php');
exit();
?>