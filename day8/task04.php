<?php

function calc(string $operator , int $nbr1 , int $nbr2){

    if($operator == "+"|| $operator == "-"|| $operator == "*"|| $operator == "/"|| $operator == "%"){
        if($operator == "/" &&  $nbr2 == 0){
            return "Cannot divide by 0";
        }else if($operator == "%" &&  $nbr2 == 0){
            return "Cannot modulo by 0";
        }else if($operator == "+"){
            return $nbr1 + $nbr2;
        }else if($operator == "-"){
            return $nbr1 - $nbr2;
        }else if($operator == "*"){
            return $nbr1 * $nbr2;
        }else if($operator == "/"){
            return $nbr1 / $nbr2;
        }else if($operator == "%"){
            return $nbr1 % $nbr2;
        }
    }else{
        return "Unknown operator";
    }

}
