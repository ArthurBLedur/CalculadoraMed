<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Média</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Resultado da Média</h1>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $nota3 = $_POST['nota3'];
            $nota4 = $_POST['nota4'];

            $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

            echo "<h2 class='text-center'>Média: " . number_format($media, 2) . "</h2>";
            
            if ($media > 9) {
                $conceito = "A";
                $mensagem = "Aprovado com Louvor";
            } elseif ($media > 7) {
                $conceito = "B";
                $mensagem = "Aluno Aprovado";
            } elseif ($media > 4) {
                $conceito = "C";
                $mensagem = "Recuperação, sua chance de passar";
                echo "<h2 class='text-center'>" . $conceito . "</h2>";
                echo "<h2 class='text-center'>" . $mensagem . "</h2>";
                echo "<h3 class='text-center'>Informe a nota da recuperação:</h3>";
                echo "<form method='post' action='recuperacao.php'>";
                echo "<input type='hidden' name='media' value='" . $media . "'>";
                echo "<div class='form-group'>";
                echo "<input type='number' name='notaRecuperacao' class='form-control' required max='10'>";
                echo "</div>";
                echo "<button type='submit' class='btn btn-success'>Calcular</button>";
                echo "</form>";
                exit;
            } else {
                $conceito = "D";
                $mensagem = "Poxa vida, vamos tentar novamente ano que vem";
            }

            if ($conceito == "A" || $conceito == "B" || $conceito == "D") {
                echo "<h2 class='text-center'>" . $conceito . "</h2>";
                echo "<h2 class='text-center'>" . $mensagem . "</h2>";
            }
        }
        ?>

        <div class="text-center mt-4">
            <a href="index.html" class="btn btn-secondary">Voltar</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
