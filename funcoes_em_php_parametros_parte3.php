<?php
function soma(){
    $total = func_get_arg(0) + func_get_arg(1);
    echo $total;
    echo '<br> ' . func_num_args() . '<br>';
    print_r(func_get_args());

}

soma(10, 2);
?>