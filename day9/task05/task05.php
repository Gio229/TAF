<?php

function form_is_submitted(){
    if(isset($_POST['submit'])){
        return true;
    }else{
        return false;
    }

}

function whoami(){

    if(empty($_POST["name"]) && empty($_POST["age"])){
        echo "I want to be your friend. Tell me about you. ";
        if(!empty($_POST["curriculum"])){
            echo "I’m a student of" . $_POST["curriculum"] . ". ";
        }
    }else if(empty($_POST["name"])){
        echo "Hi, I have no name and I’m " . $_POST["age"] . " years old. ";
        if(!empty($_POST["curriculum"])){
            echo "I’m a student of" . $_POST["curriculum"] . ". ";
        }
    }else if(empty($_POST["age"])){
        echo "Hi, I’m " . $_POST["name"] . ".";
        if(!empty($_POST["curriculum"])){
            echo "I’m a student of" . $_POST["curriculum"] . ". ";
        }
    }else{
        echo "Hi, my name is " . $_POST["name"] . " and I’m " . $_POST["age"]  . " years old. ";
        if(!empty($_POST["curriculum"])){
            echo "I’m a student of " . $_POST["curriculum"] . ".";
        }
    }

}