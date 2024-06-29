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
    require_once('connection.php');
     
        $userId = $_SESSION['user_id'];
        $sql = "SELECT username FROM user WHERE user_id = '$userId'";
        $query = mysqli_query($conn, $sql);
        
        if($query){
            $userData = mysqli_fetch_assoc($query);
            $username = $userData['username'];
            
            echo $username."!";
        }
?>                  
                    </span>
                    <div class="user_navs">
                        <ul>
                            <a href="userinfo.php"><li>My Info</li></a>
                            <a href="allbookings.php"><li>All Bookings</li></a>
                            <a href=""><li>Deals</li></a>
                            <a href="destinations.php"><li>Destinations</li></a>
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
    </div>

        <section class="section2">

                    <div class="back">
                      <a href="destinations.php"><button><i class="fa-solid fa-arrow-left"></i></button></a>
                    </div>

                <h2>Destinations</h2>

            <div class="imagecontainer">
                <div class="image-wrapper">
                    <a href="Book.php"><button class="bookbtn">Book Now</button></a>
                    <img src="TouristSpots/Screenshot_20240422-194030_1.png" alt="" class="img1">
                    <span class="title1">Title 1</span>
                </div>
                
                <div class="image-wrapper">
                    <a href="Book.php"><button class="bookbtn">Book Now</button></a>
                    <img src="TouristSpots/Screenshot_20240422-194346_1.png" alt="" class="img2">
                    <span class="title1">Title 2</span>
                </div>
                
                <div class="image-wrapper">
                    <a href="Book.php"><button class="bookbtn">Book Now</button></a>
                    <img src="TouristSpots/Screenshot_20240422-194717_1.png" alt="" class="img3">
                    <span class="title1">Title 3</span>
                </div>
                
                <div class="image-wrapper">
                    <a href="Book.php"><button class="bookbtn">Book Now</button></a>
                    <img src="TouristSpots/Screenshot_20240422-195232_1.png" alt="" class="img4">
                    <span class="title1">Title 4</span>
                </div>
                
                <div class="image-wrapper">
                    <a href="Book.php"><button class="bookbtn">Book Now</button></a>
                    <img src="TouristSpots/Screenshot_20240422-195523_1 copy.png" alt="" class="img5">
                    <span class="title1">Title 5</span>
                </div>
                
                <div class="image-wrapper">
                    <a href="Book.php"><button class="bookbtn">Book Now</button></a>
                    <img src="TouristSpots/Screenshot_20240422-201302_1.png" alt="" class="img6">
                    <span class="title1">Title 6</span>
                </div>
                
                <div class="image-wrapper">
                    <a href="Book.php"><button class="bookbtn">Book Now</button></a>
                    <img src="TouristSpots/Screenshot_20240422-200117_1.png" alt="" class="img7">
                    <span class="title1">Title 7</span>
                </div>
                
                <div class="image-wrapper">
                    <a href="Book.php"><button class="bookbtn">Book Now</button></a>
                    <img src="TouristSpots/Screenshot_20240422-200242_1.png" alt="" class="img8">
                    <span class="title1">Title 8</span>
                </div>
                
                <div class="image-wrapper">
                    <a href="Book.php"><button class="bookbtn">Book Now</button></a>
                    <img src="TouristSpots/Screenshot_20240422-200355_1.png" alt="" class="img9">
                    <span class="title1">Title 9</span>
                </div>
                
                <div class="image-wrapper">
                    <a href="Book.php"><button class="bookbtn">Book Now</button></a>
                    <img src="TouristSpots/Screenshot_20240422-200600_1.png" alt="" class="img10">
                    <span class="title1">Title 10</span>
                </div>
                
                <div class="image-wrapper">
                    <a href="Book.php"><button class="bookbtn">Book Now</button></a>
                    <img src="TouristSpots/Screenshot_20240422-200639_1.png" alt="" class="img11">
                    <span class="title1">Title 11</span>
                </div>
                
                <div class="image-wrapper">
                    <a href="Book.php"><button class="bookbtn">Book Now</button></a>
                    <img src="TouristSpots/Screenshot_20240422-200708_1.png" alt="" class="img12">
                    <span class="title1">Title 12</span>
                </div>
                
                <div class="image-wrapper">
                    <a href="Book.php"><button class="bookbtn">Book Now</button></a>
                    <img src="TouristSpots/Screenshot_20240422-200745_1.png" alt="" class="img13">
                    <span class="title1">Title 13</span>
                </div>
                
                <div class="image-wrapper">
                    <a href="Book.php"><button class="bookbtn">Book Now</button></a>
                    <img src="TouristSpots/Screenshot_20240422-200826_1.png" alt="" class="img14">
                    <span class="title1">Title 14</span>
                </div>
                
                <div class="image-wrapper">
                    <a href="Book.php"><button class="bookbtn">Book Now</button></a>
                    <img src="TouristSpots/Screenshot_20240422-200859_1.png" alt="" class="img15">
                    <span class="title1">Title 15</span>
                </div>
                
                <div class="image-wrapper">
                    <a href="Book.php"><button class="bookbtn">Book Now</button></a>
                    <img src="TouristSpots/Screenshot_20240422-200943_1.png" alt="" class="img16">
                    <span class="title1">Title 16</span>
                </div>
                
                <div class="image-wrapper">
                    <a href="Book.php"><button class="bookbtn">Book Now</button></a>
                    <img src="TouristSpots/Screenshot_20240422-201035_1.png" alt="" class="img17">
                    <span class="title1">Title 17</span>
                </div>
                
                <div class="image-wrapper">
                    <a href="Book.php"><button class="bookbtn">Book Now</button></a>
                    <img src="TouristSpots/Screenshot_20240422-201129_1.png" alt="" class="img18">
                    <span class="title1">Title 18</span>
                </div>




        </section>




    
    

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

