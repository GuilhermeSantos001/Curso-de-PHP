<?php
    $testando = 10;
    $a = 10;
    $b = 5;

    function estudoEscopo(){
        echo $GLOBALS["a"];
    }


    estudoEscopo();

    print_r($GLOBALS);
?>