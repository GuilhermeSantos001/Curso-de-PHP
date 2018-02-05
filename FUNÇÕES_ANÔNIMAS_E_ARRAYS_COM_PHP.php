<?php
#FUNÇÕES ANÔNIMAS E ARRAYS

#array_map(<f.anonima>, <array>)

echo "\n\n ARRAY_MAP\n\n";


$lista = [1,2,3,4,5];

$f = function($x){
    return $x + $x;
};

$lista_proc = array_map($f, $lista);
print_r($lista_proc);

echo "\n\n ARRAY_FILTER\n\n";

#array_filter(<array>, <f.anonima>)

$filtro = function($x){
    return $x > 3;
};

$lista_filtro = array_filter($lista, $filtro);

print_r($lista_filtro);