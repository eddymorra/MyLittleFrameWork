<?php

class ProductController extends Controller {

    // Fonction qui renvoie la liste de tout les produits.
    public function getProducts() {
        $products = ProductModel::getList();
        
        $content = "List";
        require(ROOT.'/views/layout.php');
    }

    // Fonction qui renvoie un produit grâce à son ID.
    public function getProductById($params) {
        $product = ProductModel::getProductById($params["id"]);
        if ($product != null) {
            if ($_POST && !empty($_POST["pseudo"]) && !empty($_POST["comment"])) {
                CommentController::addComment($params["id"], $_POST["pseudo"], $_POST["comment"]);
            } else {
                $comments = CommentController::getCommentsByIdProduct($params["id"]);
                $content = "Product";
                require(ROOT.'/views/layout.php');
            }
        } else {
            echo "Ce produit n'existe pas !";
        }
    }

    // Fonction qui ajoute un nouveau produit.
    public function addProduct() {
        if ($_POST && !empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['price'])) {
            $image = $this->tradImage($_POST['image']);
            $traitement = ProductModel::addProduct($_POST['name'], $_POST['description'], $_POST['price'], $image);
            $message = $traitement;
        }

        $content = "AddProduct";
        require(ROOT.'/views/layout.php');
    }

    // Fonction qui modifie un produit identifié par son ID.
    public function editProduct($params) {
        $product = ProductModel::getProductById($params["id"]);

        if ($_POST && !empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['price'])) {
            $image = $this->tradImage($_POST['image']);
            $traitement = ProductModel::editProduct($params["id"], $_POST['name'], $_POST['description'], $_POST['price'], $image);
            $message = $traitement;
        }

        if ($product != null) {
            $content = "EditProduct";
            require(ROOT.'/views/layout.php');
        } else {
            echo "Ce produit n'existe pas !";
        }
    }

    // Fonction qui analyse le code de l'image et retourne le fichier image correspondant.
    private function tradImage($pics) {
        switch ($pics) {
            case '0': $image = "developer.jpeg";
                break;
            case '1': $image = "javascript.png";
                break;
            case '2': $image = "php.png";
                break;
            case '3': $image = "angular.jpg";
                break;
            case '4': $image = "symfony.png";
                break;
            case '5': $image = "github.png";
                break;
            case '6': $image = "nodejs.jpg";
                break;
            case '7': $image = "react.jpeg";
                break;
            case '8': $image = "vuejs.png";
                break;
            default: $image = "nophoto.png";
                break;
        }
        return $image;
    }

}