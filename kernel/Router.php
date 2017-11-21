<?php

class Router {

    public static function analyze($query) {
        $datas = array(
            "controller" => "Products",
            "params" => array()
        );

        $partsQuery = explode("/", $query);

        /////////////////////////////////////////////////////////
        // ROUTES
        /////////////////////////////////////////////////////////
        // Page de départ -> liste de produits
        if($partsQuery[0] == "") {
            $datas["controller"] = "Products";
        } 
        // Page Product -> Détail d'un produit (par l'id)
        elseif ($partsQuery[0] == "product") {
            $datas["controller"] = "Product";
            $datas["params"]["id"] = $partsQuery[1];
        } 
        // Page Add -> Ajouter un produit
        elseif ($partsQuery[0] == "add") {
            $datas["controller"] = "AddProduct";
        } 
        // Page Contact -> Formulaire de contact
        elseif ($partsQuery[0] == "contact") {
            $datas["controller"] = "Contact";
        }
        /////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////

        return $datas;
    }

}