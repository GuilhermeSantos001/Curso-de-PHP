<?php
echo '<h1>Usando o Operador Ternario</h1><hr><br>';
$opcao = False;

$str = ($opcao) ? "true" : "false";

echo 'Verifica se a var($opcao) é igual a true(verdadeiro), resultado: ' . $str;

echo '<br>';
echo isset($_GET["texto"]) ? $_GET["texto"] : 'A chave não existe';
?>
