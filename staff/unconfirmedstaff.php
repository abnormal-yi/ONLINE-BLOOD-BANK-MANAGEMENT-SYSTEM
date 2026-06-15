<?php
/**
 * File: unconfirmedstaff.php
 * 
 * Displays an access denied message for staff members whose
 * accounts have not yet been approved by an administrator.
 * Shown when a staff account status is DENIED or PENDING.
 * 
 * Key functionality:
 * - Informs the user their account is unconfirmed
 * - Provides a link back to the staff login page
 */
?>
<head>
    <title>
        ACCESS DENIED
    </title>
</head>
<h3>ACCESS DENIED</h3>
<P>your account has not been confirmed by the Administrator</P>
<p> Please contact your Administrator.</p>
<a href="staffindex.php"> HOME </a>
<?php
    require_once('stafffooter.php');
?>