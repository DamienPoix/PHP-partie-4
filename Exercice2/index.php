<?php
//on declare la fonction qui retourne une chaine de caracteres passer en parametre.
function retunrString($str){
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
    <?= retunrString('Bonjour je suis une chaine caracteres'); //on affiche le retour de la fonction et on donne une valeur a son parametre ?>
  </p>
  </body>
</html>
