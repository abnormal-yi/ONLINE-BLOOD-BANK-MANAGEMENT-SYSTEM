
<?php
/**
 * File: managerstaff.php
 * Purpose: Staff registration page for OBBMS admin panel.
 *
 * This page provides a form for admins to register new staff members.
 * It captures the staff's first name, last name, email, phone number,
 * date of birth, gender, district, and street, then inserts the record
 * into the appropriate table.
 *
 * NOTE: The INSERT query appears to have a column/table mismatch and
 * uses incorrect bracket syntax for $_POST access. This may require
 * debugging before use.
 */
    require_once('adminheader.php');
    require_once('config/db_admin_connection.php');
?>

<head>
    <title>
        Register Staff
    </title>
</head>

<?php

if(isset($_POST["addstaff"]))
{
    // Retrieve staff registration form data
    $fname = $_POST(['fname']);
    $lname = $_POST(['lname']);
    $email = $_POST(['email']);
    $phone = $_POST(['phone']);
    $dob = $_POST(['dob']);
    $gender = $_POST(['gender']);
    $district = $_POST(['district']);
    $street = $_POST(['street']);

    $data = [$fname, $lname, $email, $phone, $gender, $dob, $district, $street]; 
    // Insert new staff record
    $sql = 'INSERT INTO hospitals(FirstName, LastName, Email, PhoneNumber, DateOfBirth, Gender, District, street, HospitalID) VALUE(?,?,?,?,?)';

    // Prepare the INSERT statement
    $stmt = $conn->prepare($sql);

    // Execute the insert with sanitized data
    $result = $stmt->execute($data);
}
?>

<body>
    <div>
        <form action="registerhospitals.php">
            <label for="hospitalName"> First Name</label>
            <input type="text" name="hospname">
            <label for="hospitalName"> Last Name</label>
            <input type="text" name="hospname">
            <label for="hospitalName"> Email</label>
            <input type="text" name="hospemail">
            <label for="hospitalName"> Phone Number</label>
            <input type="text" name="hospphone">
            <label for="hospitalName"> Date Of Birth</label>
            <input type="date" name="dob">
            <label for="hospitalName"> Gender</label>
            <input type="text" name="hospphone">
            <label for="hospitalName"> District</label>
            <input type="text" name="hospdis">
            <label for="hospitalName"> Street</label>
            <input type="text" name="hospstr">

            <button type="submit" name="addstaff"> Register Staff </button>
        </form>
    </div>
</body>

<?php
    require_once('adminfooter.php');
?>