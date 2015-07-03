<html>
  <head>
    <!-- Created by JohnKagga http://johnkagga.me -->
      <title> Logical Expressions </title>
  </head>
    <body>
      <!-- if statement -->
      <?php
            $var1 = 10;
            $var2 = 8;
            if ($var1 > $var2) {
              echo "var1 is greater then var2";
            if ($var1 < $var2) {
              echo "var1 is less than var2";
            }
            }?>
    <!-- A better way of acheiving that above -->
    <!-- if and else -->
    <br>
        <?php
              if ($var1 < $var2) {
                echo "var1 is greater then var2";
              } else {
                echo "var1 is less than var2";
              }
              ?>
        <!-- if elseif and else -->
        <br>
        <?php
              $var3 = 20;
              $var4 = 20;
              if ($var3 > $var4) {
                echo "var3 is greater then var4";
              }elseif ($var3 == $var4) {
                echo "var3 is equal to var4";
              }
              else {
                echo "var3 is less than var4";
              }
              ?>
              <br>
        <!-- AND and OR operators -->

        <?php
                if (($var1 > $var2) && ($var3 > $var4)) {
                  echo "var1 is greater than var2 AND ";
                  echo "var3 is greater than var4";
                  echo "<br>";
                }

                  if (($var1 > $var2) || ($var3 > $var4)) {
                    echo "var1 is greater than var2 OR ";
                    echo "var3 is greater than var4";
                    echo "<br>";
                  }
                  // the default
                  else {
                    echo "neither var1 is larger than var2 nor var3 larger than var4";
                  }
                ?>
                <br>
          <!-- more applications -->
          <?php
                if (isset($var1)) {
                  $var1 = 50;
                }
                echo $var1;
                ?>
        <br>
        <?php
                if (is_int($var3)) {
                  settype($var3, "string");
                  echo $var3;
                  echo "<br>";
                  echo gettype($var3);
                }

                ?>


    </body>
</html>
