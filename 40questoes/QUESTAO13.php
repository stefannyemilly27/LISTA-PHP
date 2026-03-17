<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Maior que 10</h1>
    <h2>Faça um algoritmo que receba um número e mostre uma mensagem caso este número seja maior que 10.</h2>


<form action="" method="GET">
<label>Digite um número:</label>
<input type="number" name="numero" step="any" required><br><br>

<button type="submit">enviar</button>
</form>


<?php
if(isset($_GET['numero'])){
    $numero = (float)$_GET['numero'];

    if ($numero > 10){
        echo "<h2>Oii florr, seja bem-vindo(a) ao mundo tenebroso da TI</h2>";
    }
}
?>
</body>
</html>