<?php 
    
    class emprestimo{
        public $nomeDoAluno;
        public $nomeDoLivro;
        public $dataEmprestimo;
        public $dataDevolucao;


        public function __construct($alunoEmprestado, $livroEmprestado, $dataDoEmprestimo, $dataDaDevolucao){
            $this -> nomeDoAluno = $alunoEmprestado;
            $this -> nomeDoLivro = $livroEmprestado;
            $this -> dataEmprestimo = $dataDoEmprestimo;
            $this -> dataDevolucao = $dataDaDevolucao;
        }


         
       


    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $alunoEmprestado = $_POST["nomeAluno"];
        $livroEmprestado = $_POST["livroEmprestado"];
        $dataDoEmprestimo = $_POST["emprestimo"];
        $dataDaDevolucao  = $_POST["devolucao"];

        $emprestimo = new emprestimo($alunoEmprestado, $livroEmprestado, $dataDoEmprestimo, $dataDaDevolucao);
    }   

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="POST">

        <label for="nomeAluno">Nome do aluno:</label>
        <input type="text" name="nomeAluno" id="nomeAluno"><br><br>

        <label for="livroEmprestado">Nome do livro emprestado:</label>
        <input type="text" name="livroEmprestado" id="livroEmprestado"><br><br>

        <label for="emprestimo">Data do empréstimo:</label>
        <input type="date" name="emprestimo" id="emprestimo"><br><br>

        <label for="devolucao">Data da devolução:</label>
        <input type="date" name="devolucao" id="devolucao"><br><br>

        <input type="submit" value="Arquivar emprestimo">

    </form><br>

    <a href="teste.php" target="_blank" rel="noopener noreferrer"><button>Cadastrar livro</button></a>
    <a href="teste2.php" target="_blank" rel="noopener noreferrer"><button>Cadastrar aluno</button></a>
</body>
</html>