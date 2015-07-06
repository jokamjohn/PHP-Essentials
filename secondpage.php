<html>
  <head>
    <!-- created by John Kagga johnkagga.me -->
      <title> Second Page </title>
  </head>
    <body>
      <!-- getting a value from the url -->
      <?php
            $_GET;
            print_r($_GET);
            $id = $_GET["id"];
            $name = $_GET["name"];
            echo "<br><strong>". $id . ": {$name}</strong>";

            ?>
            <!-- types of encoding -->
            <br>
            <?php
                  $string = "john kagga";
                  echo urlencode($string);
                  echo "<br>";
                  echo rawurlencode($string);
                  ?>
            <!-- use raw encoding before ? and normal encoding after ? -->
    </body>
</html>
