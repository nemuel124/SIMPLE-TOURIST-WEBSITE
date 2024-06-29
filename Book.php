<?php
    session_start();

    require_once('connection.php');

    if(!isset($_SESSION['user_id'])){
        header("Location: login.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TouristSpotter INB</title>
   <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/all.min.css">
    <link rel="stylesheet" href="indexstyle.css">
</head>
<body>
    <div class="main-container">
        <div class="navCon">
            <ul>
                <a href="index.php"><li>Home</li></a>
                <a href="about.php"><li>About</li></a>
                <a href="contact.php"><li>Contact</li></a>
            </ul>
        </div>

        <div class="logo">
            <img src="images/IMG_20240422_212511.jpg" alt="logo">
        </div>
     
        <div class="griplines">
             <i class="fa-solid fa-grip-lines"></i>
            <i class="ex fa-solid fa-grip-lines"></i>
        </div>
            <div class="userContainer">
                <i class="fa-solid fa-user"></i>
                <span class="userName">

                <?php
if(isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];
    
    // Sanitize input to prevent SQL injection
    $userId = mysqli_real_escape_string($conn, $userId);
    
    $sql = "SELECT username FROM user WHERE user_id = '$userId'";
    $query = mysqli_query($conn, $sql);
    
    if($query) {
        if(mysqli_num_rows($query) > 0) {
            $userData = mysqli_fetch_assoc($query);
            $username = $userData['username'];
            
            echo $username;
        } else {
            echo "user not found";
        }
    } else {
        echo "Error in query: " . mysqli_error($conn);
    }
} else {
    echo "user ID not set in session";
}
?>                          
                    </span>
                    <div class="user_navs">
                        <ul>
                            <a href="userinfo.php"><li>My Info</li></a>
                            <a href="allbookings.php"><li>All Bookings</li></a>
                            <a href="Deals.php"><li>Deals</li></a>
                            <a href="destinations.php"><li>Destinations</li></a>
                            <a href="Book.php"><li class="book">Book</li></a>                       
                          <a href="logout.php"><li>Log out</li></a>
                        </ul>
                    </div>         
            </div>
            <!--User Container-->
          

            <form method="POST" action="Book.php">
            <?php
// Include your database connection file
require_once('connection.php');

// Check if the form is submitted
if(isset($_POST['submit'])) {
    // Retrieve form data
    $book_name = $_POST['book_name'];
    $book_lname = $_POST['book_lname'];
    $book_email = $_POST['book_email'];
    $contact = $_POST['contact'];
    $date = $_POST['date'];
    $people = $_POST['people'];
    $interest = $_POST['interest'];
    $additional = $_POST['additional'];

    // Prepare and execute SQL query to insert data into 'bookings' table
    $sql = "INSERT INTO bookings (book_name, book_lname, book_email, contact, date, people, interest, additional) 
            VALUES ('$book_name', '$book_lname', '$book_email', '$contact', '$date', '$people', '$interest', '$additional')";

    if(mysqli_query($conn, $sql)) {
        // Data inserted successfully
        echo '<script>alert("Booking successful!");
            window.location.href="Book.php";
        </script>';

    } else {
        // Error occurred while inserting data
        echo "Error: " . mysqli_error($conn);
    }
}
?>

    <h2>Tour Booking Form</h2>
    <label for="name">Name</label>
    <input type="text" name="book_name" placeholder="First" required>
    <input type="text" name="book_lname" placeholder="Last" required>

    <label for="email">Email</label>
    <input type="email" name="book_email" placeholder="example@gmail.com" required>

    <label for="contact">Phone</label>
    <input type="number" name="contact" placeholder="*** **** ****" maxlength="11" required>

    <label for="date">When are you planning to visit?</label>
    <input type="date" name="date" required>

    <label for="people">How many people are in your group?</label>
    <input type="number" name="people" placeholder="0" required>

    <label for="interest">Please input the destination name</label>
    <?php

// Check if image_id is set in the URL
if(isset($_GET['image_id'])) {
    $image_id = $_GET['image_id'];

    // Retrieve image_name based on image_id
    $sql = "SELECT image_name FROM images WHERE image_id = '$image_id'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $image_name = $row['image_name'];
    } else {
        // Handle case where image_id is not found
        $image_name = "Image Not Found";
    }
} else {
    // Handle case where image_id is not provided
    $image_name = "";
}
?>
<input type="text" name="interest" placeholder="Let us know what destination do you like" maxlength="50" value="<?php echo $image_name; ?>">

    <label for="additional">Anything we should know?</label>
    <input name="additional" placeholder="Write something you want to share with us." maxlength="50"  required></input>

    <input type="submit" name="submit" value="SEND">
</form>

    



    
    

</body>
</html>
<script src="index.js"></script>

<style>
body{
    background-image: url('images/Summer Creative Hand Painted Swimming Pool Background, Desktop Wallpaper, Pc Wallpaper, Wallpaper Background Image And Wallpaper for Free Download.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    margin-top: 49rem;
    overflow-x: hidden;
    overflow-y: hidden;
}

.userContainer .book{
background-color: black;
}


form{
    position: absolute;
    background-color: rgb(206, 232, 206);
    height: 32rem;
    width: 25rem;
    left: 35rem;
    top: 5rem;
    border-radius: 10px;
    padding: 2rem;
    display:grid;
}

input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
}

input{
    margin: 0.5rem;
    height: 1.8rem;
    outline: none;
}
input:nth-child(3){
    width: 11rem;
}
label{
    position: relative;
    top:.5rem;
    left: .5rem;
}
input:nth-child(4){
    position: relative;
    width: 11rem;
    top: -3.07rem;
    justify-self: right;
}
label[for="email"]{
    position: relative;
    top: -3rem;
}
input:nth-child(6){
    position: relative;
    top: -3rem;
    width: 11rem;
}
label[for="contact"]{
    position: relative;
    justify-self: center;
    left: 2rem;
    top: -7rem;
}
input:nth-child(8){
    position: relative;
    top: -7.25rem;
    width: 11rem;
    justify-self: right;
}

label[for="date"]{
    position: relative;
    justify-self: left;
    top: -7rem;
}
input:nth-child(10){
    position: relative;
    top: -7.3rem;
    width: 11rem;
    justify-self: left;
}

label[for="people"]{
    position: relative;
    justify-self: left;
    top: -7rem;
}
input:nth-child(12){
    position: relative;
    top: -7.3rem;
    width: 95%;
    justify-self: left;
}

label[for="interest"]{
    position: relative;
    justify-self: left;
    top: -7rem;
}
input:nth-child(14){
    position: relative;
    top: -7.3rem;
    width: 95%;
    justify-self: left;
}

label[for="additional"]{
    position: relative;
    justify-self: left;
    top: -7rem;
}
input:nth-child(16){
    position: relative;
    top: -7.3rem;
    padding: .5rem;
    width: 92%;
    justify-self: left;
}

input:nth-child(17){
    position: relative;
    top: -7.3rem;
    padding: .5rem;
    justify-self: center;
    border-radius: 15px;
    width: 5rem;
    background-color: rgb(30, 135, 56);
    color: white;
    border: 1px solid wheat;
    height: 2rem;
}
input:nth-child(17):hover{
background-color: black;
cursor: pointer;
}



</style>