<?php
/**
 * File: report.php
 * Purpose: System report page for OBBMS admin panel.
 *
 * This page displays a summary report showing aggregate counts for
 * key system entities: users, hospitals, staff, donations, blood
 * requests, and feedback submissions. Session protection ensures
 * only authenticated admins can access this page.
 */
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
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
        <title>
            Report
        </title>
    </head>
</head>
<body>
    <main>
        <h2>SYSTEM REPORT</h2>
        <div class="table-design">
        <table>
            <thead>
                <tr>
                    <th>Metric</th>
                    <th>Count</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Define system metrics to query and display
                $metrics = [
                    'Total Users' => "SELECT COUNT(*) FROM useraccount",
                    'Total Hospitals' => "SELECT COUNT(*) FROM hospitals",
                    'Total Staff' => "SELECT COUNT(*) FROM staffaccounts",
                    'Total Donations' => "SELECT COUNT(*) FROM donnations",
                    'Blood Requests' => "SELECT COUNT(*) FROM bloodrequest",
                    'Feedbacks' => "SELECT COUNT(*) FROM feedback",
                ];
                // Iterate through metrics and execute each count query
                foreach($metrics as $label => $sql):
                    $stmt = $conn->query($sql);
                    $count = $stmt->fetchColumn();
                ?>
                <tr>
                    <td><?php echo $label; ?></td>
                    <td><?php echo $count; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </main>
</body>
</html>
