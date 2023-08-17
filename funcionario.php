<?php

$listaFuncionarios = [


      [

        "id" => 1,
        "nome" => "Gustavo Messias",
        "email" => "gustavo@teste.com",
        "telefone" => "(14)99999-9999"
    ],
      [

        "id" => 2,
        "nome" => "Eu Messias",
        "email" => "Eu@teste.com",
        "telefone" => "(14)99999-9999"
    ],
     [

        "id" => 3,
        "nome" => "Eu eu",
        "email" => "Eu@teste.eu",
        "telefone" => "(14)99999-9999"
    ],
    [

        "id" => 4,
        "nome" => "Eu eysias",
        "email" => "Eu@eyeste.com",
        "telefone" => "(14)949999-9999"
    ],


];

$numeroArray = count($listaFuncionarios);
$listaFuncionarios[$numeroArray]["id"] = $numeroArray;
$listaFuncionarios[$numeroArray]["nome"] = "Mister";
$listaFuncionarios[$numeroArray]["email"] = "mister@teste";
$listaFuncionarios[$numeroArray]["telefone"] = "(14)99999-999";



//var_dump($listaFuncionarios);