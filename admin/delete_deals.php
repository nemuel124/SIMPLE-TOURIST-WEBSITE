<?php
// Include the database connection file
include('adminconfig.php');


// Check if the destination ID is provided in the URL
if(isset($_GET['id'])) {
    // Get the destination ID from the URL parameter
    $deals_id = $_GET['id'];

    // SQL query to delete the destination based on the ID
    $sql = "DELETE FROM deals WHERE deals_id = '$deals_id'";
    
    // Execute the query
    if(mysqli_query($conn, $sql)) {
        // Redirect back to the destinations page after deletion
        header("Location: Destinations.php");
        exit();
    } else {
        echo "Error deleting destination: " . mysqli_error($conn);
    }
} else {
    // If no destination ID is provided, redirect back to the destinations page
    header("Location: Destinations.php");
    exit();
}
?>