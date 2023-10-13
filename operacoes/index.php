<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações</title>
</head>

<body>
    <h1>Operações</h1>
    <form action="index.php" method="get">
        <div>
            <label for="n1">Insira o primeiro número:</label>
            <input type="number" name="n1">
        </div>
        <div>
            <label for="n2">Insira o segundo número:</label>
            <input type="number" name="n2">
        </div>
        <div>
            <label for="operacoes">Operação:</label><br>
            <select name="operacoes" id="operacoes">
                <option value="+">Adição</option>
                <option value="-">Subtração</option>
                <option value="*">Multiplicação</option>
                <option value="/">Divisão</option>
            </select>
        </div>
        <button type="submit">Calcular</button>
    </form>

    <?php
    /*
     * Escreva o código PHP que recebe do usuário
     * dois números e um caracter de operação
     * matemática (+, -, *, /). E imprima na tela
     * o resultado da operação (escolhida) entre
     * os números.
     */
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $operacao = $_GET["operacoes"];

    switch ($operacao) {
        case "+":
            $resultado = $n1 + $n2;
            break;
        case "-":
            $resultado = $n1 - $n2;
            break;
        case "*":
            $resultado = $n1 * $n2;
            break;
        default:
            $resultado = $n1 / $n2;
    }

    echo "<p>$n1 $operacao $n2 = $resultado</p>";
    ?>
</body>

</html>
