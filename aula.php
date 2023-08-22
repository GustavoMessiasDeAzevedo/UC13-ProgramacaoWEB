<?php


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
    protected $nomeLivro;
    public $autor;
    protected $isbn;
    public $numeroDePaginas;
    public $nome;

     public function __construct(livro $tituloLivro, $autor, $isbn, $numeroDePaginas, usuario $nome)
     {
        $this->nome = "Paula";
        $this->nomeLivro= "Harry potter";
        $this->autor = "eu";
        $this->isbn = "1421415";
        $this->numeroDePaginas = 142;
        $this->nome = "Paula";
                  
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