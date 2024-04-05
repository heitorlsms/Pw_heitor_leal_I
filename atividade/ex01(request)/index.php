<?php 
       $num1=$_REQUEST['num1'];
       $num2 = $_REQUEST['num2'];

       $soma=$num1+$num2;
       $sub=$num1-$num2;
       $mul=$num1*$num2;
       $div=$num1/$num2;

       echo "Soma: $soma<br>";
   
       echo "Subtração: $subtracao<br>";
   
       echo "Multiplicação: $multiplicacao<br>";

       echo "Divisão: $divisao<br>";
?>