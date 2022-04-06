<?php

function sequence(int $num){

    if(($num >= 0) && ($num <= 5)){
        if($num == 0){
            echo "1\n";
        }else if($num == 1){
            echo "1\n11";
        }else if($num == 2){
            echo "1\n11\n21\n";
        }else if($num == 3){
            echo "1\n11\n21\n1211\n";
        }else if($num == 4){
            echo "1\n11\n21\n1211\n111221\n";
        }else if($num == 5){
            echo "1\n11\n21\n1211\n111221\n312211\n";
        }
    }
    
}
