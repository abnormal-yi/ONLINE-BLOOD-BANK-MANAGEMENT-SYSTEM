<!DOCTYPE html>
<html lang="en">
   <head>
   <?php
        session_start();
        require_once('userheader.php');
        require_once('config/db_connection.php');
    ?>
   </head>
   
   <body>
     <main>

<?php
  if(isset($_POST['send']))
  {
    $title = $_POST['title'];
    $message = $_POST['txtarea'];

    if(isset($_SESSION['role']))
    {
        if($_SESSION['role'] == 'user')
        {
            $id = $_SESSION['userid'];
            $stmt = $conn->prepare("SELECT FirstName, Email FROM useraccount WHERE id = ?");
            $stmt->execute([$id]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            $name = $user['FirstName'];
            $email = $user['Email'];
        }
        else
        {
            $name = $_SESSION['name'];
            $email = 'N/A';
        }
    }
    else
    {
        $name = 'Guest';
        $email = 'guest@unknown.com';
    }

    $pdate = date('Y-m-d');

    if(!empty($title) && !empty($message))
    {
        $sql = 'INSERT INTO feedback(FullName, Email, Title, Message, PDate) VALUES (?, ?, ?, ?, ?)';
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute([$name, $email, $title, $message, $pdate]);

        if($result)
        {
            echo '<p style="color:green;text-align:center;">Feedback sent successfully!</p>';
        }
        else
        {
            echo '<p style="color:red;text-align:center;">Failed to send feedback.</p>';
        }
    }
    else
    {
        echo '<p style="color:red;text-align:center;">Please fill all fields.</p>';
    }
  }
?>

       <h1> CONTACT</h1>

        <div class="form">
        <form action="contact.php" method="post">
            <div class="textbox">
    <h2>GIVE YOUR FEEDBACK</h2>
            </div>
            <div class="textbox">
              <input type="text" placeholder="Title" name="title" required>
            </div>
            
            <div class="textbox">
              <input type="textarea" placeholder="Text Message" name="txtarea" required>
            </div>
            
            <div class="textbox">
            <button class="login_btn" type="submit" name="send"> Send </button>
            </div>

        </form>
    </div>
</main>
   </body>
   </html>
