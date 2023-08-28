<?php 

            if(isset($_POST['cep']) && !empty($_POST['cep'])){
                $cep = $_POST['cep'];
                 $resultado = file_get_contents("http://viacep.com.br/ws/$cep/json/");
        
                $dadosEndereco = json_decode($resultado, true);
            }else{
        
                header("location:buscar-endereco.php"); 
                exit;
            }       

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do CEP</title>
</head>
    <body>
        <h1>Dados do endereço</h1>


        <hr>

        <p>CEP: <?=$dadosEndereco['cep'] ?></p>
        <p>Logradouro: <?=$dadosEndereco['logradouro'] ?></p>
        <p>Bairro: <?=$dadosEndereco['bairro'] ?></p>
        <p>Cidade: <?=$dadosEndereco['localidade'] ?></p>
        <p>Estado: <?=$dadosEndereco['uf'] ?></p>
    </body>
</html> 