<?php
/**
 * File: unauthorisedadmin.php
 * Purpose: Access denied page for OBBMS admin panel.
 *
 * This page is displayed when a non-admin user attempts to access
 * admin-only sections. It shows a denial message with a link back
 * to the admin login page.
 */
?>
<head>
    <title>
        ACCESS DENIED
    </title>
</head>
<h3>ACCESS DENIED</h3>
<P>Are you EVEN an admin???</P>
<P>GONG GONG GONG ... FBI OPEN UP ! ! !</P>

<a href="adminlogin.php"> HOME </a>
<?php
    require_once('adminfooter.php');
?>