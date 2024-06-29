<?php
    require_once('connection.php');
    session_start();

    if(isset($_SESSION['user_id'])){

        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TouristSpotter INB</title>
    <link rel="stylesheet" href="loginstyles.css">
</head>
<body>
    <div class="main-container">
        <div class="logo">
            <img src="images/IMG_20240422_212511.jpg" alt="logo">
        </div>

        <div class="Welcome">
            <span class="texts">
                Welcome, Guest!
            </span>
        </div>
            
            <div class="loginContainer">
                <img class="formLogo" src="images/IMG_20240422_212432.jpg" alt="FormLogo"/>

                <div class="btnsContainer">
                <button class="registerBtn"><a href="register.php">Register</a></button>
                <button class="loginBtn"><a href="login.php">Log in</a></button>
               </div>
                
                <form class="loginForm" action="login.php" method="POST">  
                    <?php    
                if(isset($_POST['submit'])){
                        $email = $_POST['email']; 
                         $password = $_POST['password'];

             $sql = "SELECT * FROM user WHERE email = '$email'";
             $query = mysqli_query($conn, $sql);
             $check_row = mysqli_num_rows($query);

    if($check_row == 1){
        
        $row = mysqli_fetch_assoc($query);
        
        if($password == $row['password']){ 
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['email'] = $row['email']; 
            header("Location: index.php");
        } else {
            echo '<script>
                alert("Incorrect password!");
            </script>';
        }
    } else {
        echo '<script>
                alert("Email not found!");
            </script>';
    }
}
?>

                        <input type="email" name="email" placeholder="Enter Email" required/>
                        <input type="password" name="password" placeholder="Enter password" required/>
                        <input type="checkbox">Remember me?</input>
                        
                            <input type="submit" value="gwapoko" name="submit"/>

                          <span class="registerAcc">Not yet <a href="register.php">Registered?</a></span>
                </form>

            </div>


    <div class="footer">
        About Us/Information

        <!--ilisi nnyu if want nnyu butngan contacts-->
    </div>        
    </div>


</body>
</html>