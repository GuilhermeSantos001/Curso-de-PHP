<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Switch - Curso PHP - eXcript</title>
</head>

<body>

<h1>Switch em PHP</h1><hr>
<p>
  Basta informar um valor para verificar a condição dele
  <br> O valor deve ser um numero de 1 a 10
  <br> Se o valor não for informado ele será atribuido de 1 a 100
</p>
<form method="post">
    <input type="text" name="valSwitch" >
    <input type="submit">
</form>

<?php

$switchVal = 0;
if(isset($_POST["valSwitch"])){
    $switchVal = $_POST["valSwitch"];
    if(!is_numeric($switchVal) || is_numeric($switchVal) && $switchVal <= 0)
      $switchVal = rand(1, 100);
    switch ($switchVal) {
      case $switchVal <= 10:
        echo 'O numero é ' . $switchVal;
        break;
      default:
        echo 'O numero é maior que 10';
        break;
    }
}
?>

</body>


</html>
