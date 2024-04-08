
<?php 
    if ($_SERVER["REQUEST_METHOD"] == "REQUEST"){
        $altura= $_REQUEST['altura'];

        $peso_ideal = 72.7*$altura-58;

        echo "<p> Seu peso ideal é:". round($peso_ideal, 2) . " kg.";
    }
    else{
        echo "A altura não recebida.";
    }
?>