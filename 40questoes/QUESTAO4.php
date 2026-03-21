<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendedor</title>
</head>
<body>
    <h1>Vendedor</h1>
    <h2>Escrever um algoritmo que leia o nome de um vendedor, o seu salário fixo e o total de vendas efetuadas por ele no
mês (em dinheiro). Sabendo que este vendedor ganha 15% de comissão sobre suas vendas efetuadas, informar o
seu nome, o salário fixo e salário no final do mês.</h2>


<form action="" method="GET">
<label>Digite o nome do vendedor:</label>
<input type="text" name="vendedor" required><br><br>

<label>Digite o salário fixo:</label>
<input type="number" name="fixo" step="any" required><br><br>

<label>Digite o total de vendas efetuadas no mês:</label>
<input type="number" name="vendas" step="any" required><br><br>

<button type="submit">calcular</button>
</form>


<?php
if (isset($_GET['vendedor']) && isset($_GET['fixo']) && isset($_GET['vendas'])) {
$vendedor = $_GET['vendedor'];
$fixo = (float)$_GET['fixo'];
$vendas = (float)$_GET['vendas'];
$comissao = $vendas*0.15;
$salario = $fixo + $comissao;

echo "<br><hr>";
echo "<h2>Nome do vendedor: $vendedor</h2>";
echo "<h2>Salário fixo: R$ $fixo</h2>";
echo "<h2>Salário final: R$ $salario</h2>";
}

?>

</body>
</html>