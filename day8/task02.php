<?php

function dog_bark(int $woof_nb){

    $display = "";
    
    if($woof_nb > 0){
        for($i = 1; $i <= $woof_nb; $i++){
            if($i == 1){
                $display = "woof";
            }else{
                $display .= " woof";
            }
        }
    }
    echo $display . "\n";
}