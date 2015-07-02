<html>
  <head>
      <title> String functions </title>
  </head>
    <body>
      <?php
          $firstString = "The quick brown fox";
          $secondString = " jumped over the lazy dog.";
       ?>
       <?php
          $thirdString = $firstString;
          //concernating strings using variables
          $thirdString.=$secondString;
          echo $thirdString;
        ?>
        <br>

        Lowercase: <?php echo strtolower($thirdString);  ?>
        <br>
        Uppercase: <?php echo strtoupper($thirdString); ?>
        <br>
        Upperfirst: <?php echo ucfirst($thirdString); ?>
        <br>
        Upperwords: <?php echo ucwords($thirdString); ?>
        <br>
        Length: <?php echo strlen($thirdString); ?>
        <br>
        Trim: <?php echo $fourthString = $firstString.trim($secondString); ?>
        <br>
        Replace: <?php echo str_replace("quick", "super star",$thirdString); ?>
        <br>
        Find: <?php echo strstr($thirdString,"brown"); ?>
        <?php echo "<br>For more string functions" ?>
        <br>
        Repeat: <?php str_repeat($thirdString,2); ?>
        <br>
        Make substring: <?php echo substr($thirdString,4,10); ?>
        <br>
        Find Position: <?php echo strpos($thirdString,"brown"); ?>
        <br>
        Find character: <?php strchr($thirdString,"z") ?>

    </body>
</html>
