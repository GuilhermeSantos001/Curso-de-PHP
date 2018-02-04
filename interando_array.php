<?php
$lista = [
    "Domingo",
    "Segunda",
    "Terça",
    "Quarta",
    "Quinta",
    "Sexta",
    "Sabado"
];
$qnt = count($lista);
for($x=0; $x<$qnt; $x++){
    echo "$x: $lista[$x]<br>";
}
?>