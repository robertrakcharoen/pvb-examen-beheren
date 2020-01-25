<?php
require('query.php')
 ?>
<!DOCTYPE html>
<html>
  <head>
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Restaurants</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap css - gebruikt voor responsive maken -->
    <script src="https://kit.fontawesome.com/9e77f6e4c2.js" crossorigin="anonymous"></script>
  </head>
  <body id="index">
    <div class="limiter">
    <div class="container-table100">
        <div class="wrap-table100">
            <div class="table100">
              <h1>Restaurants : </h1><br>
              <table id="example" class="tafel">
                <thead>
                  <tr class="table100-head">
                    <td style="color: white; width: 2px;" class="column1">#</td>
                    <td style="color: white;" class="column5"></td>
                      <td style="color: white" class="column3">Naam</td>
                      <td style="color: white" class="column2">Ingevoerd</td>
                      <td style="color: white" class="column2">Status</td>
                      <td style="color: white;" class="column2">Opmerking</td>
                      <td style="color: white" class="column2">Gecontroleerd</td>
                      <td style="color: white" class="column2">Status</td>
                      <td style="color: white" class="column2">Opmerking</td>
                      <td style="color: white" class="column6"></td>
                  </tr>
                </thead>

                <tbody>

                  <?php
                  if (isset($_GET['page'])) {
                        $eind = $_GET['page'] * 100;
                        $begin = $eind - 99;
                    } else {
                        $eind = 100;
                        $begin = 1;
                    }

                    $sql = "SELECT * FROM `restaurants_info` WHERE id BETWEEN '$begin' AND '$eind'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                    <td style='width: 2px' class='column1'>". $row["id"]."</td>
                    <td class='column5'><a href='". $row["website_naam"]."' target='_blank'><i class=\"fas fa-globe-americas\"></i></a></td>
                    <td class='column3'><a target='_blank' href='/codes/menu.php?page=".$row['id']."'>". $row["restaurant_naam"]. "</a></td>
                    <td class='column2'>". $row["Ingevoerd_door"]. "</td>
                    <td class='column2'>". $row["Status"]. "</td>
                    <td title='". $row["Opmerking"] . "' class='column2'>". limit_text($row["Opmerking"], 4) . "</td>
                    <td class='column2'>". $row["Controlle_Door"]. "</td>
                    <td class='column2'>". $row["Status_2"]. "</td>
                    <td title='". $row["Opmerking_2"]. "' class='column2'>". limit_text($row["Opmerking_2"], 4) . "</td>
                    <td style='width: 5px;' class='column6'><a href='". $row["Nieuw_URL"]."' target='_blank'><i class=\"fas fa-file-image\"></i></a> <a href='https://demo-eten.nl/'></a></td>
              </tr>

              "; }
                    } else {
                        echo "0 results";
                    }

                    $conn->close();
                    function limit_text($text, $limit) {
                        if (str_word_count($text, 0) > $limit) {
                            $words = str_word_count($text, 2);
                            $pos = array_keys($words);
                            $text = substr($text, 0, $pos[$limit]) . '...';
                        }
                        return $text;
                    }
                   ?>
                </tbody>
              </table><br>

            </div>
      </div>
  </div>
</div>

  </body>
</html>
