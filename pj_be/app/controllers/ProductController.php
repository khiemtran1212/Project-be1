<?php
namespace App\Controllers;

class ProductController{

    function getProduct(){
        include_once ROOT_URL. '/app/views/blog-post-list.php';
    }

    function getProductById($id){
        echo $id;
    }

}