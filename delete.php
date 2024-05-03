<?php
    require_once "conn.php"; 
    $isbn = $_GET["isbn"]; 
    $query = "DELETE FROM books WHERE isbn = '$isbn'";
    if (mysqli_query($conn, $query)) {
        header("location: index.php");
    } else {
         echo "Something went wrong. Please try again later.";
    }
?>
