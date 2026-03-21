<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
</head>
<body>
    <h1>Média</h1>
    <h2>Escrever um algoritmo que leia o nome e as três notas obtidas por um aluno durante o semestre. Calcular a sua
    média (aritmética), informar o nome e sua menção aprovado (media >= 7), Reprovado (media <= 5) e Recuperação
    (media entre 5.1 a 6.9).</h2>


<form action="" method="GET">
<label>Digite o nome:</label>
<input type="text" name="nome" step="any" required><br><br>

<?php
for($i = 1; $i <= 3; $i++){
    echo "Nota $i:";
    echo "<input type="number" name="nota" step="any" required><br><br>";
}
?>

<button type="submit">calcular</button>
</form>


<?php
if(isset($_GET['nome'])){
    $nome = $_GET['nome'];
    $soma = 0;

    for($i = 1; $i <= 3; $i++){
        $soma = (float)$_GET['nota'];
    }
    $media = $soma / 3;

    echo "Nome: $nome";
    echo "Média: $media";

    if($media >= 7){
        echo "<h2>Você está aprovado!!</h2>";
    } elseif($media <= 5){
        echo "<h2>Você está reprovado.</h2>";
    } else {
        echo "<h2>Você está de recuperação.</h2>";
    }
}
?>
</body>
</html>