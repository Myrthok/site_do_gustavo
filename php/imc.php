<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
</head>
<body>
    <h2>Calculadora de IMC</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Altura (metros): <input type="text" name="altura"><br><br>
        Peso (kg): <input type="text" name="peso"><br><br>
        <input type="submit" name="submit" value="Calcular IMC">
    </form>

    <?php
    // Verifica se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os valores do formulário
        $altura = $_POST["altura"];
        $peso = $_POST["peso"];

        // Valida se altura e peso foram preenchidos corretamente
        if (!empty($altura) && !empty($peso)) {
            // Converte altura para float e peso para float
            $altura = floatval($altura);
            $peso = floatval($peso);

            // Calcula o IMC
            $imc = $peso / ($altura * $altura);

            // Exibe o resultado
            echo "<h3>Resultado</h3>";
            echo "Altura: " . $altura . " metros<br>";
            echo "Peso: " . $peso . " kg<br>";
            echo "IMC: " . number_format($imc, 2);

            // Interpretação do IMC
            echo "<p>";
            if ($imc < 18.5) {
                echo "tá emagrecendo do jeito errado otário(abaixo do peso)";
            } elseif ($imc < 24.9) {
                echo "Faça bullying com que está gordo ou magro(normal)";
            } elseif ($imc < 29.9) {
                echo "alerta, jajá você não vai conseguir ver seu pênis(sobrepeso)";
            } elseif ($imc < 34.9) {
                echo "parabéns você está apto para participar do quilos mortais(obesidade grau I)";
            } elseif ($imc < 39.9) {
                echo "Consulte o Dr. Nowazardan(obesidade grau II)";
            } else {
                echo "Tá parecendo a Thais Carla(obesidade mórbida)";
            }
            echo "</p>";
        } else {
            // Caso altura ou peso estejam vazios
            echo "<p style='color: red;'>Por favor, preencha todos os campos.</p>";
        }
    }
    ?>
</body>
</html>
