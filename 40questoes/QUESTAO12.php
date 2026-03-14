<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custo</title>
</head>
<body>
    <h1>Custo</h1>
    <h2>O custo ao consumidor de um carro novo é a soma do custo de fábrica com a percentagem do distribuidor e dos
impostos (aplicados, primeiro os impostos sobre o custo de fábrica, e depois a percentagem do distribuidor sobre o
resultado). Supondo que a percentagem do distribuidor seja de 28% e os impostos 45%. Escrever um algoritmo que
leia o custo de fábrica de um carro e informe o custo ao consumidor do mesmo.</h2>


<form action="" method="GET">
<label>Digite o custo de fábrica do carro:</label>
<input type="number" name="fabrica" step="any" required><br><br>

<button type="submit">custo</button>
</form>


<?php
if (isset($_GET['fabrica'])){
    $fabrica = (float)$_GET['fabrica'];

    $impostos = 0.45;
    $distribuidor = 0.28;

    $custo = $fabrica + ($fabrica * $impostos);
    $custofabrica = $custo;

    $resultado = $custofabrica + ($custofabrica * $distribuidor);
    $custototal = $resultado;

    echo "<br><hr>";
    echo "<h2>Valor de fábrica: R$ $fabrica</h2>";
    echo "<h2>Custo total ao consumidor: R$ $custototal</h2>";

}
?>
</body>
</html>