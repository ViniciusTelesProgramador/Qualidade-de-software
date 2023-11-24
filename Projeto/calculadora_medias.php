<?php

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém a quantidade de alunos do formulário
    $qtdAlunos = isset($_POST['qtdAlunos']) ? (int)$_POST['qtdAlunos'] : 0;

    // Inicializa um array para armazenar as médias dos alunos
    $medias = array();

    // Loop para obter as notas de cada aluno
    for ($i = 1; $i <= $qtdAlunos; $i++) {
        $nota1 = isset($POST['nota1' . $i]) ? (float)$POST['nota1' . $i] : 0;
        $nota2 = isset($POST['nota2' . $i]) ? (float)$POST['nota2' . $i] : 0;
        $nota3 = isset($POST['nota3' . $i]) ? (float)$POST['nota3' . $i] : 0;

        // Calcula a média do aluno
        $media = ($nota1 + $nota2 + $nota3) / 3;

        // Adiciona a média ao array
        $medias[] = $media;

        // Exibe a média do aluno
        echo "Média do Aluno $i: $media<br>";
    }

    // Calcula a média da turma
    $mediaTurma = array_sum($medias) / count($medias);

    // Exibe a média da turma
    echo "<br>Média da Turma: $mediaTurma";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Médias</title>
</head>
<body>

<h1>Calculadora de Médias</h1>

<form action="" method="post">



    <?php
    // Gera campos de entrada para notas de cada aluno com base na quantidade inserida
    if ($qtdAlunos > 0) {
        for ($i = 1; $i <= $qtdAlunos; $i++) {
            echo "<h3>Aluno $i</h3>";
            echo "Nota 1: <input type='number' name='nota1_$i' step='0.1' required><br>";
            echo "Nota 2: <input type='number' name='nota2_$i' step='0.1' required><br>";
            echo "Nota 3: <input type='number' name='nota3_$i' step='0.1' required><br><br>";
        }
    }
    ?>

    <button type="submit">Calcular Médias</button>
</form>

</body>
</html>