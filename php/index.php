<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="foo.css"><link rel="stylesheet" href="foo.php">
    <title>Document</title>
</head>

<body>
    
    <form action="foo.php" method="post">
        Nome: <input type="text" name="nome" /><br />
        nome de usuário: <input type="text" name="username" /><br />
        cpf: <input type="number" name="cpf" /><br />
        Email: <input type="email" name="email" /><br/>
        data de nascimento: <input type="date" name="date"/><br/>
        <label>Sexo:</label>
            <select name="sexo">
                <option >Selecione o sexo</option>
                <option >Masculino</option>
                <option >Feminino</option>
                <option >Outros</option>
            </select><br/>
        endereço: <input type="text" name="endereco"/><br/>   
        <input type="submit" value="Me aperte!" />
    </form>
    
</body>
</html>