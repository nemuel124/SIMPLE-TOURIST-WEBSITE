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
                            <a href="myuserinfo.php"><li>My Info</li></a>
                            <a href="allbookings.php"><li>All Bookings</li></a>
                            <a href="Deals.php"><li>Deals</li></a>
                            <a href="destinations.php"><li>Destinations</li></a>
                            <a href="Book.php"><li>Book</li></a>                                            
                          <a href="logout.php"><li>Log out</li></a>
                        </ul>
                    </div>         
            </div>
            <!--User Container-->
          




        <div class="aboutCon">
            <h2>About</h2>


            <img src="images/Ph_locator_bohol_inabanga.png">
            <div class="abouttext">
            <p>
                The Municipality of Inabanga is located in northern
                coast of Bohol, 71 kilometers from Tagbilaran City. Considered
                as 3rd class municipality, the town is a total land area of 
                13,166 hectares, Bohol's 3rd town. It has a population of 43,331 people according 
                to the 2007 census in more or less 7,867 households.
                It is politically subdivided into 50 barangays.
                And many barangays has very own beautiful tourist spots owned.
            </p>
        </div>

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
.aboutCon{
    position: absolute;   
     top: -2rem;
     left: 0;
     bottom: 0;
     height: 760px;

    border:2px solid black;
    width: 100%;
    background-color:rgba(0, 0, 0, 0.508);
}
.aboutCon h2{
    position: relative;
    text-align:center;
    top:6rem;
    background-color:lightgreen;
    width:6rem;
    left:55%;
    border-radius:25px;
    font-weight:100;
    border:1px solid black;
}


.aboutCon img{
    position: relative;
    left:25%;
    top:10rem;
    width: 30rem;
    height:20rem;

}

.aboutCon .abouttext{
    position: relative;
    color:white;
    font-size:1.5em;
    float:right;
    top:10.1rem;
    right:10rem;
    width: 30%;
    height:18rem;
    border:1px solid black;
    padding:1rem;
    
} 
.aboutCon .abouttext p {
    text-indent: 50px; /* Adjust the value as needed */
}


</style>