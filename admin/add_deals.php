<?php
include('adminconfig.php');
include('Destinations.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $deals_name = $_POST['deals_name'];
    $deals_location = $_POST['deals_location'];

    // File upload handling
    if ($_FILES["image"]["name"]) {
        $targetDir = "deals/";
        $fileName = basename($_FILES["image"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Ensure the 'uploads' directory exists
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0755, true); // Create directory with permissions 0755
        }

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
            // Insert destination data including image path into database
            $sql = "INSERT INTO deals (deals_name, deals_location, deals_image) VALUES ('$deals_name', '$deals_location', '$targetFilePath')";
            if (mysqli_query($conn, $sql)) {
                // Destination added successfully, redirect to Destinations.php
                echo '<script>window.location.href = "Destinations.php";</script>';
                exit();
            } else {
                echo "Error adding destination: " . mysqli_error($conn);
            }
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "image file not provided.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Destination</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
    <h2>Add Deals</h2>
        <input type="text" name="deals_name" placeholder="Name" required><br><br>
        <input type="text" name="deals_location" placeholder="Location" required><br><br>
        <input type="file" name="image" required><br><br>
        <input type="submit" value="Submit">
        <a href="Destinations.php">Cancel</a>
    </form>
</body>
</html>

<style>
form{
    text-align: center;
    margin-top: 15%;
    position: relative;
    left: 50%;
    border: 1px solid black;
    width: 20%;
    height: 15rem;
    color: #000;
    background-color:lightgray;
    box-shadow: 1px 2px 5px 2px black;
    border-radius: 10px;
}
form h2{
    font-size:1.4em;
}
input{
    outline: none;
}
form a{
    margin-left: 1rem;
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

