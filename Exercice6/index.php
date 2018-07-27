<?php
//déclaration de la function returnIdentity
function returnIdentity($firstname = '',$lastname = '',$age = 0 ){
//gestions des informations
$firstname = 'Damien';
$lastname = 'Poix';
$age = '18';
//les valeurs qu'on renvoie
return 'Bonjour '.$lastname.' '.$firstname.' tu as '.$age.'ans';
}
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title></title>
  </head>
  <body>
<p> <?= returnIdentity(); ?> </p>
  </body>
</html>
