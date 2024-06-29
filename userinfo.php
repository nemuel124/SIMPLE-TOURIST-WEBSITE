<?php
require_once('connection.php');
include('allbookings.php');

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit(); // Ensure script stops execution after redirection
}

$user_id = $_SESSION['user_id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="images/IMG_20240422_212511.jpg">
    <title> TouristSpotter INB Admin</title>
    <link rel="stylesheet" href="adminsy.css">
    <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/all.min.css">
</head>

<body>

                <table>
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Fetch and display user data for the currently logged-in user
                        $sql = "SELECT * FROM user WHERE user_id = '$user_id'";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);
                            echo "<tr>";
                            echo "<td>" . $row['username'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td><input type='text' class='passtext' value=" . $row['password'] . " readonly></td>";
                            echo "<td>
                                <a href='editinfo.php?edit_id=" . $row['user_id'] . "' class='btn-edit'>Update</a>
                            </td>";
                            echo "</tr>";
                        } else {
                            echo "<tr><td colspan='4'>No user data found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
</body>
</html>



<style>
.userContainer .infoNav{
background-color: black;
}
.userContainer .bookingNav{
    background-color: rgb(63, 67, 84);

}
body{
    width: 100%;
}
.allbookingstable,h2{
            display: none;
    }
.searchBar{
    display: none;
}
.passtext{
    position: relative;
    text-align: center;
    border: none;
    outline: none;
    background-color: transparent;
}

table{
    padding: 0;
    position: absolute;
    top: 25%;
    border: 1px solid black;
    left: 30%;
    border-radius: 15px;
}

th{
    width: 100%;
}

tr:hover{
    background-color: transparent;
    color: #000;
}


</style>