<?php
#Definindo o Array
$lista = ["zero", "um", "dois", "três", "quatro"];

#Adicionando elementos
$lista[] = "cinco";

#Alterando elementos
$lista[1] = "ummm";
$lista[4] = "quatrro";

#Excluindo elementos
unset($lista[3]);

print_r($lista);
?>
