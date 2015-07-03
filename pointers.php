<html>
  <head>
    <!-- Created by JohnKagga http://johnkagga.me -->
      <title> pointers  </title>
  </head>
    <body>
          <?php
                $values = array(4,8,1,16,23,42 );
                // get the value at pointer 1
                echo "1: " . current($values) . "<br>";
                // change the position
                next($values);
                //moved the pointer to second position
                echo "2: " . current($values) . "<br>";
                reset($values);
                echo "3: " . current($values) . "<br>";
           ?>
           <!-- while loop that moves the pointer -->
           <?php
                  while ($value = current($values)) {
                  echo $value . ", ";
                  next($values);
                  // moving to the next pointer/value                 
                  }
                  ?>
    </body>
</html>
