<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Estrutura elseif - Curso PHP - eXcript</title>
</head>

<body>


    <?php
    if(isset($_POST['idade'])){
        $idade = $_POST['idade'];

        if($idade < 18){
            echo "A idade � de uma crian�a ou de um adolescente";
        }elseif($idade >= 18 and $idade < 60){
            echo "A idade � de um adulto";
        }else{
            echo "A idade � de uma pessoa da terceira idade";
        }
    }
    ?>

    <form method="POST">
        <input type="text" name="idade">
        <input type="submit">
    </form>

</body>


</html>
