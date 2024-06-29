<?php 
include('adminconfig.php'); 

// Check if the booking ID is provided
if (isset($_GET['id'])) {
    $booking_id = $_GET['id'];

    // Fetch the booking details
    $sql_select = "SELECT * FROM bookings WHERE book_id = '$booking_id'";
    $result_select = mysqli_query($conn, $sql_select);

    if (mysqli_num_rows($result_select) == 1) {
        $row = mysqli_fetch_assoc($result_select);
        $book_name = $row['book_name'];
        $book_lname = $row['book_lname'];
        $contact = $row['contact'];

        // Delete the booking from the bookings table
        $sql_delete = "DELETE FROM bookings WHERE book_id = '$booking_id'";
        $result_delete = mysqli_query($conn, $sql_delete);

        if ($result_delete) {
            // Insert the booking into the served_books table
            $sql_insert = "INSERT INTO served_books (served_name, served_lname, served_contact) 
                           VALUES ('$book_name', '$book_lname', '$contact')";
            $result_insert = mysqli_query($conn, $sql_insert);

            if ($result_insert) {
                // Redirect back to the bookings page after marking the booking as served
                header("Location: Bookings.php");
                exit();
            } else {
                echo "Error inserting into served_books table: " . mysqli_error($conn);
            }
        } else {
            echo "Error deleting booking from bookings table: " . mysqli_error($conn);
        }
    } else {
        echo "Booking not found";
    }
} else {
    echo "Booking ID not provided";
}
?>
