<html>
  <head>
    <!-- Created by JohnKagga http://johnkagga.me -->
      <title> Continue  </title>
  </head>
    <body>
      <!-- continue helps skip a value -->
      <?php
            for ($value = 0; $value <=10 ; $value++) {
              // loop will skip 5
            if ($value == 5) {
                continue;
            }
                echo $value . ", ";
            }
       ?>

    </body>
</html>
