<html>
  <head>
    <!-- Created by JohnKagga http://johnkagga.me -->
      <title> Continue  </title>
  </head>
    <body>
      <!-- break stops a loop -->
      <?php
            for ($value = 0; $value <=10 ; $value++) {

            if ($value == 5) {
                break;
            }
                echo $value . ", ";
            }
       ?>
       <br>
       <!-- removing the last comma -->
       <?php
             for ($value = 0; $value <=10 ;         $value++) {
                  echo $value;
                if ($value == 10) {
                   break;
               }
                   echo ", ";
               }
        ?>

    </body>
</html>
