<?php
spl_autoload_register('myAutoLoader');
function myAutoLoader($className){
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if(strpos($url,'includes') !== false){
        $path='';
    }else{
        $path='';
    }
    $extension = '.classes.php';
    require_once $path.strtolower($className).$extension;
}
?>