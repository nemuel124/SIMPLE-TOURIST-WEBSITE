<?php 
    include('index.php');
    require_once('connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TouristSpotter INB</title>
</head>
<body>
<table class="allbookingstable">
    <h2 class="allcus">All Bookings (find yours)
    </h2>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Date</th>
                    <th>Person/s</th>
                    <th>Destination name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                $sql = "SELECT * FROM bookings";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['book_name'] . " " . $row['book_lname'] . "</td>";
                        echo "<td>" . $row['book_email'] . "</td>";
                        echo "<td>09** *** ***</td>";
                        echo "<td>" . $row['date'] . "</td>";
                        echo "<td>" . $row['people'] . "</td>";
                        echo "<td>" . $row['interest'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>No bookings at the moment.</td></tr>";
                }
                ?>
            </tbody>
        </table>
</body>
</html>



<style>
    .userContainer .bookingNav{
background-color: black;
}
body{
    width: 100%;
    height: 100%;
}
  
  .allcus{
    position: absolute;
    left: 30%;
    padding-top:10px;
    padding-bottom:10px;
    top: 19%;
    font-size: 2em;
    background-color: #000;
    color: white;
    width: 50%;
    text-align: center;
    border-top-right-radius: 25px;
    border-top-left-radius: 25px;

  }  

.tablecon{
    position: relative;
    top: 4rem;
    width: 100%;
}
table {
        width: 100%;
        border-collapse: collapse;
        color: #000;
        position: absolute;
        justify-content:center;
        z-index: 5;
         top:30%;
         left: 30%;
         width: 50%;
        border: 1px solid black;
    }

 td {   font-size: .9em;
       padding: 10px;
       padding-left:10px;
        text-align: left;
        border-bottom: 1px solid #666363;
    }
    tr:hover{
        color: white;
        background-color: black;
        cursor: pointer;
    }
    th:nth-child(1):hover{
        background-color:white;
    } th:nth-child(2):hover{
        background-color:white;
    }
   
    th:nth-child(3), th:nth-child(4){
        width: 4rem;
        position: relative;
        padding-left: 2rem;
    }

    th {

        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #666363;
        color: black;
        background-color: #fffcfc;
    }th:hover{
        background-color: #000;
    }

    th:hover{
  background-color: white;
}
td,th{
  text-align: center;
}
   
    .btn-edit, .btn-delete {
        position: relative;
        padding: 10px 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 4px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        margin: 2px 2px;
        transition-duration: 0.4s;
        right: 0;
    }
    .btn-delete{
        background-color:rgb(210, 11, 11);
    }
    .btn-edit:hover, .btn-delete:hover {
        background-color: gray;
    }

    .Welcome,.visitText{
      display: none;
    }
</style>