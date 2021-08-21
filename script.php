<?php

$categoria = [];
$categoria[] = 'infantil';
$categoria[] = 'adolecente';
$categoria[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//VERIFICACAO NOME E IDADE DO FORMULARIO

if(empty($nome)) {
    echo 'O nome não pode ser vazio';
} //nao aceita o campo vazio

if(strlen($nome) < 3) {
    echo 'O nome deve conter mais de 3 caracteres';
    return;
}//o nome não pode conter menos de 3 caracteres

if(strlen($nome) > 40) {
    echo 'O nome é muito extenso';
    return;
}//o nome não pode conter mais de 40 caracteres

if(!is_numeric($idade)) {
    echo 'Informe um numero para idade';
    return;
}//validando se no campo idade foi digitado number ou string


//VERIFICACAO NOME E IDADE DO FORMULARIO

if($idade >=6 && $idade <=12) {
    for($i = 0; $i <= count($categoria); $i++) {
        if($categoria[$i] == 'infantil')
        echo 'O nadador ' .$nome. ' compete na categoria ' .$categoria[$i];
    }
}else if($idade >=13 && $idade <=18) {
    for($i = 0; $i <= count($categoria); $i++) {
        if($categoria[$i] == 'adolecente')
        echo 'O nadador ' .$nome. ' compete na categoria ' .$categoria[$i];
    }
}else {
    for($i = 0; $i <= count($categoria); $i++) {
        if($categoria[$i] == 'adulto')
        echo 'O nadador ' .$nome. ' compete na categoria ' .$categoria[$i];
    }
}