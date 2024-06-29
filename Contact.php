<?php
include('about.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="contactCon">
    <h2 class="abouthead">Contacts</h2>
    <img class="seclogo" src="images/IMG_20240422_212432.jpg" alt="">
    <img  class="thlogo" src="images/IMG_20240422_212511.jpg" alt="">
    
    <div class="emergencycon">
    <h2 class="emerhead">INABANGA EMERGENCY HOTLINE NUMBERS</h2>
    <h4>BFP INABANGA</h6>
    <p>Landline: 512 9038/512 9141 Mobile: 09263579299</p>

    <h4>PNP INABANGA</h4>
    <p>Landline: 512 9039 | Mobile: 09262027653</p>

    <h4>TARSIER 117</h4>
    <p>Landline: 117 | Mobile: 09258300117/ 09497955530</p>
    </div>

    <h4>IDRRMC</h4>
    <p>Landline: 512 9039 | Mobile:512 9141</p>

    <div class="touristweb">
    <h2 class="webhead">INABANGA TOURIST WEBB APP</h2>

    <h4>CONTACT THIS NUMBER FOR MORE INFORMAATION</h6>
    <p>Mobile: 09061810419</p>
    <p>Email: inabangatourist@gmail.com</p>

    <p>Website: wwww.inabangatourist.com</p>
    </div>

    <h4>IDRRMC</h4>
    <p>Landline: 512 9039 | Mobile:512 9141</p>

    </div>
    </div>

   
    
</body>
</html>
<style>

   .aboutCon{
    display: none;     
   }

   .contactCon{
    position: absolute;   
     top: -2rem;
     left: 0;
     bottom: 0;
     height: 760px;
    border:2px solid black;
    width: 100%;
    background-color:rgba(0, 0, 0, 0.508);
}
.contactCon .abouthead{
    position: relative;
    text-align:center;
    top:6rem;
    background:linear-gradient(170deg,white,limegreen);
    width:6rem;
    left:50%;
    padding:5px;
    border-radius:10px;
    font-weight:100;
}


.contactCon .seclogo{
    position: relative;
    left:25%;
    top:2rem;
    width: 10rem;
    height:10rem;
    border-radius:90px;
    z-index: 5;

}.contactCon .thlogo{
    position: relative;
    right:-65rem;
    top:2rem;
    width: 10rem;
    height:10rem;
    border-radius:90px;
    z-index: 5;

}

.logo{
    display:none;
}

.emergencycon{
    position: relative;
    text-align:center;
    width:50%;
    height:100%;
    border:1px solid black;
}

.emergencycon .emerhead{
    position: relative;
    font-size:1em;
    top:3rem;
    left:5rem;
}

.touristweb{
    top:0;
    left:50rem;

    margin-top:15.2rem;
    position: absolute;
    text-align:center;
    width:50%;
    height:100%;
    border:1px solid black;
}
.touristweb .webhead{
    position: relative;
    font-size:1em;
    top:3rem;
    left:5rem;
}
p{
    color: white;
    position: relative;
    text-align: left;
    left: 20rem;
}
.touristweb p{
    color: white;
    position: relative;
    text-align: left;
    left: 11rem;
}
h4{
    color:orangered;
    margin-top: 4rem;
    position: relative;
    float: center;
}
</style>