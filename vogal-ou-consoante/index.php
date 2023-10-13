<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vogal ou Fake?</title>
</head>

<body>
	<form action="index" method="get">
		<input type="text" name="letra">
		<button type = "submit">ENVIAR</button>
	</form>
	
	<?php
    /*
	 * Escreva o código PHP que recebe do usuário uma
     * letra (sempre será letra) (maiúsculas e/ou
	 * minúsculas), e imprima na tela se a letra
     * informada é uma vogal ou uma consoante
	 */
    $letra = strtolower($_GET["letra"]);

    if ($letra == "a" || $letra == "e" || $letra == "i" ||$letra == "o" || $letra == "u") {
        echo "É VOGAL :DDD";
    }
    else {
        echo "É FAKE :ddd";
    }
    ?>
</body>

</html>
