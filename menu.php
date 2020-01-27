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

<nav>
  <ul>
    <li><a class="line" target="_blank" href="http://www.rubix03.nl/etencom">Home</a></li>
    <li><a class="line" target="_blank" href="http://www.rubix03.nl/etencom">Thuisbezorgd</a></li>
    <li><a class="line" target="_blank" href="http://www.rubix03.nl/etencom">Eten.nl admin</a></li>
    <li><a class="line" target="_blank" href="http://www.rubix03.nl/etencom">Home</a></li>
    <li><a class="line" target="_blank" href="http://www.rubix03.nl/etencom">Create Restaurant</a></li>
    <li><a class="line" target="_blank" href="<?php echo $url ?>">Ga naar de Website</a></li>
    <li><a class="line" target="_blank" href="opties.php">Opties</a></li>
  </ul>
</nav>

<!-- --------DIVBOX RESTAURANT GEGEVENS------- -->
<div style="padding-bottom: 600px;" id="divbox">
    <div style="padding: 10px;" class="restaurant">
        <div style="float: left; width: 50%; height: 320px;">
            <h4>Gegevens</h4>
        <button onclick="copyToClipboard('#idnummer')">Copy</button> Nummer: <span id="idnummer"><?php echo $id ?></span> </br> </br>
        <button onclick="copyToClipboard('#titel')">Copy</button> Naam: <span id="titel"><?php echo $rest_titel ?></span> </br> </br>
        <button onclick="copyToClipboard('#email')">Copy</button> E-mail: <span id="email"><?php echo $email ?></span> </br> </br>
        <button onclick="copyToClipboard('#wachtwoord')">Copy</button> Wachtwoord: <span id="wachtwoord"><?php echo $wachtwoord ?></span> </br> </br>
        <button onclick="copyToClipboard('#straat')">Copy</button> Straat: <span id="straat"><?php echo $straat ?></span> </br> </br>
        <button onclick="copyToClipboard('#plaats')">Copy</button> Plaats: <span id="plaats"><?php echo $plaats ?></span> </br> </br>
        <button onclick="copyToClipboard('#postcode')">Copy</button> Postcode: <span id="postcode"><?php echo $postcode ?></span></br>
        <h4>Openingstijden</h4>
        <button onclick="copyToClipboard('#maandagO')">Copy</button> Ma open:<span id="maandagO"><?php echo $maandagO ?> </span> </br><button onclick="copyToClipboard('#maandagS')">Copy</button> Ma sluit: <span id="maandagS"><?php echo $maandagS ?></span> </br> </br>
        <button onclick="copyToClipboard('#dinsdagO')">Copy</button> Di open:<span id="dinsdagO"><?php echo $dinsdagO ?> </span> </br><button onclick="copyToClipboard('#dinsdagS')">Copy</button> Di sluit:<span id="dinsdagS"><?php echo $dinsdagS ?></span> </br> </br>
        <button onclick="copyToClipboard('#woensdagO')">Copy</button> Wo open:<span id="woensdagO"><?php echo $woensdagO ?> </span> </br><button onclick="copyToClipboard('#woensdagS')">Copy</button> Wo sluit:<span id="woensdagS"><?php echo $woensdagS ?></span> </br> </br>
        <button onclick="copyToClipboard('#donderdagO')">Copy</button> Do open:<span id="donderdagO"><?php echo $donderdagO ?> </span> </br><button onclick="copyToClipboard('#donderdagS')">Copy</button> Do sluit:<span id="donderdagS"><?php echo $donderdagS ?></span> </br> </br>
        <button onclick="copyToClipboard('#vrijdagO')">Copy</button> Vr open:<span id="vrijdagO"><?php echo $vrijdagO ?> </span> </br><button onclick="copyToClipboard('#vrijdagS')">Copy</button> Vr sluit:<span id="vrijdagS"><?php echo $vrijdagS ?></span> </br> </br>
        <button onclick="copyToClipboard('#zaterdagO')">Copy</button> Za open:<span id="zaterdagO"><?php echo $zaterdagO ?> </span> </br><button onclick="copyToClipboard('#zaterdagS')">Copy</button> Za sluit:<span id="zaterdagS"><?php echo $zaterdagS ?></span> </br> </br>
        <button onclick="copyToClipboard('#zondagO')">Copy</button> Zo open:<span id="zondagO"><?php echo $zondagO ?> </span> </br><button onclick="copyToClipboard('#zondagS')">Copy</button> Zo sluit:<span id="zondagS"><?php echo $zondagS ?></span> </br> </br>
        </div>
        <div style="float: left; width: 50%; height: 300px;">
            <h4>Vul hier uw gegevens is</h4>
            <form method="post">
                <div style="float: left; width: 25%;">
                    <p style="margin: 0px;">Naam: </p>
                    <p style="margin: 0px; margin-top: 9px;">Status: </p>
                    <p style="margin: 0px; margin-top: 9px;">Print-screen: </p>
                    <p style="margin: 0px; margin-top: 9px;">Eten-demo: </p>
                </div>
                <div style="float: left; width: 75%;">
                    <select style="width: 260px;" name="naam" required>
                        <option value="Anand">Anand</option>
                        <option value="N`syree">N`syree</option>
                        <option value="Sjoerd">Sjoerd</option>
                        <option value="Maurice">Maurice</option>
                        <option value="Timothy">Timothy</option>
                        <option value="Jeffrey">Jeffrey</option>
                        <option value="Jerrel">Jerrel</option>
                        <option value="Rik">Rik</option>
                        <option value="Hakan">Hakan</option>
                        <option value="Justin">Justin</option>
                        <option value="Marciano">Marciano</option>
                        <option value="Hussein">Hussein</option>
                        <option value="Rahin">Rahin</option>
                        <option value="Hassan">Hassan</option>
                        <option value="Nabil">Nabil</option>
                        <option value="Robert">Robert</option>
                        <option value="Domingo">Domingo</option>
                    </select><br>
                    <select style="width: 260px;" required name="status">
                        <option value="100% Ready">100% Ready</option>
                        <option value="Only account ready">Only account ready</option>
                        <option value="Still processing corrections">Still processing corrections</option>
                        <option value="No address, cannot continue">No address, cannot continue</option>
                        <option value="Restaurant does not exist">Restaurant does not exist</option>
                        <option value="No website">No website</option>
                        <option value="CSV is incomplete">CSV is incomplete</option>
                        <option value="Fast Food Chain">Fast Food Chain</option>
                        <option value="Others">Others</option>
                    </select><br>
                    <input style="width: 260px;" type="text" name="nieuw_url" placeholder="Zoals: https://prnt.sc/q8agov">
                    <input style="width: 260px;" type="text" name="Restaurant_url" placeholder="Na https://demo-eten.nl/">
                    <textarea rows="4" cols="50" style="width: 75%" name="opmerking1" placeholder="Opmerking"></textarea>
                </div>
                <input value="Opslaan" placeholder="Opslaan" type="submit">
            </form>

            <h4>Gecontroleerd door:</h4>
            <form method="post">
                <div style="float: left; width: 25%;">
                    <p style="margin: 0px;">Naam: </p>
                    <p style="margin: 0px; margin-top: 9px;">Status: </p>
                </div>
                <div style="float: left; width: 75%;">
                    <select style="width: 260px;" name="controle" required>
                        <option value="Anand">Anand</option>
                        <option value="Maurice">Maurice</option>
                        <option value="Timothy">Timothy</option>
                        <option value="Jeffrey">Jeffrey</option>
                        <option value="Jerrel">Jerrel</option>
                        <option value="Tom">Tom</option>
                        <option value="Kevin">Kevin</option>
                    </select><br>
                    <select style="width: 260px;" required name="status2">
                        <option value="Approved">Approved</option>
                        <option value="Again">Again</option>
                        <option value="Not complete">Not complete</option>
                    </select>
                    <textarea rows="4" cols="50" style="width: 75%" name="opmerking2" placeholder="Opmerking"></textarea>
                </div>
                <input value="Opslaan" placeholder="Opslaan" type="submit" style="margin-bottom: 50px">
            </form>
            <button onclick="copyToClipboard('#1-9')">Copy</button> Nummer: <span id="1-9">123456789</span><br> <br>
              <button onclick="copyToClipboard('#A-K')">Copy</button> Letter: <span id="A-K">abcdefghijk</span><br> <br>
              <button onclick="copyToClipboard('#BIC')">Copy</button> BIC: <span id="BIC">INGBNL2A</span><br> <br>
              <button onclick="copyToClipboard('#IBAN')">Copy</button> IBAN: <span id="IBAN">GB33BUKB20201555555555</span><br> <br>
              <?php
              if (!empty($_POST['naam'] && $_POST['status'])) {
                
              }
               ?>
            </div>
          </div>
        </div>
</body>
?>
