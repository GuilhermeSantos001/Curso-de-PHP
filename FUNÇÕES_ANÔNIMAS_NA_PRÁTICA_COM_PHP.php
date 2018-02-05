<?php
#PRÁTICA - FUNÇÕES ANÔNIMAS

$quadrado = function($item){
    return $item * $item;
};
$cubo = function($item)use($quadrado){
    return $quadrado($item) * $item;
};
$soma = function($item){
    return $item + $item;
};

function processa_lista($lista, $func){
    foreach($lista as &$item){
        $item = $func($item);
    }
    return $lista;
}

echo "QUADRADO\n";
print_r(processa_lista(range(1,10), $quadrado));

echo "\nCUBO\n";
print_r(processa_lista(range(1,10), $cubo));

echo "\nSOMA\n";
print_r(processa_lista(range(1,10), $soma));

echo "\n\n FUNÇÃO array_map() \n\n";

# ==================================================
# FUNÇÃO array_map()
# ==================================================
$arr = [1, 2, 3, 4, 5];

$f = function($x) {
    return $x * $x;
};

$var_arr = array_map($f, $arr);
var_dump($var_arr);

echo "\n\n FUNÇÃO array_filter() \n\n";

# ==================================================
# FUNÇÃO array_filter()
# ==================================================
$lista = [1,2.21,"",9,4];

$f = function ($v) {
    return is_int($v);
};

$lista_filtrada = array_filter( $lista, $f );

print_r( $lista_filtrada );