.navCon,.searchBar,.logo{
    z-index: 1;
}
.userContainer,.griplines{
    display: none;
}

.back{
    position: relative;
    top: 9rem;
    left: 10rem;
}.back button{
    border: 0;
    transition: all 350ms ease-in-out;
border-radius: 15px;
width: 100px;
cursor: pointer;
}
.back i{
font-weight: 900;
font-size: 2em;
padding: .5rem;
}.back button:hover{
    transform: scale(120%) translateX(-30%);
    background-color: #000;
    color: white;
}

.section2{
     position: absolute;   
     top: -2rem;
     left: 0;
     bottom: 0;
    display: grid;
    height: 750px;
    width: 100%;
    background-color:rgba(0, 0, 0, 0.508);
    
}

.section2 h2{
    color: #000;
    text-align: center;
    background-color:lightgreen;
    position: absolute;
    top: 8rem;
    font-weight: 400;
    padding: .5rem;
    border-radius: 15px;
    justify-self: center;
}
.imagecontainer{
    position: absolute;
    margin: 9rem;
    margin-top: 13rem;
    width: 80.5%;
    
}
.section2 img{
    margin: .8rem;
    height: 8rem;
    width: 11rem;
    box-shadow: 5px 3px 8px 5px;
}

.image-wrapper {
    position: relative;
    display: inline-block;
    margin-bottom: 1rem; 
    transition: all 350ms ease-in-out;
    cursor: pointer;


}
.image-wrapper:hover{
    z-index: 1;
    transform: scale(190%);
}

.title1 {
    color: white;
    position: absolute;
    bottom: 2rem; 
    left: 50%;
    transform: translateX(-50%);
    background-color: rgba(25, 23, 23, 0.549); 
    padding: 0.5rem;
    width: 5rem;
    text-align: center;
    border-radius: 0.5rem;
    font-size: 0.8rem;
    white-space: nowrap; 
}
.bookbtn{
    color: #fff;
    cursor: pointer;
    font: .5em sans-serif;
    position: absolute;
    padding: 8px;
    width: 4rem;
    border-radius: 20px;
    background-color: rgba(4, 4, 4, 0.486);
    border: 1px solid black;
    left: 4rem;
    top: 3rem;
    display: none;

}.bookbtn:hover{
    color: #fff;
    background-color: black;
}.bookbtn:active{
    transform: scale(110%);
}
.image-wrapper:hover button{
    display: block;
    transition: block 350ms ease-in-out;

}




</style>