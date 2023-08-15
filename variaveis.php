<?php

$nomeCompleto = 'Gustavo Messias';
$idade = 40;
$status = true;
$salario = 1500.00;


echo $nomeCompleto;
echo "<hr>";
//converte em maiusculo
echo strtoupper($nomeCompleto);

echo "<hr>";

//converte em minusculo
echo strtolower($nomeCompleto);
echo "<hr>";

//converte a primeira letra em maiusculo
echo ucwords($nomeCompleto);
echo "<hr>";

//Pesquisa/substitui, na variavel
echo str_replace("Gustavo", "Messias", $nomeCompleto);
echo "<hr>";

//Repete a string
echo str_repeat("Gustavo, ", 5);
echo "<hr>";

//verifica se a variavel existe
echo isset($nomeCompleto) ? 'true':'false';
echo "<hr>";

//verifica se a variavel existe e se está vazia
echo empty($nomeCompleto) ? 'true' : 'false';

