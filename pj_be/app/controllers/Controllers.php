<?php
$type = '';
if(!empty($_GET['type'])){
    $type = $_GET['type'];
}

switch ($type) {
    case ' ':
        break;
    default:
        $uri = $_SERVER['REQUEST_URI'];
        include_once './app/views/index.php';
        break;
}
