<?php
function retunrString($str = 'Bonjour je suis une chaine de caractères'){
  return $str;
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
    <?= retunrString() ?>
  </p>
  </body>
</html>
