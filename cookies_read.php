<html>
  <head>
    <!-- created by John kagga johnkagga.me -->
      <title> Reading Cookies </title>
  </head>
    <body>
      <!-- reading a cookie from the browser -->
      <!-- since the user can delete the cookie, we need to check for it first. -->
      <?php
            //checking for the cookie
            $cookie = 0; //default value
            if (isset($_COOKIE["test"])) {
              $cookie = $_COOKIE["test"];
            }
            echo $cookie;
            ?>

      <!-- deleting a cookie -->
      <!-- set the value to 0 andthe time to past -->
      <?php
            setcookie("test", 0 , time()-(60*60*24*7));
            ?>

    </body>
</html>
