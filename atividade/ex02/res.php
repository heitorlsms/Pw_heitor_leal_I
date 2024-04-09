<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultados2</title>
</head>
<body>
<?php 
    
    $genero = $_POST['genero'];
    echo "<p>Gênero selecionado: $genero</p>";
    
    echo "<h1>Idiomas selecionados:</h1>";
    if(isset($_POST['ing'])) {
        echo "<p>Inglês</p>";
    }
    if(isset($_POST['esp'])) {
        echo "<p>Espanhol</p>";
    }
    if(isset($_POST['fran'])) {
        echo "<p>Francês</p>";
    }
    
?>
</body>
</html>