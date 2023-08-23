<?php

use biblioteca as GlobalBiblioteca;

class usuario {

    protected $nome;
    private $senha;
    private $cpf;
}


class aluno {
    protected $nome;
    private $cpf;
    public $celular;
    protected $dataDeNascimento;
    public $email;
}

class livro{

    protected $nomeLivro;
    public $autor;
    protected $isbn;
    public $numeroDePaginas;


}


class biblioteca{
    public $nomeLivro;
    public $autor;
    public $isbn;
    public $numeroDePaginas;
    public $nome;

     public function __construct(livro $tituloLivro, $autor, $isbn, $numeroDePaginas, usuario $nome)
     {
        $this->$nome->nomeUsuario;
        $this->$tituloLivro->nomeLivro;
        $this->$autor->autor;
        $this->$isbn->isbn;
        $this->$numeroDePaginas->numeroPagina;
      
                  
     }
}

class emprestimoLivro{

    public $nome;
    public $livro;                                                 

    public function __construct(aluno $nome, biblioteca $nomeLivro)
    {
        $this->nome = "Gustavo";
        $this->livro = "Harry Potter";
    }

}


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema biblioteca</title>
</head>
    <body>
        <h1>Sistema biblioteca</h1>
        <hr>

        <form action="" method="post">

            <label for="nomeDoLivro">Nome do livro:</label><br>
            <input type="text" name="nomeDoLivro" id=""><br>
            <label for="autorDoLivro">Autor</label><br>     
            <input type="text" name="autorDoLivro" id=""><br>
            <label for="isbnDoLivro">ISBN</label><br>
            <input type="number" name="isbnDoLivro" id=""><br>
            <label for="paginasDoLivro">Numero de páginas</label><br>
            <input type="number" name="paginasDoLivro" id=""><br>

            <button type="submit">Adicionar</button>
        </form>

        <hr>

        
        <p>Nome do livro: </p>
        <p>Autor: </p>
        <p>ISBN: </p>
        <p>Número de páginas: </p>
    </body>
</html>