<?php
session_start();


$categoria = [];
$categoria[] = 'infantil';
$categoria[] = 'adolecente';
$categoria[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//VERIFICACAO NOME E IDADE DO FORMULARIO

if(empty($nome)) {
    $_SESSION ['mensagem-de-erro'] = 'O nome não pode ser vazio';//criando uma variavel session coom a mensagem de erro para exibir no html
    header('Location: index.php');//se nome estiver vazio, irá redir para o index.php mostrando a mensagem de erro
    return;
} //nao aceita o campo vazio


else if(strlen($nome) < 3) {
    $_SESSION ['mensagem-de-erro'] = 'O nome não pode conter menos de 3 caracters';//criando uma variavel session coom a mensagem de erro para exibir no html
    header('Location: index.php');//se nome estiver vazio, irá redir para o index.php mostrando a mensagem de erro
    return;
}//o nome não pode conter menos de 3 caracteres

else if(strlen($nome) > 40) {
    $_SESSION ['mensagem-de-erro'] = 'O nome é muito extenso';//criando uma variavel session coom a mensagem de erro para exibir no html
    header('Location: index.php');//se nome estiver vazio, irá redir para o index.php mostrando a mensagem de erro
    return;
}//o nome não pode conter mais de 40 caracteres

else if(!is_numeric($idade)) {
    $_SESSION ['mensagem-de-erro'] = 'Informe um numero para a idade';//criando uma variavel session coom a mensagem de erro para exibir no html
    header('Location: index.php');//se nome estiver vazio, irá redir para o index.php mostrando a mensagem de erro
    return;
}//validando se no campo idade foi digitado number ou string


//VERIFICACAO NOME E IDADE DO FORMULARIO

if($idade >=6 && $idade <=12) {
    for($i = 0; $i <= count($categoria); $i++) {
        if($categoria[$i] == 'infantil')
        $_SESSION['mensagem-de-sucesso'] = 'O nadador ' .$nome. ' pertence a categoria ' .$categoria[$i];
        header('Location: index.php');
        
    }
}else if($idade >=13 && $idade <=18) {
    for($i = 0; $i <= count($categoria); $i++) {
        if($categoria[$i] == 'adolecente')
        $_SESSION['mensagem-de-sucesso'] = 'O nadador ' .$nome. ' pertence a categoria ' .$categoria[$i];
        header('Location: index.php');
    
    }
}else {
    for($i = 0; $i <= count($categoria); $i++) {
        if($categoria[$i] == 'adulto')
        $_SESSION['mensagem-de-sucesso'] = 'O nadador ' .$nome. ' pertence a categoria ' .$categoria[$i];
        header('Location: index.php');
        
    }
}