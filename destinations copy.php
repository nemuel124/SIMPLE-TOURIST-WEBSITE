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
                    <div class="firstimage">
                    <a href="TouristSpots/Screenshot_20240422-194030_1.png"><img src="TouristSpots/Screenshot_20240422-194030_1.png" alt=""></a>
                   <span class="firstspan">Place Name</span>
            </div>

            <div class="secondimage">
                <a href="TouristSpots/Screenshot_20240422-194346_1.png"><img src="TouristSpots/Screenshot_20240422-194346_1.png" alt=""></a>
                <span class="secondspan">Place Name</span>
                
            </div>

            <div class="thirdimage">
                <a href="TouristSpots/Screenshot_20240422-194717_1.png"><img src="TouristSpots/Screenshot_20240422-194717_1.png" alt=""></a>
                <span class="thirdspan">Place Name</span>
            </div>  
                
           <div class="fourthimage"> 
                <a href="TouristSpots/Screenshot_20240422-195232_1.png"><img src="TouristSpots/Screenshot_20240422-195232_1.png" alt=""></a>
                <span class="fourthspan">Place Name</span>
            </div>
            
            <div class="fifthimage">
                <a href="TouristSpots/Screenshot_20240422-195523_1.png"><img src="TouristSpots/Screenshot_20240422-195523_1.png" alt=""></a>
                <span class="fifthspan">Place Name</span>
            </div>
            
            <div class="sixthimage">
                <a href="TouristSpots/Screenshot_20240422-200826_1.png"><img src="TouristSpots/Screenshot_20240422-200826_1.png" alt=""></a>
                <span class="sixthspan">Place Name</span>
            </div>
            
            <div class="seventhimage">
                <a href="TouristSpots/Screenshot_20240422-200117_1.png"><img src="TouristSpots/Screenshot_20240422-200117_1.png" alt=""></a>
                <span class="seventhspan">Place Name</span>
            </div>
            
            <div class="eighthimage">
                <a href="TouristSpots/Screenshot_20240422-200242_1.png"><img src="TouristSpots/Screenshot_20240422-200242_1.png" alt=""></a>
                <span class="eighthspan">Place Name</span>
            </div>

            </div>
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
    require_once('connection.php');
     
        $userId = $_SESSION['user_id'];
        $sql = "SELECT username FROM user WHERE user_id = '$userId'";
        $query = mysqli_query($conn, $sql);
        
        if($query){
            $userData = mysqli_fetch_assoc($query);
            $username = $userData['username'];
            
            echo $username;
        }
?>                  
                    </span>
                    <div class="user_navs">
                        <ul>
                            <a href="userinfo.php"><li>My Info</li></a>
                            <a href="allbookings.php"><li>My Bookings</li></a>
                            <a href="Deals.php"><li>Deals</li></a>
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