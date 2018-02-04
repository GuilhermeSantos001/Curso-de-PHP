<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Número Pares e Ímpares - Curso PHP - eXcript</title>
</head>

<body>

    <?php
    if(isset($_POST["num"])){
        echo $_POST["num"];
        echo "<br>";

        $num = $_POST["num"];

        if($num % 2 == 0){
            echo "O número informado é par";
        }else{
            echo "O número informado é impar";
        }
    }
    ?>

    <form method="POST">
        <input type="text" name="num"/>
        <input type="submit">
    </form>

</body>








</html>