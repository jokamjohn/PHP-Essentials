<html>
  <head>
    <!-- Created by JohnKagga http://johnkagga.me -->
      <title> Functions </title>
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
    </body>
</html>
