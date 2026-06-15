<?php
    session_start();
    if(!isset($_SESSION['role']) || $_SESSION['role'] != 'admin')
    {
        header('location: ../login.php');
        exit();
    }
    require_once('config/db_admin_connection.php');
    require_once('adminheader.php');
?>

<head>
    <TItle>
        Home | Admin
    </TItle>
</head>
<body>
    <main>
        <h1> WELCOME ADMIN: <?php echo $_SESSION['name']; ?> </h1>
        <div class="insights">
            <div class="mid-boxes">
                <h3>TOTAL USERS</h3>
                <?php
                    $stmt = $conn->query("SELECT COUNT(*) FROM useraccount");
                    $users = $stmt->fetchColumn();
                    echo "<h1>$users</h1>";
                ?>
            </div>
            <div class="mid-boxes">
                <h3>TOTAL HOSPITALS</h3>
                <?php
                    $stmt = $conn->query("SELECT COUNT(*) FROM hospitals");
                    $hospitals = $stmt->fetchColumn();
                    echo "<h1>$hospitals</h1>";
                ?>
            </div>
            <div class="mid-boxes">
                <h3>TOTAL STAFF</h3>
                <?php
                    $stmt = $conn->query("SELECT COUNT(*) FROM staffaccounts");
                    $staff = $stmt->fetchColumn();
                    echo "<h1>$staff</h1>";
                ?>
            </div>
            <div class="mid-boxes">
                <h3>TOTAL DONATIONS</h3>
                <?php
                    $stmt = $conn->query("SELECT COUNT(*) FROM donnations");
                    $donations = $stmt->fetchColumn();
                    echo "<h1>$donations</h1>";
                ?>
            </div>
            <div class="mid-boxes">
                <h3>PENDING FEEDBACK</h3>
                <?php
                    $stmt = $conn->query("SELECT COUNT(*) FROM feedback");
                    $feedback = $stmt->fetchColumn();
                    echo "<h1>$feedback</h1>";
                ?>
            </div>
        </div>
    </main>
</div>
</body>

<?php
    require_once('adminfooter.php');
?>
