<html>
  <head>
    <!-- Created by JohnKagga http://johnkagga.me -->
      <title> While Loop  </title>
  </head>
    <body>
      <?php
              $counter = 0;
              while ($counter <= 10) {
                echo $counter . ",";
                // echo "<br>";
                $counter++;
                // printing after the increment
                // echo "<br>";
                // echo $counter . ",";
              }
              echo "<br>count: {$counter}";
              ?>
              <br>
        <?php
              $counter = 0;
              while ($counter <= 10) {
                if ($counter == 4) {
                  echo "NUMBER FOUR, ";
                }
                else {
                  echo $counter . ",";
                }
                $counter++;
              }
              echo "<br>count: {$counter}";
              ?>

    </body>
</html>
