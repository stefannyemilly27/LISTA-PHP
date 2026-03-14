<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão em real</title>
</head>
<body>
    <h1>Conversão em real</h1>
    <h2>Elaborar um algoritmo que efetue a apresentação do valor da conversão em real (R$) de um valor lido em dólar (US$).
O algoritmo deverá solicitar o valor da cotação do dólar e também a quantidade de dólares disponíveis com o usuário.</h2>


<form action="" method="GET">
<label>Digite o valor da cotação em dólar:</label>
<input type="number" name="cotacao" step="any" required><br><br>

<label>Digite a quantidade de dólares:</label>
<input type="number" name="quantidade" step="any" required><br><br>

<button type="submit">converter</button>
</form>


<?php
if (isset($_GET['cotacao']) && isset($_GET['quantidade'])){
    $cotacao = (float)$_GET['cotacao'];
    $quantidade = (float)$_GET['quantidade'];

    $real = $cotacao * $quantidade;

    echo "<br><hr>";
    echo "<h2>Valor da cotação: $cotacao</h2>";
    echo "<h2>Quantidade em dólares: $quantidade</h2>";
    echo "<h2>Valor em real: $real</h2>";

}
?>
</body>
</html>