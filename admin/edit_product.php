<?php
session_start();

require_once('adminconfig.php');

if (!isset($_SESSION['admin_id'])) {
    header("Location: adminlogin.php");
    exit(); // Ensure script stops execution after redirection
}

if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];

    // Retrieve user data based on the ID
    $sql = "SELECT * FROM user WHERE user_id = '$edit_id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $username = $row['username'];
        $email = $row['email'];
        $password = $row['password'];
    } else {
        exit();
    }
} else {
    header("Location: users.php");
    exit();
}

if (isset($_POST['submit'])) {
    // Retrieve updated form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $new_password = $_POST['new_password'];

    // Validate form data
    // Add your validation logic here

    // Update user data
    $sql = "UPDATE user SET username='$username', email='$email'";
    if (!empty($new_password)) {
        $sql .= ", password='$new_password'";
    }
    $sql .= " WHERE user_id='$edit_id'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header("Location: users.php");
        exit();
    } else {
        echo "Error updating user: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>

<form method="POST" action="edituser.php?edit_id=<?php echo $edit_id; ?>">
    <input type="hidden" id="edit_id" name="edit_id" value="<?php echo $edit_id; ?>">
    <input type="text" id="username" name="username" placeholder="Edit Username" value="<?php echo $username; ?>" required>
    <input type="email" id="email" name="email" placeholder="Edit Email" value="<?php echo $email; ?>" required>
    <input type="password" id="new_password" name="new_password" placeholder="New Password">
    <input type="submit" name="submit" class="add" value="Update">
    <a href="users.php">Cancel</a>
</form> 

</body>
</html>

