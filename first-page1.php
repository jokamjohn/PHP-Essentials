<html>
  <head>
      <title> First page </title>
  </head>
    <body>
      <!-- url to be sent/link -->
      <!-- encoding a url to take care of spaces and characters -->
      <a href="secondpage2.php?name=<?php echo urlencode("kagga john")?>&id=100">Second Page</a>

      <!-- escaping characters in html -->
      <br>
      <?php $linktext = "<click> & you`ll see"; ?>
      <?php echo htmlspecialchars($linktext); ?>
      


    </body>
</html>
