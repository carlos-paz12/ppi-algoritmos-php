<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esse número é...</title>
</head>

<body>
    <h1>Esse número é...</h1>
    <?php
    /*
     * Escreva o código PHP que recebe do usuário um
     * número, e imprima na tela se o número informado
     * é par ou ímpar, e se é positivo ou negativo
     */
    $n = $_GET["n"];

    if ($n % 2 == 0) {

        echo "</p>Par</p>";

    } else {

        echo "</p>Impar</p>";

    }

    if ($n > 0) {

        echo "</p>Positivo</p>";

    } else if ($n < 0) {

        echo "</p>Negativo</p>";

    } else {

        echo "<p>É ZEROOOOOOOOOOOO</p>";

    }
    ?>
</body>

</html>
