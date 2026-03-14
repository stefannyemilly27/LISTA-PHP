<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automóvel - média</title>
</head>
<body>
    <h1>Automóvel - média</h1>
    <h2>Escrever um algoritmo para determinar o consumo médio de um automóvel sendo fornecida a distância total
percorrida pelo automóvel e o total de combustível gasto.</h2>
<form action="" method="GET">
    <label>Digite o combustível gasto:</label>
    <input type="number" name="combustivel" step="any" required><br><br>
    <label>Digite a distância percorrida:</label>
    <input type="number" name="distancia" step="any" required><br><br>
</form>
<?php
if(isset($_GET['combustivel']) && isset ($_GET['distancia'])){
    $combustivel = (float)$_GET['combustivel'];
    $distancia = (float)$_GET['distancia'];
    $comsumo = $combustivel / $distancia;
}

echo "<h2>Consumo médio: $consumo</h2>"

?>
</body>
</html>