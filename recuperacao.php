<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Recuperação</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Resultado da Recuperação</h1>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $media = $_POST['media'];
            $notaRecuperacao = $_POST['notaRecuperacao'];

            $mediaFinal = ($media + $notaRecuperacao);

            echo "<h2 class='text-center'>Média Final: " . number_format($mediaFinal, 2) . "</h2>";

            if ($mediaFinal >= 10) {
                echo "<h2 class='text-center'>Aluno Aprovado!</h2>";
            } else {
                echo "<h2 class='text-center'>Aluno Reprovado!</h2>";
            }
        }
        ?>

        <div class="text-center mt-4">
            <a href="index.html" class="btn btn-secondary">Menu</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
