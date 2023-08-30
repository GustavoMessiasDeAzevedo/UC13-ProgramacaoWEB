<?php
class aluno {
    protected $nome;
    private $cpf;
    public $celular;
    public $telefone;
    protected $dataDeNascimento;
    public $email;

    public function nomePublic(){
        return $this->nome;
    }

    public function cpfPublic(){
        return $this->cpf;
    }

    public function dataPublic(){
        return $this->dataDeNascimento;
    }

    public function celularPublic(){
        return $this->celular;
    }

    public function emailPublic(){
        return $this->email;
    }

    public function __construct($nomeAluno, $cpfAluno, $celularAluno, $telefoneAluno, $dataDeNascimentoAluno, $emailAluno){
        $this->nome = $nomeAluno;
        $this->cpf = $cpfAluno;
        $this->celular = $celularAluno;
        $this->telefone = $telefoneAluno;
        $this->dataDeNascimento = $dataDeNascimentoAluno;
        $this->email = $emailAluno;
    }
}

$aluno = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeAluno = $_POST["nomeDoAluno"];
    $cpfAluno = $_POST["cpfDoAluno"];
    $celularAluno = $_POST["celularDoAluno"];
    $telefoneAluno = $_POST["TelefoneDoAluno"];
    $dataDeNascimentoAluno = $_POST["nascimentoAluno"];
    $emailAluno = $_POST["emailContatoAluno"];

    $aluno = new aluno($nomeAluno, $cpfAluno, $celularAluno, $telefoneAluno, $dataDeNascimentoAluno, $emailAluno);
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
<h2>Cadastro de aluno</h2>

<form action="" method="POST">
    <label for="nomeDoAluno">Nome do aluno:</label>
    <input type="text" name="nomeDoAluno" id="nomeDoAluno"><br><br>

    <label for="cpfDoAluno">CPF do aluno:</label>
    <input type="text" name="cpfDoAluno" id="cpfDoAluno"><br><br>

    <label for="celularDoAluno">Celular do aluno:</label>
    <input type="text" name="celularDoAluno" id="celularDoAluno"><br><br>

    <label for="TelefoneDoAluno">Telefone do aluno:</label>
    <input type="text" name="TelefoneDoAluno" id="TelefoneDoAluno"><br><br>

    <label for="nascimentoAluno">Data de nascimento:</label>
    <input type="date" name="nascimentoAluno" id="nascimentoAluno"><br><br>

    <label for="emailContatoAluno">Email do aluno:</label>
    <input type="text" name="emailContatoAluno" id="emailContatoAluno"><br><br>

    <input type="submit" value="Adicionar aluno">
</form>

<h2>Resultado do cadastro de aluno</h2>
<?php if(isset($aluno)): ?>
    <p>Nome do aluno: <?= $aluno->nomePublic() ?></p>
    <p>CPF: <?= $aluno->cpfPublic() ?></p>
    <p>Celular: <?= $aluno->celularPublic() ?></p>
    <p>Telefone: <?= $aluno->telefone ?></p>
    <p>Data de nascimento: <?= $aluno->dataPublic() ?> </p>
    <p>Email: <?= $aluno->emailPublic() ?></p>
<?php endif; ?>

<a href="biblioteca.php"  rel="noopener noreferrer"><button>Cadastrar livro</button></a>
<a href="emprestimo.php"  rel="noopener noreferrer"><button>Emprestimo de livro</button></a>
<a href="usuario.php"  rel="noopener noreferrer"><button>Cadastrar Usuario</button></a>

</body>
</html>
