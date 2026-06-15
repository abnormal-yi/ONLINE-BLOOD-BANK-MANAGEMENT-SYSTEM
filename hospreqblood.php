<?php
/**
 * hospreqblood.php
 *
 * Hospital blood request form for ordering blood units by type.
 *
 * Key functionality: Enforces hospital role authentication via session;
 * accepts blood quantity selections (A+, A-, B+, B-, AB+, AB-, O+, O-)
 * via POST and inserts a blood request record into the database.
 */

session_start();
require_once('config/db_connection.php');
require_once('userheader.php');

// Redirect non-hospital users to login page
if(!isset($_SESSION['role']) || $_SESSION['role'] != 'hospital')
{
    header('location: login.php');
    exit();
}

// Retrieve authenticated hospital's ID from session
$hospid = $_SESSION['userid'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Blood Request</title>

</head>

<?php
    // Process blood request form submission
    if(isset($_POST['sendreq']))
    {
        // Collect blood quantity selections for each blood type
        $aplus = $_POST['Aplus'];
        $aminus = $_POST['Aminus'];
        $bplus = $_POST['bplus'];
        $bminus = $_POST['bminus'];
        $abplus = $_POST['abplus'];
        $abminus = $_POST['abminus'];
        $oplus = $_POST['oplus'];
        $ominus = $_POST['ominus'];
        $datereq = date("Y/m/d");

        // Prepare data array: hospital ID, blood type quantities, and current date
        $data = [$hospid, $aplus, $aminus, $bplus, $bminus, $abplus, $abminus, $oplus, $ominus, $datereq];

        // Insert blood request record into the database
        $sql = 'INSERT INTO bloodrequest(HospitalID, APos, ANeg, BPos, BNeg, ABPos, ABNeg, OPos, ONeg, ReqDate) 
                VALUE (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        
        $statement = $conn->prepare($sql);

        $result = $statement->execute($data);

        if($result)
        {
            echo '<p style="color:green;text-align:center;">Blood request sent successfully!</p>';
        }
        else
        {
            echo '<p style="color:red;text-align:center;">Failed to send request.</p>';
        }
    }

?>

<body>
    <main>
        <h1> HOSPITAL BLOOD REQUEST </h1>
        <h3> Only for Hospitals </h3>
        <div class="form">
    <form action="hospreqblood.php" method="post">
        <div class=textbox>
        <label> Group A+ </label>
        <SELECT SIZE="1" NAME="Aplus" required>
            <OPTION VALUE="0" SELECTED>0 Liters</OPTION>
            <OPTION VALUE="5">5 Liters</OPTION>
            <OPTION VALUE="10">10 Liters</OPTION>
            <OPTION VALUE="15">15 Liters</OPTION>
            <OPTION VALUE="20">20 Liters</OPTION>
            <OPTION VALUE="25">25 Liters</OPTION>
            <OPTION VALUE="30">30 Liters</OPTION>
        </SELECT>
        </div>

        <div class=textbox>
        <label> Group A- </label>
        <SELECT SIZE="1" NAME="Aminus" required>
            <OPTION VALUE="0" SELECTED>0 Liters</OPTION>
            <OPTION VALUE="5">5 Liters</OPTION>
            <OPTION VALUE="10">10 Liters</OPTION>
            <OPTION VALUE="15">15 Liters</OPTION>
            <OPTION VALUE="20">20 Liters</OPTION>
            <OPTION VALUE="25">25 Liters</OPTION>
            <OPTION VALUE="30">30 Liters</OPTION>
        </SELECT>
        </div>

        <div class=textbox>
        <label> Group B+ </label>
        <SELECT SIZE="1" NAME="bplus" required>
            <OPTION VALUE="0" SELECTED>0 Liters</OPTION>
            <OPTION VALUE="5">5 Liters</OPTION>
            <OPTION VALUE="10">10 Liters</OPTION>
            <OPTION VALUE="15">15 Liters</OPTION>
            <OPTION VALUE="20">20 Liters</OPTION>
            <OPTION VALUE="25">25 Liters</OPTION>
            <OPTION VALUE="30">30 Liters</OPTION>
        </SELECT>
        </div>

        <div class=textbox>
        <label> Group B- </label>
        <SELECT SIZE="1" NAME="bminus" required>
            <OPTION VALUE="0" SELECTED>0 Liters</OPTION>
            <OPTION VALUE="5">5 Liters</OPTION>
            <OPTION VALUE="10">10 Liters</OPTION>
            <OPTION VALUE="15">15 Liters</OPTION>
            <OPTION VALUE="20">20 Liters</OPTION>
            <OPTION VALUE="25">25 Liters</OPTION>
            <OPTION VALUE="30">30 Liters</OPTION>
        </SELECT>
        </div>

        <div class=textbox>
        <label> Group AB+ </label>
        <SELECT SIZE="1" NAME="abplus" required>
            <OPTION VALUE="0" SELECTED>0 Liters</OPTION>
            <OPTION VALUE="5">5 Liters</OPTION>
            <OPTION VALUE="10">10 Liters</OPTION>
            <OPTION VALUE="15">15 Liters</OPTION>
            <OPTION VALUE="20">20 Liters</OPTION>
            <OPTION VALUE="25">25 Liters</OPTION>
            <OPTION VALUE="30">30 Liters</OPTION>
        </SELECT>
        </div>

        <div class=textbox>
        <label> Group AB- </label>
        <SELECT SIZE="1" NAME="abminus" required>
            <OPTION VALUE="0" SELECTED>0 Liters</OPTION>
            <OPTION VALUE="5">5 Liters</OPTION>
            <OPTION VALUE="10">10 Liters</OPTION>
            <OPTION VALUE="15">15 Liters</OPTION>
            <OPTION VALUE="20">20 Liters</OPTION>
            <OPTION VALUE="25">25 Liters</OPTION>
            <OPTION VALUE="30">30 Liters</OPTION>
        </SELECT>
        </div>

        <div class=textbox>
        <label> Group O+ </label>
        <SELECT SIZE="1" NAME="oplus" required>
            <OPTION VALUE="0" SELECTED>0 Liters</OPTION>
            <OPTION VALUE="5">5 Liters</OPTION>
            <OPTION VALUE="10">10 Liters</OPTION>
            <OPTION VALUE="15">15 Liters</OPTION>
            <OPTION VALUE="20">20 Liters</OPTION>
            <OPTION VALUE="25">25 Liters</OPTION>
            <OPTION VALUE="30">30 Liters</OPTION>
        </SELECT>
        </div>

        <div class=textbox>
        <label> Group O- </label>
        <SELECT SIZE="1" NAME="ominus" required>
            <OPTION VALUE="0" SELECTED>0 Liters</OPTION>
            <OPTION VALUE="5">5 Liters</OPTION>
            <OPTION VALUE="10">10 Liters</OPTION>
            <OPTION VALUE="15">15 Liters</OPTION>
            <OPTION VALUE="20">20 Liters</OPTION>
            <OPTION VALUE="25">25 Liters</OPTION>
            <OPTION VALUE="30">30 Liters</OPTION>
        </SELECT>
        </div>

        <div class="textbox">
            <button type="submit" name = "sendreq">
                SEND REQUEST
            </button>
        </div>
        </div>
    </form>
</main>
<right>

<div class="top">
        <button id="top-right-btn">
          <div class="btn-name">
          WELCOME <?php echo strtoupper($_SESSION['role']) . ': ' . $_SESSION['name'] ?>
          </div>
          
        </button>
        <div class="profile-photo">
          <img src="./images/profile.png" >
        </div>
      </div>
</right>
</body>
</html>
