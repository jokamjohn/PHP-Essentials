<html>
  <head>
      <title> Forms Processing </title>
  </head>
    <body>
      <?php
            // getting the username and password from the sent form
            $username = $_POST["username"];
            $password = $_POST["password"];

            echo "{$username}: {$password}";
            ?>
    </body>
</html>
