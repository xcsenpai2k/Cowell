<?php
spl_autoload_register('Loader');

function Loader($class_name){
    $path = './class/';
    $extension = '.class.php';
    $full_path = $path.$class_name.$extension;

    include_once $full_path;
}