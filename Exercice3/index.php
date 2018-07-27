<?php
function returnString($str1 = '',$str2 = '' ){
$str1 = 'bonjour';
$str2 = 'aurevoir';
return $str1.' '.$str2;
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
<?php
echo returnString();
 ?>
</p>
  </body>
</html>
