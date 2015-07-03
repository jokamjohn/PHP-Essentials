<html>
  <head>
    <!-- Created by JohnKagga http://johnkagga.me -->
      <title> foreach Loop  </title>
  </head>
    <body>
      <!-- foreachloop works on arrays -->
      <?php $array = array(1,2,3,4,6,7,5); ?>
      <?php
            foreach ($array as $value) {
              echo $value . ", ";
            }
       ?>
       <br>
       <!-- using foreach loop with a key and a value -->
       <?php
              foreach ($array as $key => $value):
              echo $key . ": " . $value . "<br>";
              ?>

       <?php endforeach; ?>
       <br>
       <?php
             $prices = array('New flash disk' =>10000 ,'New monitor' =>20, 'My name' =>"john" );
             ?>
        <!-- dealing with keys and values -->
        <?php
              foreach ($prices as $key => $value):
              echo $key . ": " . $value . "<br>";
              ?>

        <?php endforeach; ?>
        <br>
        <!-- more examples -->
        <?php
              foreach ($prices as $key => $value):
                if (is_int($value)) {
                    echo $key . ": " . $value . "<br>";
                }else {
                    echo $key . ": is " . $value . "<br>";
                }
                ?>

        <?php endforeach; ?>

    </body>
</html>
