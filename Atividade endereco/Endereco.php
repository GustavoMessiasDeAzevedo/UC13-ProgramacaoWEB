<?php

class Endereco{

    public $cep;
    public $logradouro;
    public $bairro;
    public $localidade;
    public $uf;

   


    public function __construct($cep)
    {
        $this ->cep = $cep;
    }
}