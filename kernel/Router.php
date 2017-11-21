<?php

class Router {

    public static function analyze($query) {
        // Valeur par défaut de la route
        $datas = array(
            "controller" => "index",
            "action" => "run",
            "params" => array()
        );

        $partsQuery = explode("/", $query);

        /////////////////////////////////////////////////////////
        // ROUTES
        /////////////////////////////////////////////////////////
        // Page de départ -> liste de produits
        if($partsQuery[0] == "") {
            $datas["controller"] = "product";
            $datas["action"] = "getProducts";
        } 
        // Page Product -> Détail d'un produit (par l'id)
        elseif ($partsQuery[0] == "product") {
            $datas["controller"] = "product";
            $datas["action"] = "getProductById";
            $datas["params"]["id"] = $partsQuery[1];
        } 
        // Page Add -> Ajouter un produit
        elseif ($partsQuery[0] == "add-product") {
            $datas["controller"] = "product";
            $datas["action"] = "addProduct";
        } 
        // Page Edit -> Modifier un produit
        elseif ($partsQuery[0] == "edit-product") {
            $datas["controller"] = "product";
            $datas["action"] = "editProduct";
            $datas["params"]["id"] = $partsQuery[1];
        } 
        // Page Contact -> Formulaire de contact
        elseif ($partsQuery[0] == "contact") {
            $datas["controller"] = "contact";
        }
        /////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////

        return $datas;
    }

}