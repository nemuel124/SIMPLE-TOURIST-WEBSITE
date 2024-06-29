<?php 
    include('Bookings.php');
    include('adminconfig.php');

    // Fetch destinations data from the database
    $sql = "SELECT * FROM images";
    $result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TouristSpotter INB</title>
</head>
<body>

<div class="QuickAccessdest">
    <h2>Destinations</h2>
    <a href="add_destination.php" class="destbtn">Add Destination</a>
    <div class="tablecon">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>View</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['image_name'] . "</td>";
                        echo "<td>" . $row['image_location'] . "</td>";
                        echo '<td><img src="'.$row['image_path'].'"></td>';
                        echo "<td>
                        <a href='delete_destination.php?id=" . $row['image_id'] . "' class='btn-delete'>Delete</a>
                    </td>
                    ";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No destinations found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

                <?php

include('admindeals.php');

?>

</div>

</body>
</html>

<style>
    body{
        width:100%;
        overflow-x: hidden;
    }
    .destbtn{
      position: absolute;
     left:29rem;
     top: 6.5rem;
     z-index: 5;
    }

    .dashboard{
        display: none;
    }
    .QuickAccess{
      display: none;
    }
    .QuickAccessdest{
    right: 1.8rem;
    z-index: -1;
    top: 5rem;
    border-radius: 25px;
    position: absolute;
    width: 80.5%;
    height: 25rem;
    display: inline-flex;

}.QuickAccessdest h2{
  position: absolute;
  left: 5rem;
  color: #000;
}
td:hover,tr:hover{
  background-color: transparent;
  color: #000;
}


.indextable,.bookingstable{
  display: none;
}
table img{
  width: 5rem;
  height: 5rem;
}
table{
  position: relative;
  width: 90%;
  left: 5%;
  height: auto;
  border: 1px solid black;
}
.dashboard .Users,.Orders,.CompletedOrders{
    position: relative;
    border-radius: 25px;
    top: 5rem;
    box-shadow: 2px 1px 2px 1px black;
    width: 20rem;
    height: 13rem;
    margin-left: 6rem;
    display: none;
}
.dashboard .Orders{
    background: linear-gradient(120deg,black,white);
    display: none;
    
}
    </style>