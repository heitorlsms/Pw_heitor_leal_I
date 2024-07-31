<?php
    $array=[1, 2, 3, 4, 5];
    function ultimo_item($array) {
        return end($array);
    }
    $ultimo=ultimo_item($array);
    echo "O ultimo item é:". $ultimo;
?>