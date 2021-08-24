<?php
define("BASE_URL", "127.0.0.1/pj_be1/pj_be");

include_once './app/config/config.php';

spl_autoload_register(function($className) {
    include_once './app/models/'.$className . '.php';
});

include_once './app/controllers/Controllers.php';