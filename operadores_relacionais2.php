<?php
//aprofundando o estudo dos operadores relacionais
echo "igualdade\n";
var_dump(10==10);
var_dump(10==11);
var_dump(11=="11");

echo "\ndiferente\n";
var_dump(10 != 10);
var_dump(10 != 11);

var_dump(10 <> 10);
var_dump((10 <> 10)and(10!=10));

echo "\n\nidentico\n";
var_dump(10 === 10);
var_dump(10 === "10");
var_dump(10 !== 10);
var_dump(10 !== "10");

//menor e maior
echo "\n\nmenor e maior\n";
var_dump(10 < 10);
var_dump(10 > 10);

echo "\n\nmenor E igual\n";
var_dump(10 <= 10);
echo "\n\nmaior E igual\n";
var_dump(10 >= 10);
?>