<?php
require './Database/mysql.php';

spl_autoload_register(function ($class_name) {
    $p = str_replace('\\', '/', $class_name);
    include $p . '.php';
});



require_once 'main.php';



?>










































?>