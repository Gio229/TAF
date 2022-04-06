<?php

function calc_average($array){
    $length = count($array);
    $sum = 0;
    for($i = 0; $i < $length; $i++){
        $sum += $array[$i];
    }

    return round(($sum / $length), 1);
}
