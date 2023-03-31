<?php
  $servername = "localhost";
  $username = "id18475527_localhost";
  $password = "x@4$4nUZ4R{K##L6";
  $dbname="id18475527_blog";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password,$dbname);

  // Check connection
  if ($conn==false) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>