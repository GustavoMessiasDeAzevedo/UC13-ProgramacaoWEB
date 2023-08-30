<?php

    class usuario{

        public $nome;
        protected $email;
        private $senha;
        public $perfil;


        public function emailPublic(){

            return $this->email;
        }

        public function senhaPublic(){
            return $this->senha;
        }


        public function __construct($nomeUsuario, $emailUsuario, $senhaUsuario, $tipoPerfil)
        {
            $this -> nome = $nomeUsuario;
            $this -> email = $emailUsuario;
            $this -> senha = $senhaUsuario;
            $this -> perfil = $tipoPerfil;
        }

    }


    if($_SERVER["REQUEST_METHOD"] == "post"){
        $nomeUsuario = $_POST["nomeUsuario"];
        $emailUsuario = $_POST["emailUsuario"];
        $senhaUsuario = $_POST["senhaUsuario"];
        $tipoPerfil = $_POST["tipoPerfil"];

        $usuario = new usuario($nomeUsuario, $emailUsuario, $senhaUsuario, $tipoPerfil);
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuário</title>
</head>
    <body>
        <form action="" method="post">


            <label for="nomeUsuario">Nome do usuário: </label>
            <input type="text" name="nomeUsuario" id="nomeUsuario"><br><br>
            <label for="emailUsuario">Email do usuario: </label>
            <input type="text" name="emailUsuario" id="emailUsuario"><br><br>
            <label for="senhaUsuario">Senha: </label>
            <input type="password" name="senhaUsuario" id="senhaUsuario"><br><br>
            <label for="tipoPerfil">Tipo perfil: </label>
            <input type="text" name="tipoPerfil" id="tipoPerfil"><br><br>
            <button type="submit">Cadastar</button>
        </form>

        <h2>Resultado do cadastro de Usuario</h2>
    <?php if(isset($usuario)): ?>
        <p>Nome usuário: <?= $usuario->$nomeUsuario?></p>
        <p>Email: <?= $usuario->emailPublic()?></p>
        <p>Senha: <?= $usuario->senhaPublic()?></p>
        <p>Tipo perfil: <?= $usuario->$tipoPerfil?></p>
        
    <?php endif; ?>
    <hr>
   
    <a href="teste2.php"  rel="noopener noreferrer"><button>Cadastrar aluno</button></a>
    <a href="teste3.php" target="_blank" rel="noopener noreferrer"><button>Emprestimo de livro</button></a>
    <a href="biblioteca.php"  rel="noopener noreferrer"><button>Cadastrar livro</button></a>

    </body>
</html>