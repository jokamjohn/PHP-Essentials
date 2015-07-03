<html>
  <head>
    <!-- Created by JohnKagga http://johnkagga.me -->
      <title> Logical Expressions: Switch  </title>
  </head>
    <body>
      <!-- use of swtich statement when testing for one value -->
      <?php $var1 = 1; ?>
      <?php
            switch ($var1) {
              case 0:
                echo "var1 is zero";
                break;
              case 1:
                echo "var1 is equal to 1";
                break;
              case 2:
                echo "var1 is equal to 2";
                break;

              default:
                echo "var1 is none of the above";
                break;
            }?>


    </body>
</html>
