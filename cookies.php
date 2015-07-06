<html>
  <head>
    <!-- created by John kagga johnkagga.me -->
      <title> Cookies </title>
  </head>
    <body>
      <!-- setcookie(name,value,expire) -->
      <!-- expire is in seconds in unix time stamp -->
      <?php
            setcookie("test", 45 , time()+(60*60*24*7));
            ?>
    </body>
</html>
