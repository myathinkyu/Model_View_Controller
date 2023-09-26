<?php

$classname = "home";
$methodName = "index";
$params = [];

$url = isset($_GET['url']) ? rtrim($_GET['url'],'/') : '';

$url = explode("/",$url);

if(!empty($url[0])){
    if(file_exists($url[0].".php")){
        $classname = $url[0];
    }
}

require_once ($classname). ".php";
        $classname = new $classname;


if(!empty($url[1])){
    if(method_exists($classname,$url[1])){
        $methodName = $url[1];
    }
}

call_user_func([$classname, $methodName], $params);


echo "<br><br><br><br><br><hr><pre>" .print_r($url,true). "</pre>";





?>