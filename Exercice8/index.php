<?php
function Calcul($nbr1 = 19,$nbr2 = 22,$nbr3 = 7){
return $nbr1 + $nbr2 + $nbr3;
}
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 8 </title>
  </head>
  <body>
    <p> <?= 'defaut : 19 + 22 + 7 = ' .calcul().'  notre calcul : 49 + 21 + 30 = '.calcul(49,21,30) ?> </p>
  </body>
</html>
