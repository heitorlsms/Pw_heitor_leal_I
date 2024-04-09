<!DOCTYPE html>
<html lang="pt-br">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>resultados</title>
</head>
<body>
<?php 
       $num1=$_POST['num1'];
       $num2 = $_POST['num2'];

       $soma=$num1+$num2;
       $sub=$num1-$num2;
       $mul=$num1*$num2;
       $div=$num1/$num2;

       echo "<p>Soma: $soma<br></p>";
   
       echo "<p>Subtração: $sub<br></p>";
   
       echo "<p>Multiplicação: $mul<br></p>";

       echo "<p>Divisão: $div<br></p>";
?>
</body>
</html>