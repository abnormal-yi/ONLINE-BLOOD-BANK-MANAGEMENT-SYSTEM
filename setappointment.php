<?php
/**
 * setappointment.php
 *
 * Group blood donation appointment scheduling form.
 *
 * Key functionality: Accepts organization/group details via POST form,
 * inserts the appointment request into the appointments table with
 * a PENDING state, and confirms success or failure to the user.
 */
?>
<html>
    <HEAD>
    <?php

require_once('userheader.php');
require_once('config/db_connection.php');

?>
        
        <TITle>
            USER REGISTRATION
        </TITle>
    </HEAD>

    <body>
    <main>
<?php

    // Process appointment form submission
    if(isset($_POST["addstaff"]))
    {
    // Collect appointment details from form fields
    $orgname = $_POST['orgname'];
    $ename = $_POST['ename'];
    $rname = $_POST['rname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = date('y,m,d');
    $street = $_POST['street'];
    $ward = $_POST['ward'];
    $state = 'PENDING';

    // Prepare data array for the appointment insert
    $data = [$orgname, $ename, $rname, $dob,  $ward,  $street, $email, $phone, $state];

    // Insert new appointment record with PENDING state
    $sql = 'INSERT INTO appointments(OrganizationName, EventName, RepName, DateOfEvent, Ward, street, Email, PhoneNumber, State) 
    VALUE(?,?,?,?,?,?,?,?,?)';

    // commit the transaction
    $stmt = $conn->prepare($sql);

    // Execute the sql statement
    $result = $stmt->execute($data);

        if($result)
        {
          echo 'saved' ;
        }
        else
        {
          echo ' Error ';
        }
    }
?>
        <h1>SET UP APPOINTMENT</h1>
        <div class="form">
        <form action="setappointment.php" method="post">
            <div class="textbox">
                <h2>This is for group Appointments NOT INDIVIDUAL</h2>
            </div>
            <div class="textbox">
              <input type="text" placeholder="Group Name" name="orgname" required>
            </div>
            <div class="textbox">
              <input type="text" placeholder="Event Name" name="ename" required>
            </div>
            
            <div class="textbox">
              <input type="text" placeholder="Representative Name" name="rname" required>
            </div>
            
            <div class="textbox">
              <input type="text" placeholder="Representative E-Mail" name="email" required>
            </div>
            
            <div class="textbox">
              <input type="text" placeholder="Representative Phone Number" name="phone" required>
            </div>
            
            <div class="textbox">
              <input type="text" placeholder="Street" name="street" required>
            </div>
            
            <div class="textbox">
              <input type="text" placeholder="Ward" name="ward" required>
            </div>
            
            <div class="textbox">
              <input type="text" placeholder="Code Number" name="phone" required>
            </div>
            
            <div class="textbox">
            <SELECT SIZE="1" NAME="donnors" required>
                <OPTION VALUE="Donnors" SELECTED>EXPECTED DONNORS</OPTION>
                <OPTION VALUE="10 Donnors" >> 10 Donnors</OPTION>
                <OPTION VALUE="10 Donnors" >20 Donnors</OPTION>
                <OPTION VALUE="10 Donnors" >30 Donnors</OPTION>
                <OPTION VALUE="10 Donnors" >40 Donnors</OPTION>
                <OPTION VALUE="10 Donnors" >> 50 Donnors</OPTION>
            </SELECT>
              </div>

            <div class="textbox">
            <button class="login_btn" type="submit" name="addstaff"> SET APPOINTMENT</button>
            </div>
            

        </form>
    </div>
    <div>
        </div>
    </div>
</main>
</body>
</html>
