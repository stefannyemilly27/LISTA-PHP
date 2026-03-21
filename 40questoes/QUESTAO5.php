<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Aritmética</title>
</head>
<body>
    <h1>Média Aritmética</h1>
    <h2>Escrever um algoritmo que leia o nome de um aluno e as notas das três provas que ele obteve no semestre. No final
informar o nome do aluno e a sua média (aritmética).</h2>


<form action="" method="GET">
<label>Digite o nome do aluno:</label>
<input type="text" name="nome" required><br><br>

<label>Digite sua primeira nota:</label>
<input type="number" name="n1" step="any" required><br><br>

<label>Digite o seu segundo número:</label>
<input type="number" name="n2" step="any" required><br><br>

<label>Digite o seu terceiro número:</label>
<input type="number" name="n3" step="any" required><br><br>

<button type="submit">calcular</button>
</form>


<?php
if (isset($_GET['nome'])&& isset($_GET['n1'])&& isset($_GET['n2'])&& isset($_GET['n3'])){
    $nome = $_GET['nome'];
    $n1 = (float)$_GET['n1'];
    $n2 = (float)$_GET['n2'];
    $n3 = (float)$_GET['n3'];
    $soma = $n1 + $n2 + $n3;
    $media = $soma / 3; 

    echo "<br><hr>";
    echo "<h2>Nome do aluno: $nome</h2>";
    echo "<h2>Média:"  . number_format( $media, 1, ',', '.') . "</h2>";  /*arredonda, simplifica*/
}
?>
</body>
</html>