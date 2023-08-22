<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de senha</title>

    <style>

        .boxSenha{
            border: solid 1px #cccccc;
            display: inline-block;
            padding: 20px;
            width: 50px;
            background-color: #fbec5d;
            margin: 10px;
            font-size: 20px;
            font-weight: bold;
        }

    </style>
</head>
    <body>
        <h1>Gerador de senha</h1>

        <form action="gerador-senha.php" method="get">

            <label for="qtdeSenha">Quantidades de senhas</label> <br>
            <input type="text" name="qtdeSenha" id=""> <br>
            <button type="submit">Gerar</button>
            <a href="gerador-senha.php">Cancelar senhas</a>

        </form>

            <hr>
            
        
            

            <?php if(isset($_GET['qtdeSenha'])): ?>
                

                <?php for($i = 0; $i < $_GET['qtdeSenha']; $i++): ?>

                    <div class="boxSenha">
                        <?= $i ?>
                    </div>

                <?php endfor; ?>

            <?php endif; ?>

            <p>Copyright &copy; <?=date("Y") ?> - Todos os direitos são reservados</p>
    </body>
</html>