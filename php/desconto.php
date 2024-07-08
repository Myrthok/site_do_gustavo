<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Desconto</title>
</head>
<body>
    <h2>Calculadora de Desconto</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Valor do Produto: <input type="text" name="valor"><br><br>
        <input type="submit" name="submit" value="Calcular Desconto">
    </form>

    <?php
    // Verifica se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém o valor do produto
        $valorProduto = $_POST["valor"];

        // Verifica se o valor do produto foi preenchido corretamente
        if (!empty($valorProduto)) {
            // Converte o valor do produto para float
            $valorProduto = floatval($valorProduto);

            // Calcula o valor do desconto
            $desconto = $valorProduto * 0.07;

            // Calcula o valor com o desconto aplicado
            $valorComDesconto = $valorProduto - $desconto;

            // Exibe o resultado
            echo "<h3>Resultado</h3>";
            echo "Valor do Produto: R$ " . number_format($valorProduto, 2, ',', '.') . "<br>";
            echo "Valor do Desconto (7%): R$ " . number_format($desconto, 2, ',', '.') . "<br>";
            echo "Valor com Desconto: R$ " . number_format($valorComDesconto, 2, ',', '.');
        } else {
            // Caso o valor do produto esteja vazio
            echo "<p style='color: red;'>Por favor, preencha o valor do produto.</p>";
        }
    }
    ?>
</body>
</html>
