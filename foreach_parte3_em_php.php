<?php
    echo '& passa a referencia do valor do array na memoria<br>';
    echo 'Sem o uso do & é passado uma copia do valor e não sua\
    referencia<br>';
    $nums = range(0, 10);
    foreach($nums as $chave => &$valor){
        $valor *= 10;
        echo $valor."<br>";
    }
    print_r($nums);
?>