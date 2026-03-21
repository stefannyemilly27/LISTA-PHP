<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatura</title>
</head>
<body>
    <h1>Temperatura</h1>
    <h2>Ler uma temperatura em graus Celsius e apresentá-la convertida em graus Fahrenheit. A fórmula de conversão é:
F = C x 1,8 + 32, sendo F a temperatura em Fahrenheit e C a temperatura em Celsius.</h2>


<form action="" method="GET">
<label>Digite a temperatura em graus Celsius:</label>
<input type="number" name="celsius" step="any" required><br><br>

<button type="submit">converter</button>
</form>


<?php
if (isset($_GET['celsius'])){
    $celsius = (float)$_GET['celsius'];

    $fahrenheit = $celsius * 1.8 + 32;

    echo "<br><hr>";
    echo "<h2>Temperatura em Celsius: $celsius °C</h2>";
    echo "<h2>Temperatura convertida para fahrenheit: $fahrenheit °F</h2>";
}
?>
</body>
</html>