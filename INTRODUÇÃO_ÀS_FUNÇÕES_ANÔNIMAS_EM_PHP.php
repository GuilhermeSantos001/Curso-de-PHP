<?php

# Toda função anonima tem que ser fechada com ;

# o bloco de instrução a seguir, será atribuido à
# variável de nome $func e, para executar o código
# utilizaremos o nome da variável
$func = function($num){
    echo "Valor do parâmetro recebido " . $num;
};

echo "\n\n";

# aqui, estamos invocando a função anonima
# declarada nas linhas acima
$func(180);

echo "\n\n";

#FUNÇÕES ANÔNIMAS


$func = function($nome){
    echo "O nome enviado como parâmetro é: $nome";
};

function teste($f){
    $f("Cláudio");
}

teste($func);
//$func("eXcript");