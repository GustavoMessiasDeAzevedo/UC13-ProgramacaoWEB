<?php


$listaCompra = ['Arroz', 'Feijão', 'Ovo', 'Picanha'];

print_r($listaCompra); //Comando para auxiliar o programador

var_dump($listaCompra); //Outro método para depurar 

echo "<hr>";

echo $listaCompra[2];

echo "<hr>";

foreach($listaCompra as $item){
    echo $item. " - ";
}

echo "<hr>";

foreach($listaCompra as $indice => $item){
    echo $indice. "- ". $item. ", ";
}

echo "<hr>";
$listaCompra[] = "Óleo";
foreach($listaCompra as $indice => $item){
    echo $indice. "- ". $item. ", ";
}

