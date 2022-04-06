<?php

function render_body($body){

    if($body == "home"){
        return include("home.html");
    }else if($body == "php"){
        return include("php.html");
    }else if($body == "sql"){
        return include("sql.html");
    }else{
        return '<h1>Unknown page</h1>';
    }

}