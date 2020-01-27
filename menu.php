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
  $url = $row2['website_naam'];
  $rest_titel = $row2['restaurant_naam'];
  $straat = $row2['straat'];
  $postcode = $row2['postcode'];
  $plaats = $row2['plaats'];
  $email = $row2['email_adres'];
  $wachtwoord = $row2['Wachtwoord'];

  /*v --------Openingstijden------- */
  $maandagO = $row2['Maandag_open'];
  $dinsdagO = $row2['Dinsdag_open'];
  $woensdagO = $row2['Woensdag_open'];
  $donderdagO = $row2['Donderdag_open'];
  $vrijdagO = $row2['Vrijdag_open'];
  $zaterdagO = $row2['Zaterdag_open'];
  $zondagO = $row2['Zondag_open'];

  /*v --------Sluitingsstijden------- */
  $maandagS = $row2['Maandag_dicht'];
  $dinsdagS = $row2['Dinsdag_dicht'];
  $woensdagS = $row2['Woensdag_dicht'];
  $donderdagS = $row2['Donderdag_dicht'];
  $vrijdagS = $row2['Vrijdag_dicht'];
  $zaterdagS = $row2['Zaterdag_dicht'];
  $zondagS = $row2['Zondag_dicht'];
}

?>
</body>
?>
