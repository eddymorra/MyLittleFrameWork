<?php

class ProductsController extends Controller {

    public function run($params) {
        $base = Controller::$base;

        $productsList = ProductModel::getList();
        
        $content = "ProductsList";
        require(ROOT.'/views/layout.php');
    }

}