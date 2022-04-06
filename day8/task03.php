<?php

function get_shortest($array){

    $isSort = false;
    $length = count($array);

    while(!$isSort){

        $isSort = true;
        for($i = 0; $i < ($length - 1); $i++){
            if(strlen($array[$i]) > strlen($array[$i+1])){
                $temp = $array[$i];
                $array[$i] = $array[$i+1];
                $array[$i+1] = $temp;

                $isSort = false;
            }
        }
    
    }

    return $array[0];

}