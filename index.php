<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .container{
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

    </style>
    <title>desafio emprego</title>
    
</head>
    <body>
        <div class="container">
            <div class="wrapper">
                <div><h3>Desafio nº linhas - triangulo </h3></div>
                <div>
                    <form method="post" action="resultado.php">
                        <label for="nr_linhas">Digite o número de linhas que o triangulo deve ter!</label>
                        <input id="nr_linhas" name="nr_linhas" type="number">
                        <button type="submit">Criar triangulo!</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
