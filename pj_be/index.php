<?php
define("BASE_URL", "C:/wamp64/www/pj_be1/pj_be/");

include_once BASE_URL . '/app/config/config.php';

spl_autoload_register(function($className) {
    include_once BASE_URL . '/app/models/'.$className . '.php';
});

include_once BASE_URL . '/app/controllers/Controllers.php';