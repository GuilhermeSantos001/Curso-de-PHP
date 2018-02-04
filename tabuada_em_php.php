<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Tabuada - Curso PHP - eXcript</title>
</head>

<body>

<h1>Tabuada em PHP</h1><hr>
<p>
  Se não informar um valor ou se o mesmo não for um numero
  então um numero aleatorio de 1 a 10 será atribuido.
</p>
<form method="post">
    <input type="text" name="edTABUADA" >
    <input type="submit">
</form>

<?php

$tab = 0;
if(isset($_POST["edTABUADA"])){
    $tab = $_POST["edTABUADA"];
    if(!is_numeric($tab) || is_numeric($tab) && $tab <= 0)
      $tab = rand(1, 10);
    $num=0;
    while($num <= 10){
        echo $tab . " x " . $num . " = " . ($num * $tab) . "<br>";
        $num++;
    }
}

?>

</body>


</html>
