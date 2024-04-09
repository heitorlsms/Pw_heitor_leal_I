<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultados4</title>
</head>
<body>
<?php 
    
    $altura= $_REQUEST['altura'];

    $peso_ideal = 72.7*$altura-58;

    echo "<p> Seu peso ideal é:". round($peso_ideal, 2) . " kg.</p>";

?>
</body>
</html>