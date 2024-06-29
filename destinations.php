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
        <div class="Destinations">
            <h2> Most Visited Places</h2>
            
            <div class="imagesContainer">
                
            <?php
require_once('connection.php');
$sql = "SELECT * FROM deals";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        echo '
        <div class="firstimage">
            <a href="admin/' . $row['deals_image'] . '">
                <img src="admin/' . $row['deals_image'] . '" alt="' . $row['deals_name'] . '">
            </a>
            <span class="firstspan">' . $row['deals_name'] . '</span>
        </div>';
    }
} else {
    echo "<div style='margin-left:45rem;'>No deals found.</div>";
}
?>

            </div>
            <!--IMG CON--->
            </span>
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
                            <a href="Deals.php"><li class="dealsNav">Deals</li></a>
                            <a href="destinations.php"><li class="destNav">Destinations</li></a>
                            <a href="Book.php"><li>Book</li></a>                                            
                          <a href="logout.php"><li>Log out</li></a>
                        </ul>
                    </div>         
            </div>
            <!--User Container-->
          
            <div class="searchBar">
                <input type="text" placeholder="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>

        <span class="visitText">
            Visit the Tourist Spots in Inabanga, Bohol!
        </span>


        <div class="DestNav">
           <a href="DestinationLists.php"><button>Navigate to Tourist Spots</button></a> 
        </div>
        

    
    
    </div>

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

.userContainer .destNav{
    background-color: black;
}

    .DestNav{
position: absolute;
bottom: 1.5rem;
width: 100%;
text-align: center;
}.DestNav button{
    color:white;
    border:0;
    outline:0;
    padding:15px;
    font-size: .8em;
    border-radius:25px;
    background:rgba(10, 9, 9, 0.889);
    cursor:pointer;
    transition:all 350ms ease-in-out;
}.DestNav button:hover{
    background:rgba(10, 9, 9, 1.889);
    transform:scale(115%);
    
}




</style>