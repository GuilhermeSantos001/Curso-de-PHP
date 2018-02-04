<?php
function retorno() {
    if (func_num_args() > 0) {
        echo func_get_arg(0);
        return true;
    }
    echo 'Não tenho o que falar...';
    return false;
}
retorno();
echo '<br>';
retorno('Hello World');
?>