<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Verificação de Aceitação</title>
</head>
<body>
    <h2>Verificação de Aceitação</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Nome: <input type="text" name="nome"><br><br>
        Sexo:
        <input type="radio" name="sexo" value="Feminino"> Feminino
        <input type="radio" name="sexo" value="Masculino"> Masculino<br><br>
        Idade: <input type="number" name="idade"><br><br>
        <input type="submit" name="submit" value="Verificar Aceitação">
    </form>

    <?php
    // Verifica se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os valores do formulário
        $nome = $_POST["nome"];
        $sexo = isset($_POST["sexo"]) ? $_POST["sexo"] : "";
        $idade = $_POST["idade"];

        // Verifica se todos os campos foram preenchidos corretamente
        if (!empty($nome) && !empty($sexo) && !empty($idade)) {
            // Converte a idade para inteiro
            $idade = intval($idade);

            // Verifica as condições para imprimir a mensagem
            if ($sexo == "Feminino" && $idade < 25) {
                echo "<h3>$nome - ACEITA</h3>";
            } else {
                echo "<h3>$nome - NÃO ACEITA</h3>";
            } 
        } else {
            // Caso algum campo esteja vazio
            echo "<p style='color: red;'>Por favor, preencha todos os campos.</p>";
        }
    }
    ?>
</body>
</html>
