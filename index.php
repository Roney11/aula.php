<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p>Preencha o Formulário</p>

    <form action="script.php" method="post">
        <?php 
            $mensagemErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
            if(!empty($mensagemErro)) {
                echo $mensagemErro;
            }

            $mensagemSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
            if(!empty($mensagemSucesso)) {
                echo $mensagemSucesso;
            }
        ?>
        <p>Seu nome: <input type="text" name="nome"></p>
        <p>Seu idade: <input type="text" name="idade"></p>
        <p><input type="submit"></p>
    </form>

</body>
</html>