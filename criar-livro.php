<?php
    class biblioteca{
    protected $nomeLivro;
    public $autor;
    protected $isbn;
    public $numeroDePaginas;
    public $nome;

     public function __construct(livro $tituloLivro, $autor, $isbn, $numeroDePaginas, usuario $nome)
     {
        $this->$nome->nomeUsuario = "Paula";
        $this->$tituloLivro->nomeLivro = "Harry potter";
        $this->$autor->autor = "eu";
        $this->$isbn->isbn = "1421415";
        $this->$numeroDePaginas->numeroPagina = 142;
      
                  
     }
}