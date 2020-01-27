<?php
include 'query.php';
 ?>
 <?php
$results_per_page = 225;
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $results_per_page;
$restaurant = $_GET["page"];
$sql = "SELECT * FROM restaurants_info WHERE id = "." $restaurant ";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Restaurant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- bootstrap css - gebruikt voor responsive maken -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>

<body>
  <?php
$sql2 = "SELECT * FROM restaurants_info  WHERE id = "." $restaurant  ";
$result2 = $conn->query($sql2);
while ($row2 = mysqli_fetch_assoc($result2)) {
  $id = $row['id'];
}

?>
</body>
?>
