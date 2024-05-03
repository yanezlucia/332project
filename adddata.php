<?php
    require_once "conn.php"; // Change the file name to match your connection file
    
    if(isset($_POST['submit'])){

        $isbn = $_POST['isbn'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $publisher = $_POST['publisher'];
        $num_copies = $_POST['num_copies'];
        $genre = $_POST['genre'];

        if($isbn != "" && $title != "" && $author != "" && $publisher != "" && $num_copies != "" && $genre != ""){
            $sql = "INSERT INTO books (isbn, title, author, publisher, num_copies, genre) 
                    VALUES ('$isbn', '$title', '$author', '$publisher', $num_copies, '$genre')";
            if (mysqli_query($conn, $sql)) {
                header("location: index.php"); // Redirect to index.php after successful insertion
            } else {
                echo "Something went wrong. Please try again later.";
            }
        } else {
            echo "All fields are required!";
        }
    }
?>
