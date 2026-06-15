
<?php
/**
 * File: managerhospitals.php
 * Purpose: Hospital registration page for OBBMS admin panel.
 *
 * This page provides a form for admins to register new hospitals
 * in the system. It captures the hospital name, email, phone number,
 * district, and street address, then inserts the record into the
 * `hospitals` table.
 */
    require_once('adminheader.php');
    require_once('config/db_admin_connection.php');
?>

<head>
    <title>
        Register Hospitals
    </title>
</head>

<?php

if(isset($_POST["savehospital"]))
{
    // Capture form data for new hospital
    $name = $_POST['hospitalname'];
    $hospemail = $_POST['hospemail'];
    $hospphone = $_POST['hospphone'];
    $hospdis = $_POST['hospdis'];
    $hospstr = $_POST['hospstr'];

    $data = [$name, $hospemail, $hospphone, $hospdis, $hospstr]; 

    // Insert new hospital record into the hospitals table
    $sql = 'INSERT INTO hospitals(HospitalName, Email, PhoneNumber, District, street)
    VALUE(?,?,?,?,?)';

    // Prepare the INSERT statement
    $stmt = $conn->prepare($sql);

    // Execute the insert with sanitized data
    $result = $stmt->execute($data);

}
?>

<body>
    <div>
        <h3>Register Hospital</h3>
        <form action="managerhospitals.php" method="post">
            <label for="hospitalName"> Hospital Name</label>
            <input type="text" name="hospitalname" required>
            <label for="hospitalName"> Hospital Email</label>
            <input type="text" name="hospemail" required>
            <label for="hospitalName"> Hospital Phone Number</label>
            <input type="text" name="hospphone" required>
            <label for="hospitalName"> District</label>
            <input type="text" name="hospdis" required>
            <label for="hospitalName"> Street</label>
            <input type="text" name="hospstr" required>

            <button type="submit" name="savehospital"> Add Hospital </button>
            
        </form>
    </div>
</body>

<?php
    require_once('adminfooter.php');
?>