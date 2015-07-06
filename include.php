<html>
  <head>
    <!-- created by John kagga johnkagga.me -->
      <title> Include </title>
  </head>
    <body>
      <?php
            // including a file
            //include is mainy used for not very essential files

            include("included_func.php");

            //require is used for essential files like files containg functions, since it throws an error when a file is not found.
            require("included_func.php");

            // not to include a file more than once this function is used
            require_once("included_func.php");
            ?>


      <?php
            hello("Cedat")
            ?>
    </body>
</html>
