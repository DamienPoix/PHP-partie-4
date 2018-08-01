<?php
//déclaration pour la concatenation
function returnConca($str = '',$numb = 0 ){
//return des valeurs
return $str .' '.$numb;
}
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title></title>
  </head>
  <body>
<p>
<?= returnConca('error',404); ?>
</p>
  </body>
</html>
