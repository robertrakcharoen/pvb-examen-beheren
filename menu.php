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
