<?php

class ProductController extends Controller {

    public function getProducts() {
        $products = ProductModel::getList();
        
        $content = "List";
        require(ROOT.'/views/layout.php');
    }

    public function getProductById($params) {
        $product = ProductModel::getProductById($params["id"]);
        
        $content = "Product";
        require(ROOT.'/views/layout.php');
    }

    private function tradImage($pics) {
        switch ($pics) {
            case '0':
                $image = "developer.jpeg";
                break;
            
            case '1':
                $image = "javascript.png";
                break;
            
            case '2':
                $image = "php.png";
                break;

            case '3':
                $image = "angular.jpg";
                break;
            
            case '4':
                $image = "symfony.png";
                break;
            
            case '5':
                $image = "github.png";
                break;

            case '6':
                $image = "nodejs.jpg";
                break;
            
            case '7':
                $image = "react.jpeg";
                break;
            
            case '8':
                $image = "vuejs.png";
                break;
            
            default:
                $image = "nophoto.png";
                break;
        }

        return $image;
    }

    public function addProduct() {
        if ($_POST && !empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['price'])) {
            $image = $this->tradImage($_POST['image']);
            $traitement = ProductModel::addProduct($_POST['name'], $_POST['description'], $_POST['price'], $image);
            $message = $traitement;
        }

        $content = "AddProduct";
        require(ROOT.'/views/layout.php');
    }

    public function editProduct($params) {
        $product = ProductModel::getProductById($params["id"]);

        if ($_POST && !empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['price'])) {
            $image = $this->tradImage($_POST['image']);
            $traitement = ProductModel::editProduct($params["id"], $_POST['name'], $_POST['description'], $_POST['price'], $image);
            $message = $traitement;
        }

        $content = "EditProduct";
        require(ROOT.'/views/layout.php');
    }

}