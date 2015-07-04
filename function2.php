<html>
  <head>
    <!-- Created by JohnKagga http://johnkagga.me -->
      <title> Functions: 2</title>
  </head>
    <body>
      <!-- function without an argument -->
        <?php
              function sayName(){
                echo "My name is John Kagga <br>";
              }
              sayName();
              ?>
      <!-- function with an argument -->
        <?php
              function sayName2($name){
                echo "My name is {$name} <br>";
              }
              sayName2("John");
              sayName2("Kagga");
              ?>
        <?php
              $name = "wang yang";
              sayName2($name);
              // define a new function
              function sayName3($greeting, $target, $punct){
                echo $greeting . ", " . $target . $punct . "!";
              }
              sayName3("Good evening", $name, "!");
              ?>
        <!-- returning a value from a function -->
        <br>
        <?php
              function addition($var1, $var2){
                $sum = $var1 + $var2;
                return $sum;
              }
              // assigning the value to a variable
              $value = addition(1,2);
              echo $value;
              ?>
          <!-- returning two values using an array -->
          <br>
          <?php
              function add_sub($var1, $var2){
                $add = $var1 + $var2;
                $sub = $var1 - $var2;
                // <!-- inserting the values in an array -->
                $result = array($add,$sub );
                return $result;
                }

                $addsub_array = add_sub(10,8);
                echo "Addition: ". $addsub_array[0]."<br>";
                echo "Substraction: ". $addsub_array[1]."<br>";

                ?>




    </body>
</html>
