<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Array Associativo - Curso PHP - eXcript</title>
</head>

<body>

<h1>Array Associativo</h1><hr>
<h2>
  Escreva uma chave(KEY) e o seu valor(VALUE)
</h2>
<form method="post">
    <label for="key">Chave</label>
    <br>
    <input id="key" type="text" name="val_key" >
    <br><br>
    <label for="value">Value</label>
    <br>
    <input id="value" type="text" name="val_value" >
    <input type="submit">
</form>

<?php
    if (isset($_POST["val_key"], $_POST["val_value"])) {
        $result = [$_POST["val_key"]=>$_POST["val_value"]];
        echo "<h2>KEY: " . $_POST["val_key"] . " | VALUE: " . $result[$_POST["val_key"]] . "</h2>";
        print_r($result);
    }
?>

</body>


</html>