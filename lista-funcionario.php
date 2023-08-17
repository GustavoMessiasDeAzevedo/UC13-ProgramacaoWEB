<?php

    include "funcionario.php"


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Funcionários</title>
</head>

<body>
    <h1>Lista de Funcionários</h1>

    <table border="1">

        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Ação</th>
            </tr>
        </thead>


        <tbody>

            <?php foreach($listaFuncionarios as $funcionarios):  ?>
                <tr>
                    <td><?=$funcionarios["id"]?></td>
                    <td><?=$funcionarios["nome"]?></td>
                    <td><?=$funcionarios["email"]?></td>
                    <td><?=$funcionarios["telefone"]?></td>
                    <td>Editar Visualizar Excluir</td>
                </tr>

            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5">Foi encontrado 5 funcionários cadastrados</td>
            </tr>   
        </tfoot>
      
    </table>
</body>

</html>