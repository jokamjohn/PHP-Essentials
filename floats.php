<html>
  <head>
      <title> Numbers: Floating points</title>
  </head>
    <body>
      <?php echo $var =3.14; ?>
      <br>
      Rounding off: <?php echo round($var, 1); ?>
      <br>
      Ceiling: <?php echo ceil($var); ?>
      <br>
      Floor: <?php echo floor($var); ?>
      <br>
      Absolute value: <?php echo abs(0 - 300); ?>
      <br>
      Exponential: <?php echo pow(2,10); ?>
      <br>
      Square root: <?php echo sqrt(100); ?>
      <br>
      Modulo: <?php echo fmod(20,7); ?>
      <br>
      Random(any): <?php echo rand(); ?>
      <br>
      Random(min,max): <?php echo rand(1,10); ?>

    </body>
</html>
