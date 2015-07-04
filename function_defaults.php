<html>
  <head>
    <!-- Created by JohnKagga http://johnkagga.me -->
      <title> Functions: Defaults</title>
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
        <br>
        <?php
              function paint($color="blue"){
                // blue if the default value if no color is passedin
                echo "Paint my room {$color}";
              }
              paint();
              ?>

    </body>
</html>
