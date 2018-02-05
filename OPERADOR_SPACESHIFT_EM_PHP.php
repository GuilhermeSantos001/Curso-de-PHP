<?php
#SPACESHIFT OPERATOR

# Se for menor, retorna -1
# Se for igual, retorna 0
# Se for maior, retorna 1

echo "\n\n SPACESHIFT OPERATOR \n\n";

foreach(range(0,9) as $v){

    $x = rand(0, 9);
    $rel = $v <=> $x;

    echo "v=$v <=> x=$x é $rel \n";

}

echo "\n\n Exemplo com array \n\n";

// Exemplo com array
echo "[] <=> [] ";
echo [] <=> []; // 0

echo "\n";

echo "[1, 2, 3] <=> [1, 2, 3] ";
echo [1, 2, 3] <=> [1, 2, 3]; // 0

echo "\n";

echo "[1, 2, 3] <=> [] ";
echo [1, 2, 3] <=> []; // 1

echo "\n";

echo "[1, 2, 3] <=> [1, 2, 1] ";
echo [1, 2, 3] <=> [1, 2, 1]; // 1

echo "\n";

echo "[1, 2, 3] <=> [1, 4, 4] ";
echo [1, 2, 3] <=> [1, 4, 4]; // -1

echo "\n\n Exemplo com string \n\n";

// Exemplo com string
echo "\"x\" <=> \"x\" ";
echo "x" <=> "x"; // 0

echo "\n";

echo "\"x\" <=> \"y\" ";
echo "x" <=> "y"; //-1

echo "\n";

echo "\"y\" <=> \"x\" ";
echo "y" <=> "x"; //1

echo "\n\n Exemplo com number \n\n";

// Exemplo com number
echo "1 <=> 1 ";
echo 1 <=> 1; // 0

echo "\n";

echo "2 <=> 1 ";
echo 2 <=> 1; // 1

echo "\n";

echo "1 <=> 2 ";
echo 1 <=> 2; // -1

echo "\n";

echo "156 <=> 12 ";
echo 156 <=> 12; // 1

echo "\n";

echo "19 <=> 20 ";
echo 19 <=> 20; // -1