<html>
  <head>
      <title> Type casting</title>
  </head>
    <body>
      <?php $var1 = "2 brown foxes";
            $var2 = $var1 + 3;
            echo $var2;
            ?>
            <br>
      <!-- checking for the type -->
      <?php
            echo gettype($var1);
            echo "<br>";
            echo gettype($var2);
            ?>
      <br>
      <?php settype($var2, "string");
            // changing the type
            echo "<br>";
            echo gettype($var2);
            echo "<br>";
            // casting
            $var3 = (int) $var1;
            echo gettype($var3);
            ?>
            <br>
      <?php echo is_array($var1);
            echo is_bool($var1);
            echo is_int($var1);
            echo is_numeric($var1);
            echo is_null($var1);
            echo is_string($var1);
            ?>


    </body>
</html>
