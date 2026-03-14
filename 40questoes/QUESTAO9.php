<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poupança</title>
</head>
<body>
    <h1>Poupança</h1>
    <h2>Faça um algoritmo que receba um valor que foi depositado e exiba o valor com rendimento após um mês.
 Considere fixo o juro da poupança em 0,70% a. m.</h2>


<form action="" method="GET">
<label>Digite o valor depositado:</label>
<input type="number" name="deposito" step="any" required><br><br>

<button type="submit">rendimento</button>
</form>


<?php
if (isset($_GET['deposito'])){
    $deposito = (float)$_GET['deposito'];

    $rendimento = $deposito * 0.007;
    $final = $deposito + $rendimento;

    echo "<br><hr>";
    echo "<h2>Valor depositado: R$ $deposito</h2>";
    echo "<h2>Rendimento: R$ $rendimento</h2>";
    echo "<h2>Valor final após 1 mês: R$ $final</h2>";


}
?>
</body>
</html>