<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores Trocados</title>
</head>
<body>
    <h1>Valores Trocados</h1>
    <h2>Ler dois valores para as variáveis A e B, e efetuar as trocas dos valores de forma que a variável A passe a possuir o
valor da variável B e a variável B passe a possuir o valor da variável A. Apresentar os valores trocados.</h2>


<form action="" method="GET">
<label>Digite o valor A:</label>
<input type="number" name="a" step="any" required><br><br>

<label>Digite o valor B:</label>
<input type="number" name="b" step="any" required><br><br>

<button type="submit">inverter</button>
</form>


<?php
if (isset($_GET['a']) && isset($_GET['b'])){
$a = (float)$_GET['a'];
$b = (float)$_GET['b'];

$troca = $a;
$a = $b;
$b = $troca;

echo "<br><hr>";
echo "<h2>Valor A: $a</h2>";
echo "<h2>Valor B: $b</h2>";

}
?>
</body>
</html>