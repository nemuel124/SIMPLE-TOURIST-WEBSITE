<?php
include('users.php');
require_once('adminconfig.php');


if(!isset($_SESSION['admin_id'])){
    header("Location: adminlogin.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>
    <div class="formCon">
    <form method="POST" action="adduser.php">
          
    <?php    

                if(isset($_POST['submit'])){
                    $email = $_POST['email'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $cpassword = $_POST['cpassword'];
    
    
    
                    $sql = "SELECT * FROM user WHERE email = '$email'";
                    $query = mysqli_query($conn, $sql);
                    $check_row = mysqli_num_rows($query);
                    
                    if($check_row > 0){
                        echo '<script>
                                alert("Email already exists!");
                            </script>';
                            die();
                    }
                    if($password != $cpassword){
                        echo '<script>
                           alert("Password does not match!");
                            </script>';
                            die();
                    } else {
                    
                        $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password');";
                        $query = mysqli_query($conn, $sql);
    
                        if($query){
                            echo '<script>
                                alert("User Successfully Added!");
                                window.location.href = "users.php";
                            </script>';

                        }
    
                    }
                }
    
            ?>

        <input type="text" id="username" name="username" placeholder="Create Username" maxlength="15" minlength="8" required>

        <input type="email" id="email" name="email" placeholder="Create Email" required>
        <input type="text" id="password" name="password" placeholder="Create Password" required>

        <input type="text" id="password" name="cpassword" placeholder="Confirm Password" required>

        <input type="submit" name="submit" class="add" value="Add">
        <a href="users.php">Cancel</a>
    </form> 
    </div>
</body>
</html>
<style>
    body{
        width:100%;
        height:100%;
    }
  .formCon{
    position: relative;
    left:40%;
    margin-top:10%;

  }
    form{
        border-radius:10px;
        background:rgba(215, 215, 215, 0.912);
        box-shadow:1px 2px 3px 2px black;
        width: 20rem;
        height:20rem;
        display:inline-block;
        padding:.5rem;
        text-align:center;
        padding-top:3rem;
        
    }
    input{
        width:15rem;
        height:2rem;
        margin-top:1rem;
        padding-left:10px;
        border-radius:15px;
        border:1px solid black;
        outline:none;
        
    }
    .add{
    width: 5rem;
    float:center; 
    cursor:pointer;       
    }
    .add:hover{
        background-color:black;
        color:white;
    }
   form a{  
        position:relative;
        top:1.5rem;
        float:right;
        right:5rem;
        text-decoration:none;
    }form a:hover{
        color:red;
    }
    </style>
