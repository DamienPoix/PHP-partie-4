<?php
//déclaration de la fonction.
function identity($gender = true ,$age = 0){
  // if/else pour le genre (Homme/femme)
  if ($gender == true) {
    $gender = 'un homme';
  }else {
    $gender = 'une femme';
  }
  // if/else pour l'age (mineur/majeur)
  if ($age >= 18) {
    $age = 'majeur';
  }else {
    $age = 'mineur';
  }
  //permet de retourner les valeurs
  return 'Vous êtes '.$gender.' et vous êtes '.$age;
}
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 7</title>
  </head>
  <body>
    <p> <?= identity(true,15); ?> </p>
  </body>
</html>
