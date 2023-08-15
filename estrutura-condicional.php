<?php

$nome = "Gustavo Messias";
$email = "messiasgustavo01@outlook.com";
$senha = "12345678";
$idade = 19;
////////////////////////////////////////////
echo "<h1>Estrutura Condicional </h1>"; 
echo "<hr>";

echo "<h5>Exemplo de if()</h5>";
echo "<br>";

if($idade >= 18){
    echo "O usuário $nome é maior de idade";
}

/////////////////////////////////////////////
echo "<hr>";
echo"<h5>Exemplo de if e else</h5>";

if($senha == "12345679"){
    echo "A senha é valida";
}else{
    echo "Senha inválida";
}

/////////////////////////////////////////////
echo "<hr>";
echo"<h5>Exemplo de if e Elseif else</h5>";


if($idade <= 18){
    echo"Jovem";
}else if($idade <=21){
    echo "Adulto";
}else{
    echo "Velho";
}

/////////////////////////////////////////////
echo "<hr>";
echo"<h5>Exemplo de condição para formuálrio de login</h5>";

if($email == " messiasgustavo01@outloo.com" && $senhas == '12345678'){
    echo "Usuário autenticado";
}else{
    echo "Usuário ou senha inválidos";
}


/////////////////////////////////////////////
echo "<hr>";
echo"<h5>Verificar se o numero é par ou impar</h5>";

$numero = 10;
$div = 0;



if($numero % 2 == 0){
    echo"O número 10 é par";
}else{
    echo "Conta inválida";
}

/////////////////////////////////////////////
echo "<hr>";
echo"<h5>Mostre o dia da semana</h5>";

$data = date('w');

if($data == '0'){
    echo "Hoje é Domingo";
}else if($data == '1'){
    echo "Hoje é Segunda-Feira";
}else if ($data == '2'){
    echo "Hoje é Terça-Feira";
}else if ($data == '3'){
    echo "Hoje é Quarta-feira";
}else if ($data == '4'){
    echo "Hoje é Quinta-feira";
}else if ($data == '5'){
    echo "Hoje é Sexta-feira";
}else{
    echo "Hoje é Sábado";
}





