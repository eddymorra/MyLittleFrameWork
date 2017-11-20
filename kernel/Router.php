<?php

class Router {

    public static function analyze($query) {
        $datas = array(
            "controller" => "Products",
            "params" => array()
        );

        $partsQuery = explode("/", $query);

        if($partsQuery[0] == "") {
            $datas["controller"] = "Products";
        } elseif ($partsQuery[0] == "product") {
            $datas["controller"] = "Product";
            $datas["params"]["id"] = $partsQuery[1];
        } elseif ($partsQuery[0] == "add") {
            $datas["controller"] = "AddProduct";
        } elseif ($partsQuery[0] == "contact") {
            $datas["controller"] = "Contact";
        }

        return $datas;
    }

}