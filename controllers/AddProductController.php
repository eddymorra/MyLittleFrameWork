<?php

class AddProductController extends Controller {

    public function run($params) {
        if($_POST) {
            switch ($_POST['image']) {
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

            $traitement = ProductModel::addProduct($_POST['name'], $_POST['description'], $_POST['price'], $image);
            $message = $traitement;
        }

        $content = "AddProduct";
        require(ROOT.'/views/layout.php');
    }

}