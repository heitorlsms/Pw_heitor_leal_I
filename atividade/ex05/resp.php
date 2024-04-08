<?php 
    if ($_SERVER["REQUEST_METHOD"] == "REQUEST"){
        $sal=$_REQUEST['salario'];
        $total=$_REQUEST['total'];

        $comissao=($total*4)/100;
        $saltot=$comissao+$sal;

        echo "<p>Comissão:$comissao</p>";
        echo "<p>Salário total:$saltot</p>";
    }
    else{
        echo "Erro: Os valores do formulário não enviados.";
    }
?>