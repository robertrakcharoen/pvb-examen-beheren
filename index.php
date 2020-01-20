<?php
require('query.php')
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Restaurant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap css - gebruikt voor responsive maken -->
    <script src="https://kit.fontawesome.com/9e77f6e4c2.js" crossorigin="anonymous"></script>
  </head>
  <body id="index">
    <div>
    <div>
        <div>
            <div>
              <h1>Restaurants : </h1><br>
              <table id="example" class="tafel">
                <thead>
                  <tr>
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
                   ?>
                </tbody>
              </table><br>

            </div>
      </div>
  </div>
</div>

  </body>
</html>
