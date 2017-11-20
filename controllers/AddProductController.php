<?php

class AddProductController extends Controller {

    public function run($params) {
        $base = Controller::$base;
        
        if($_POST) {
            $traitement = ProductModel::addProduct($_POST['name'], $_POST['description'], $_POST['price']);
            $message = $traitement;
        }

        $content = "AddProduct";
        require(ROOT.'/views/layout.php');
    }

}