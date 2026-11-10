<?php
    $n=50;
    $arreglo=[];
    for($i=0; $i<$n; $i++){
        $arreglo[$i]=rand(0,100);
    }
    echo "<h3>Arreglo impreso:</h3>";
    for($i=0; $i<$n; $i++){
        echo $arreglo[$i]. ", ";
    }
?>