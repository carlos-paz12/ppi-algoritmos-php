<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>passos</title>
</head>

<body>
	<form action="index" method="get">
		QUANTIDADE: <input type="text" name="qtd">
		PASSOS: <input type="text" name="passos">
		<button type="submit">ENVIAR</button>
	</form>
	
    <?php
    /* 
	 * Escreva o código PHP que recebe do usuário dois números.
     * 
	 * 
     * O primeiro número, corresponde ao número de valores que
	 * devem ser impressos. O segundo número, corresponde ao
     * "passo" entre os números.
	 * 
     * 
     * Por exemplo, se o usuário informar os números 3 e 4,
	 * devem ser impressos 3 números, sendo que a diferença de
     * um para o outro é de 4. (1, 5, 9)
	 * 
     * 
	 * Se o usuário informar os números 4 e 8 (1, 9, 17, 25)
	 */
    $num = 0;
    $qtd = $_GET["qtd"];
    $passos = $_GET["passos"];

    for ($i = 1; $i <= $qtd; $i++) {
        echo $num += $passos;
        echo " ";
		}
    ?>
</body>

</html>
