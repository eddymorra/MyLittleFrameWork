<?php

class ProductsController extends Controller {

    public function run($params) {
        $productsList = ProductModel::getList();
        
        $content = "ProductsList";
        require(ROOT.'/views/layout.php');
    }

}