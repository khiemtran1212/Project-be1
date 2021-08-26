<?php 

$router->get('/', 'HomeController@index');

$router->get('/san-pham/{id}', 'ProductController@getProductById');

$router->get('/san-pham', 'ProductController@getProduct');
