<html>
  <head>
      <title> Booleans And Nulls</title>
  </head>
    <body>
      <?php $bool1 = true;
            $bool2 = false;
            ?>
      bool1: <?php echo $bool1; ?>
      <br>
      bool2: <?php echo $bool2; ?>
      <br>
      <?php $var1 = 20;
            $var2 = "cat";
            $var4 = "0";
            ?>
      <br>
      <!-- checking whether a variable is set -->
      Var1: <?php echo isset($var1); ?>
      <br>
      Var2: <?php echo isset($var2); ?>
      <br>
      Var3: <?php echo isset($var3); ?>
      <br>
      <!-- unsetting the variable -->
      <?php unset($var1) ?>
      <br>
      Var1: <?php echo isset($var1); ?>
      <br>
      Var2: <?php echo isset($var2); ?>
      <br>
      Var3: <?php echo isset($var3); ?>
      <br>
      <!-- understanding null -->
      <br>
      Is empty: <?php echo empty($var1); ?>
      <br>
      Var4 empty: <?php echo empty($var4); ?>

    </body>
</html>
