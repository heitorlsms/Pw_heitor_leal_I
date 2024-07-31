<?php
    $array=[1, 2, 3, 4];
    function check(array $arr, $num){
        
        return in_array($num, $arr);
    }
if(in_array($num, $array, true)){
    echo $num ."encontrado na array";
}
else{
    echo $num."Não foi encontrado na array.";
}