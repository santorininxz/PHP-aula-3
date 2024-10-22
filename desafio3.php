<!-- Desafio: Cálculo da Média de Três Valores e Verificação
O usuário deverá inserir três valores e o sistema calculará a média. Se a média for maior ou igual a 7, 
o sistema indicará que o resultado está "acima do esperado". Caso contrário, o resultado será "abaixo do esperado".
 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Média de Três Valores </title>
</head>

<body>
    <h2>Verificação de Média</h2>
    <form method="post" action="">
        <label for="nota1">Nota 1:</label>
        <input type="number" name="nota1" id="nota1" required><br>
        <label for="nota2">Nota 2:</label>
        <input type="number" name="nota2" id="nota2" required><br>
        <label for="nota3">Nota 3:</label>
        <input type="number" name="nota3" id="nota3" required><br>
        <input type="submit" value="Calcular Média">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];

        $media = ($nota1 + $nota2 + $nota3) / 2;
        echo "O aluno está " . ($media >= 7 ? "aprovado" : "reprovado") . " com média $media.";
    }
    ?>
</body>