<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>estações</title>
</head>

<body>
    <?php
    /* 
     * Escreva o código PHP que recebe do usuário o
     * número de um mês do ano (1=Janeiro, 6=junho).
     * E imprima na tela o nome do mês e a estação do ano
     * (janeiro a março > Outono; Abril a junho > inverno;
     * julho a setembro > primavera; outubro a dezembro > verão)
     */
    $n = $_GET["n"];

    switch ($n) {
		case 1:
		    echo "<p>Janeiro</p>";
	        echo "<p>Outono</p>";
		    break;
		case 2:
		    echo "<p>Fevereiro</p>";
	        echo "<p>Outono</p>";
		    break;
		case 3:
			echo "<p>Março</p>";
	        echo "<p>Outono</p>";
		    break;
		case 4:
			echo "<p>Abril</p>";
	        echo "<p>Inverno</p>";
		    break;
		case 5:
			echo "<p>Maio</p>";
	        echo "<p>Inverno</p>";
		    break;
		case 6:
			echo "<p>Junho</p>";
	        echo "<p>Inverno</p>";
		    break;
		case 7:
			echo "<p>Julho</p>";
	        echo "<p>Primavera</p>";
		    break;
		case 8:
			echo "<p>Agosto</p>";
	        echo "<p>Primavera</p>";
		    break;
		case 9:
			echo "<p>Setembro</p>";
	        echo "<p>Primavera</p>";
		    break;
		case 10:
			echo "<p>Outubro</p>";
	        echo "<p>Verão</p>";
		    break;
		case 11:
			echo "<p>Novembro</p>";
	        echo "<p>Verão</p>";
		    break;
		case 12:
			echo "<p>Dezembro</p>";
	        echo "<p>Verão</p>";
		    break;
		default:
		    echo "<p>Inválido</p>";
	}
    ?>
</body>

