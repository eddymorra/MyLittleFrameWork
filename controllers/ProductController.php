<?php

class ProductController extends Controller {

    public function run($params) {
        $product = ProductModel::getProductById($params["id"]);
        
        $content = "ProductDetail";
        require(ROOT.'/views/layout.php');
    }

}