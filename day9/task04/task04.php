<?php

function whoami(){

    if(empty($_POST["name"]) && empty($_POST["age"])){
        echo "I want to be your friend. Tell me about you. ";
    }else if(empty($_POST["name"])){
        echo "Hi, I have no name and I’m " . $_POST["age"] . " years old. ";
    }else if(empty($_POST["age"])){
        echo "Hi, I’m " . $_POST["name"] . ".";
    }else{
        echo "Hi, my name is " . $_POST["name"] . " and I’m " . $_POST["age"]  . " years old.";
    }

}