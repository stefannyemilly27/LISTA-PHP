<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor de prestação</title>
</head>
<body>
    <h1>Valor de prestação</h1>
    <h2>A Loja Mamão com Açúcar está vendendo seus produtos em 5 (cinco) prestações sem juros. Faça um algoritmo que
receba um valor de uma compra e mostre o valor das prestações.</h2>


<form action="" method="GET">
<label>Digite o valor da compra:</label>
<input type="number" name="valor" step="any" required><br><br>

<button type="submit">calcular</button>
</form>


<?php
if (isset($_GET['valor'])){
    $valor = (float)$_GET['valor'];

    $prestacao = $valor / 5;

    echo "<br><hr>";
    echo "<h2>Valor da compra: R$ $valor</h2>";
    echo "<h2>Valor das prestações: R$ $prestacao</h2>";
}
?>
</body>
</html>