<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Calculadora - Curso PHP - eXcript</title>
</head>

<body>

<h1>Calculadora em PHP</h1><hr>
<p>
    Faça um calculo usando PHP
</p>
<form method="post">
    <label>Valor 1</label>
    <input type="text" name="valor_1" >
    <br>
    <label>Valor 2</label>
    <input type="text" name="valor_2" >
    <br>
    <label>Tipo de calculo</label>
    <select name="valor_tipo">
        <option value="1">Somar</option>
        <option value="2">Subtrair</option>
        <option value="3">Dividir</option>
        <option value="4">Multiplicar</option>
        <option value="5">Modulo</option>
    </select>
    <br>
    <input type="submit">
</form>

<?php

function calculadora($val_1, $val_2, int $val_type) {
    switch ($val_type) {
        case 1:
            return $val_1 + $val_2;
        case 2:
            return $val_1 - $val_2;
        case 3:
            return $val_1 / $val_2;
        case 4:
            return $val_1 * $val_2;
        case 5:
            return $val_1 % $val_2;
    }
}

if(isset($_POST["valor_1"], $_POST["valor_2"], $_POST["valor_tipo"])){
    echo '<h1> Resultado: ' . calculadora($_POST["valor_1"], $_POST["valor_2"], $_POST["valor_tipo"]) . '</h1>';
}

?>

</body>


</html>
