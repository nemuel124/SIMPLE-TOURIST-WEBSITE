<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="tablecon">
<a href="add_deals.php" class="dealsbtn">Add Deals</a>

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
                require_once('adminconfig.php');
                $sql = "SELECT * FROM deals";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['deals_name'] . "</td>";
                        echo "<td>" . $row['deals_location'] . "</td>";
                        echo '<td><img src="'.$row['deals_image'].'"></td>';
                        echo "<td>
                        <a href='delete_deals.php?id=" . $row['deals_id'] . "' class='btn-delete'>Delete</a>
                    </td>
                    ";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No deals found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
            </body>
            </html>
    
            <style>
    body{
        width:100%;
    }
    .dealsbtn{
      position: absolute;
     right:2rem;
     top: 2.5rem;
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


table {
        width: 80%;
        left: 10%;
        top: 15%;
        border-collapse: collapse;
        border: 1px solid black;
        color: #000;
        position: absolute;

    }
    table td {   
        font-size: .9em;
       padding: 2px;
       padding-left:10px;
        text-align: center;
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
        text-align: center;
        border-bottom: 1px solid #666363;
        color: black;
        background-color: #fffcfc;
        z-index: -1;
        position:relative;
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
