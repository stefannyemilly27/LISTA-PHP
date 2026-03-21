<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acréscimo</title>
</head>
<body>
    <h1>Acréscimo</h1>
    <h2>Faça um algoritmo que receba o preço de custo de um produto e mostre o valor de venda. Sabe-se que o preço de
custo receberá um acréscimo de acordo com um percentual informado pelo usuário.</h2>


<form action="" method="GET">
<label>Digite o preço de custo:</label>
<input type="number" name="custo" step="any" required><br><br>

<label>Digite o percentual de acréscimo:</label>
<input type="number" name="acrescimo" step="any" required><br><br>

<button type="submit">calcular</button>
</form>
    

<?php
if (isset($_GET['custo']) && isset($_GET['acrescimo'])){
    $custo = (float)$_GET['custo'];
    $acrescimo = (float)$_GET['acrescimo'];

    $valorfinal = $custo + ($custo * $acrescimo / 100);  

    echo "<br><hr>";
    echo "<h2>Valor de venda: R$ $valorfinal</h2>";
}
?>
</body>
</html>