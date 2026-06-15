<?php
/**
 * File: feedbackviewer.php
 * Purpose: User feedback review page for OBBMS admin panel.
 *
 * This page displays all user-submitted feedback in a table, sorted
 * by most recent first. Admins can delete individual feedback entries.
 * Session protection ensures only authenticated admins can access.
 */
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserFeed back</title>

    <?php
        require_once('config/db_admin_connection.php');
        require_once('adminheader.php');
        session_start();
        if(!isset($_SESSION['role']) || $_SESSION['role'] != 'admin')
        {
            header('location: ../login.php');
            exit();
        }
    ?>
    <?php
        // Handle feedback deletion request
        if(isset($_POST['delete']))
        {
            $id = $_POST['id'];
            $sql = 'DELETE FROM feedback WHERE FeedbackID=?';
            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
        }
    ?>
</head>
<body>
    <main>
    <h1> FEEDBACK REVIEW </h1>
    
    <?php
    // Fetch all feedback entries ordered by most recent first
    $sql = 'SELECT FeedbackID, FullName, Email, Title, Message, PDate FROM feedback ORDER BY FeedbackID DESC';

    $statement = $conn->prepare($sql);

    $statement-> execute();

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    if($result)
    {
        ?> 
        <div class="table-design">
        <h2>USER FEEDBACK</h2>
        <table > 
            <thead>
            <tr>
                <TH>Full Name</TH>
                <th>Email</th>
                <th>Title</th>
                <th>Feedback</th>
                <th>Date</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($result as $data): ?>
            <tr>
                <td><?php echo $data['FullName'] ?></td>
                <td><?php echo $data['Email'] ?></td>
                <td><?php echo $data['Title'] ?></td>
                <td><?php echo $data['Message'] ?></td>
                <td><?php echo $data['PDate'] ?></td>
                <td>
                   <div class="form">
                       <form action="feedbackviewer.php" method="post">
                           <input type="hidden" name="id" value="<?php echo $data['FeedbackID'] ?>">
                           <div class="click-button">
                                <button name="delete">DELETE</button>
                           </div>
                       </form>
                   </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
    <?php
    }
    else
    {
        echo '<h3>No feedback yet.</h3>';
    }
    ?>
    </main>
</body>
</html>
