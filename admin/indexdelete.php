<?php 
include('adminconfig.php'); 
if(!isset($_SESSION['admin_id'])){
    header("Location: adminlogin.php");
}

// Check if the booking ID is provided
if (isset($_GET['id'])) {
    $booking_id = $_GET['id'];

    // Delete the booking from the database
    $sql = "DELETE FROM bookings WHERE book_id = '$booking_id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
      echo '<script>
      window.location.href = "index.php";
     </script>';
        exit();
    } else {
        echo "Error deleting booking: " . mysqli_error($conn);
    }
} 

?>