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
dog_bark(3);
dog_bark(-42);
dog_bark(1);
dog_bark(2);