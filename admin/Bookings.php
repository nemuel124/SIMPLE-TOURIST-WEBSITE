<?php 
include('index.php');
include('adminconfig.php'); 


// Check if the booking ID is provided
if (isset($_GET['id'])) {
    $booking_id = $_GET['id'];

    // Delete the booking from the database
    $sql = "DELETE FROM bookings WHERE book_id = '$booking_id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
      echo '<script>
      window.location.href = "Bookings.php";
     </script>';
        exit();
    } else {
        echo "Error deleting booking: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="QuickAccess">
    <h2>Bookings</h2>

    <div class="tablecon">
    <table class="bookingstable">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Date</th>
                    <th>Person/s</th>
                    <th>Interest</th>
                    <th>Additional</th>
                    <th>Action</th>
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
                        echo "<td>" . $row['contact'] . "</td>";
                        echo "<td>" . $row['date'] . "</td>";
                        echo "<td>" . $row['people'] . "</td>";
                        echo "<td>" . $row['interest'] . "</td>";
                        echo "<td>" . $row['additional'] . "</td>";
                        echo "<td>
                        <a href='serve_booking.php?id=" . $row['book_id'] . "' class='btn-edit'>Served</a>
                        <a href='?id=" . $row['book_id'] . "' class='btn-delete'>Delete</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>No bookings at the moment.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>


</body>
</html>

<style>
    body{
        width: 100%;
    }
.dashboard{
    display:none;
}


.QuickAccess{
    top:10%;
    width: 75%;
    border: none;
    left:20%;
}
.QuickAccess h2{
    width:97.3%;
    background-color: gray;
}

th:hover{
  background-color: white;
}
td,th{
  text-align: center;
}

.indextable{
  display: none;
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


    }
    tr{
        border: 1px solid #666363;
    }

 td {   font-size: .9em;
       padding: 2px;
       padding-left:10px;
        text-align: center;
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
        text-align: center;
        border-bottom: 1px solid #666363;
        color: black;
        background-color: #fffcfc;
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



</style>
   

</style>