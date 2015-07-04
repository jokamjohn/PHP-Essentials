<html>
  <head>
    <!-- Created by JohnKagga http://johnkagga.me -->
      <title> Functions: 3</title>
  </head>
    <body>

      <?php
      // this uses local variables
            $bar = "outside";

            function foo(){
              $bar = "inside";

            }
            foo();
            echo $bar . "<br>";
            ?>
            <br>
        <!-- using global variable -->
        <?php
              $bar = "outside";

              function foo2(){
                //declare that the variable is global
                global $bar;
                $bar = "inside";
              }
              foo2();
              echo $bar . "<br>"

              ?>

    </body>
</html>
