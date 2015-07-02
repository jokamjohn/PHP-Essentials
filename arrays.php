<html>
  <head>
      <title> Arrays</title>
  </head>
    <body>
      <?php $array1 = array(20,30,14,19,50); ?>
      <?php echo $array1[4]; ?>
      <br>
      <?php $array2 = array(9, "dog", "cow", "money") ?>
      <?php echo $array2[2]; ?>
      <br>
      <?php  $array3 = array(9, "dog", "cow", array("ab","cd","ef","gh"))?>
      <?php echo $array3[3][0]; ?>
      <!-- Associative array -->
      <br>
      <?php $array4 = array("first_name" => "John", "last_name" => "Kagga"); ?>
      <?php echo $array4["last_name"]; ?>
      <br>
      <?php echo $array4["first_name"]." ".$array4["last_name"] ; ?>
      <br>
      <?php $array4["first_name"] = "micheal"; ?>
      <?php echo $array4["first_name"]." ".$array4["last_name"] ; ?>
      <br>
      <!-- printing the whole array -->
      <pre>
          <!-- the pre tag displays the array better -->
          <?php print_r($array3) ?>
      </pre>


    </body>
</html>
