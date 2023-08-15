<html>
    <head>
        <title>Aula de PHP</title>
    </head>
    <body>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt non aliquam officia odio minus facilis laudantium accusamus excepturi illo culpa! Non earum voluptatum assumenda amet modi. Earum expedita maxime culpa!</p>

        <?php

            echo "Gustavo Messias";
        ?>

        <br>

        <?php
            print"Senac marilia";
        ?>

        <br>
        <!-- Comentário fora do escopo do php -->
        <?php  

        // comentário dentro do escopo


        $nomeCompleto = "Gustavo Messias";
        $idade = 40;
        $status = true;
        $salario = 1320.50;


        print $nomeCompleto." ".$idade. " ". $status. " ". $salario;
        
        echo "<br>";

        echo '$nomeCompleto $idade anos';


        $logoSenac = "https://www.sp.senac.br/o/senac-theme/images/logo_senac_default.png"

        ?>

        <img src="<?php echo $logoSenac?>" alt="Senac Marilia">
    </body>
</html>