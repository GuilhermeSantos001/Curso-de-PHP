<?php
echo '<h1>Utilizando o continue em PHP</h1><hr>';

echo '<h2>NÚMEROS PARES DE 0 ATÉ 100</h2>';
for($i=0; $i<100; $i++){

    if($i % 2 == 1){
        continue;
    }

    echo $i . "\n";

}
?>
