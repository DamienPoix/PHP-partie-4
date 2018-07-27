<?php
function returnCalcul($nbm1,$nbm2){
  if ($nbm1 > $nbm2) {
    return 'Le premier nombre est plus grand';
  }elseif ($nbm1 < $nbm2) {
    return 'Le premier nombre est plus petit';
  }else {
    return 'les deux nombres sont identiques';
  }
}
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice2</title>
  </head>
  <body>
    <p>
    <?php
    echo returnCalcul(20,25);
    ?>
  </p>
  </body>
</html>
