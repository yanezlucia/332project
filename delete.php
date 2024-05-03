<?php
    require_once "connect.php"; // Change the file name to match your connection file
    $isbn = $_GET["isbn"]; // Assuming the parameter name is 'isbn'
    $query = "DELETE FROM books WHERE isbn = '$isbn'";
    if (mysqli_query($conn, $query)) {
        header("location: index.php");
    } else {
         echo "Something went wrong. Please try again later.";
    }
?>
