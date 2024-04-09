<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultados3</title>
</head>
<body>
    <?php 

        $nome=$_POST['nome'];
        $idade=$_POST['idade'];
        $senha=$_POST['senha'];
        $profi=$_POST['profissão'];
        $desc=$_POST['descricao'];

        echo "<p>Nome:$nome</p>";
        echo "<p>Idade:$idade</p>";
        echo "<p>Senha:$senha</p>";
        echo "<p>Profissão:$profi</p>";
        echo "<p>Descrição:$desc</p>";

    ?>
</body>
</html>