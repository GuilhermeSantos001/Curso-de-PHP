<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Tela de Login e Senha - Curso PHP - eXcript</title>
</head>

<body>

    <?php
    //    "eXcript" != "excript"
    $login = "eXcript";
    $senha = "123";

    if(isset($_POST["login"])){
    //        echo $_POST["login"] . "<br>";
    //        echo $_POST["senha"];
        if($_POST["login"] == $login and $_POST["senha"] == $senha){
            echo "Login efetuado com sucesso";
        }else{
            echo "Login ou senha inválido";
        }
    }

    ?>

    <form method="post">
        <input type="text" name="login"><br>
        <input type="password" name="senha">
        <input type="submit">
    </form>

</body>


</html>