<?php
//déclaration pour la concatenation
function returnConca($str = '',$numb = 5 ){
  //modification du string
$str = 'bonjour';
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
<?= returnConca(); ?>
</p>
  </body>
</html>
