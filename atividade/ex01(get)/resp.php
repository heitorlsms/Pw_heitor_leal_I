
        <?php
            if(isset($_GET['num1']) && isset($_GET['num2'])) {
            $num1=$_GET['num1'];
            $num2 = $_GET['num2'];

            $soma= $num1 + $num2;
            $sub= $num1 - $num2;
            $mul= $num1 * $num2;
            
            if($num2 != 0){
                $div=$num1/$num2;
            } else {
                $div ="Divisão por zero não é possível.";
            }
            
            echo "Soma: $soma<br>";
        
            echo "Subtração: $subtracao<br>";
        
            echo "Multiplicação: $multiplicacao<br>";

            echo "Divisão: $divisao<br>";
            } else {
                echo "Por favor, insira valores para os dois números.";
            }
        ?>
    


