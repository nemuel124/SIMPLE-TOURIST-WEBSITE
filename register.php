<?php
    session_start();
    require_once('connection.php');
    
    if(isset($_SESSION['user_id'])){
        header("Location: index.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="registerstyless.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TouristSpotter INB</title>
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
            <div class="registerContainer">
         <img class="formLogo" src="images/IMG_20240422_212432.jpg" alt="FormLogo"/>

                <div class="btnsContainer">
                <button class="registerBtn"><a href="register.php">Register</a></button>
                <button class="loginBtn"><a href="login.php">Log in</a></button>
               </div>

                <form class="registerForm" action="register.php" method="POST">

             <?php    
                if(isset($_POST['submit'])){
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $cpassword = $_POST['cpassword'];
    
    
                    $sql = "SELECT * FROM user WHERE email = '$email'";
                    $query = mysqli_query($conn, $sql);
                    $check_row = mysqli_num_rows($query);
                    
                    if($check_row > 0){
                        echo '<script>
                                alert("Email already exists!");
                            </script>';
                    }
                   else if($password != $cpassword){
                        echo '<script>
                           alert("Password does not match!");
                            </script>';
                    } else {
                    
                        $sql = "INSERT INTO user (email,username, password) VALUES ('$email', '$username', '$password');";
                        $query = mysqli_query($conn, $sql);
    
                        if($query){
                            echo '<script>
                                alert("Successfully registered!");
                            </script>';

                        }
    
                    }
                }
    
            ?>



                        <input type="email" name="email" placeholder="Create Email" required/>

                        <input type="text" name="username" placeholder="Create Username" required/>
                   
                        <input type="password" name="password" placeholder="Create password" required/>
                    
                        <input type="password" name="cpassword" placeholder="Confirm password" required/>
                        <input type="checkbox" required><span class="agreement">I agree to the Terms and Conditions</span></input>

                            <input type="submit" value="Submit" name="submit"/>

                          <span class="alreadyAcc">Already have an <a href="login.php">account?</a></span>
                </form>

            </div>


    <div class="footer">
        About Us/Information

        <!--ilisi nnyu if want nnyu butngan contacts-->
    </div>        
    </div>


</body>
</html>