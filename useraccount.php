<?php
session_start();
require_once('config/db_connection.php');

if(isset($_POST['update_profile']))
{
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $phone = $_POST['phone'];
    $district = $_POST['district'];
    $street = $_POST['street'];
    $blood = $_POST['blood_group'];
    $uid = $_SESSION['userid'];

    $sql = "UPDATE useraccount SET FirstName=?, LastName=?, PhoneNumber=?, District=?, Street=?, BloodGroup=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$fname, $lname, $phone, $district, $street, $blood, $uid]);
    $msg = "Profile updated!";
}

if(isset($_FILES['profile_pic']) && $_FILES['profile_pic']['error'] == 0)
{
    $allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
    $ext = strtolower(pathinfo($_FILES['profile_pic']['name'], PATHINFO_EXTENSION));
    if(in_array($ext, $allowed))
    {
        $fname = 'user_' . $_SESSION['userid'] . '_' . time() . '.' . $ext;
        $dest = 'uploads/' . $fname;
        move_uploaded_file($_FILES['profile_pic']['tmp_name'], $dest);
        $sql = "UPDATE useraccount SET profile_picture=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$dest, $_SESSION['userid']]);
        $pic_msg = "Photo updated!";
    }
}

include('userheader.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>
    <style>
        .profile-section { text-align: center; margin: 20px 0; }
        .profile-pic-wrap { position: relative; display: inline-block; }
        .profile-pic-wrap img { width: 120px; height: 120px; border-radius: 50%; object-fit: cover; border: 3px solid #e74c3c; }
        .camera-overlay {
            position: absolute; bottom: 0; right: 0;
            background: #e74c3c; color: #fff; border-radius: 50%;
            width: 36px; height: 36px; display: flex; align-items: center; justify-content: center;
            cursor: pointer; border: 2px solid #fff;
        }
        .camera-overlay:hover { background: #c0392b; }
        .role-badge {
            display: inline-block; background: #e74c3c; color: #fff;
            padding: 4px 16px; border-radius: 20px; font-size: 13px;
            text-transform: uppercase; margin-top: 8px;
        }
        .msg { color: green; text-align: center; font-weight: bold; }
        .pic-msg { color: green; text-align: center; font-size: 14px; }
        .update-form { max-width: 500px; margin: 20px auto; }
        .update-form table { width: 100%; }
        .update-form td { padding: 8px; }
        .update-form input, .update-form select { width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; }
        .update-form input[type="submit"] { background: #e74c3c; color: #fff; border: none; cursor: pointer; font-weight: bold; }
        .update-form input[type="submit"]:hover { background: #c0392b; }
        .info-section { max-width: 500px; margin: 20px auto; }
        .back-link { display: block; text-align: center; margin-top: 10px; }
    </style>
</head>
<body>
<main>
<?php if(isset($_SESSION['role']) && $_SESSION['role'] == 'user'):
    $accid = $_SESSION['userid'];
    $sql = "SELECT * FROM useraccount WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$accid]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user):
        $pic = $user['profile_picture'] ?: 'images/profile.png';
    ?>
    <h2>WELCOME <?php echo strtoupper($_SESSION['role']) . ': ' . $user['FirstName'] . ' ' . $user['LastName']; ?></h2>

    <?php if(isset($msg)) echo '<p class="msg">' . $msg . '</p>'; ?>
    <?php if(isset($pic_msg)) echo '<p class="pic-msg">' . $pic_msg . '</p>'; ?>

    <div class="profile-section">
        <div class="profile-pic-wrap">
            <img src="<?php echo $pic; ?>" alt="Profile" id="profilePreview">
            <form method="POST" enctype="multipart/form-data" id="picForm" style="display:none;">
                <input type="file" name="profile_pic" id="picInput" accept="image/*" onchange="this.form.submit()">
            </form>
            <div class="camera-overlay" onclick="document.getElementById('picInput').click()">
                <span class="material-symbols-outlined" style="font-size:18px;">photo_camera</span>
            </div>
        </div>
        <div class="role-badge"><?php echo $_SESSION['role']; ?></div>
    </div>

    <div class="info-section">
        <div class="table-design">
            <table>
                <tr><td>Email:</td><td><?php echo $user['Email']; ?></td></tr>
                <tr><td>Phone:</td><td><?php echo $user['PhoneNumber']; ?></td></tr>
                <tr><td>Blood Group:</td><td><?php echo $user['BloodGroup']; ?></td></tr>
                <tr><td>District:</td><td><?php echo $user['District']; ?></td></tr>
                <tr><td>Street:</td><td><?php echo $user['Street']; ?></td></tr>
            </table>
        </div>
    </div>

    <div class="update-form">
        <h3>UPDATE PROFILE</h3>
        <form method="POST">
            <table>
                <tr><td>First Name:</td><td><input type="text" name="first_name" value="<?php echo $user['FirstName']; ?>"></td></tr>
                <tr><td>Last Name:</td><td><input type="text" name="last_name" value="<?php echo $user['LastName']; ?>"></td></tr>
                <tr><td>Phone:</td><td><input type="text" name="phone" value="<?php echo $user['PhoneNumber']; ?>"></td></tr>
                <tr><td>District:</td><td><input type="text" name="district" value="<?php echo $user['District']; ?>"></td></tr>
                <tr><td>Street:</td><td><input type="text" name="street" value="<?php echo $user['Street']; ?>"></td></tr>
                <tr><td>Blood Group:</td><td>
                    <select name="blood_group">
                        <option value="A+" <?php echo $user['BloodGroup']=='A+'?'selected':''; ?>>A+</option>
                        <option value="A-" <?php echo $user['BloodGroup']=='A-'?'selected':''; ?>>A-</option>
                        <option value="B+" <?php echo $user['BloodGroup']=='B+'?'selected':''; ?>>B+</option>
                        <option value="B-" <?php echo $user['BloodGroup']=='B-'?'selected':''; ?>>B-</option>
                        <option value="AB+" <?php echo $user['BloodGroup']=='AB+'?'selected':''; ?>>AB+</option>
                        <option value="AB-" <?php echo $user['BloodGroup']=='AB-'?'selected':''; ?>>AB-</option>
                        <option value="O+" <?php echo $user['BloodGroup']=='O+'?'selected':''; ?>>O+</option>
                        <option value="O-" <?php echo $user['BloodGroup']=='O-'?'selected':''; ?>>O-</option>
                    </select>
                </td></tr>
                <tr><td colspan="2"><input type="submit" name="update_profile" value="UPDATE"></td></tr>
            </table>
        </form>
    </div>
<?php else: ?>
    <h2>ACCOUNT</h2><p>Please <a href="login.php">log in</a> to view your account.</p>
<?php endif; else: ?>
    <h2>ACCOUNT</h2><p>Please <a href="login.php">log in</a> to view your account.</p>
<?php endif; ?>
</main>
</body>
</html>
