<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultados5</title>
</head>
<body>
    <?php 
    
        $sal=$_REQUEST['salario'];
        $total=$_REQUEST['total'];

        $comissao=($total*4)/100;
        $saltot=$comissao+$sal;

        echo "<p>Comissão:$comissao</p>";
        echo "<p>Salário total:$saltot</p>";

    ?>
</body>
</html>