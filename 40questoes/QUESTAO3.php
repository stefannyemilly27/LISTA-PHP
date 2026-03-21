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

    <button type="submit">calcular</button>
</form>


<?php
if(isset($_GET['combustivel']) && isset ($_GET['distancia'])){
    $combustivel = (float)$_GET['combustivel'];
    $distancia = (float)$_GET['distancia'];
if ($combustivel == 0) {
    echo "<h2>Não é possível dividir por zero</h2>";
} else {
    $media = $distancia / $combustivel;
    echo "<h2>Consumo do automóvel: $media km/L</h2>";
}
}


?>
</body>
</html>