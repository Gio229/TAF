<?php

function dynamic_body(){

    if($_GET["page"] == "home"){
        return include("home.html");
    }else if($_GET["page"] == "php"){
        return include("php.html");
    }else if($_GET["page"] == "sql"){
        return include("sql.html");
    }else{
        return '<h1>Unknown page</h1>';
    }

}