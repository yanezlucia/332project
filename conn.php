<?php
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'your_username'); // Replace 'your_username' with your actual database username
  define('DB_PASSWORD', 'your_password'); // Replace 'your_password' with your actual database password
  define('DB_NAME', 'library'); 
  $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

  if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
?>
