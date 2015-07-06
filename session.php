<?php
      session_start();
      ?>
<html>
  <head>
    <!-- created by John kagga johnkagga.me -->
      <title> Sessions </title>
      <!-- session start comes before any otherfile -->
  </head>
    <body>
      <!-- setting session value -->
      <?php
            $_SESSION["name"] = "John";
            $_SESSION["last_name"] = "Kagga";
            $name = $_SESSION["name"] . " ". $_SESSION["last_name"] = "Kagga";
            echo $name;
            ?>
    </body>
</html>
