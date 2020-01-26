<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "rubix03_restaurants";


  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 ?>
