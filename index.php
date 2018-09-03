<?php
  $stepsNumber = 200;
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 8</title>
  </head>
  <body>
    <p>
    <?php
    while ($stepsNumber >= 0) {
      echo ' | ' .$stepsNumber. ' Enfin !!!!';
      $stepsNumber = $stepsNumber - 12;
    }
    ?>
  </p>
  </body>
</html>
