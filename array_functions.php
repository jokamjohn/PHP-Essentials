<html>
  <head>
      <title> Array Functions</title>
  </head>
    <body>
      <?php $array1 = array(20,30,14,19,50); ?>
      <!-- Some array functions -->
      Count: <?php echo count($array1); ?>
      <br>
      Max: <?php echo max($array1); ?>
      <br>
      Min: <?php echo min($array1); ?>
      <br>
      Sort: <?php sort($array1); print_r($array1); ?>
      <br>
      Reverse sort: <?php rsort($array1); print_r($array1); ?>
      <br>
      <!-- Implode is to separate the values form an array  -->
      Implode: <?php echo $string1 = implode(" * ", $array1); ?>
      <br>
      Explode is to get a string and turn it into an array
      <pre>
        Explode: <?php print_r(explode(" * ", $string1)) ?>
      </pre>
      <!-- Checking whether a value exists in an array -->
      <!-- Returns true or false -->
      In array: <?php echo in_array(20, $array1); ?>
      <br>
      In array: <?php echo in_array(100, $array1); ?>

    </body>
</html>
