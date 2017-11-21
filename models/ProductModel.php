<?php

class ProductModel {

    public static function getList() {
        $db = new Database();
        $sql = "SELECT * FROM produits ORDER BY date_creation DESC";
        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_CLASS, "ProductModel");
        return $result->fetchAll();
    }

    public static function getProductById($id) {
        $db = new Database();
        $sql = "SELECT id, nom, description, prix, image, DATE_FORMAT(date_creation, '%d/%m/%Y à %Hh%i') AS date 
                FROM produits WHERE produits.id = :id";
        $result = $db->prepare($sql);
        $result->setFetchMode(PDO::FETCH_CLASS, "ProductModel");
        $result->execute(array(":id" => $id));
        return $result->fetch();
    }

    public static function addProduct($nom, $description, $prix, $image) {
        $db = new Database();
        $sql = "INSERT INTO produits (nom, description, prix, image, date_creation) 
                VALUES (:nom, :description, :prix, :image, :date)";
        $add = $db->prepare($sql);
        if ($add->execute(
            array(
                ":nom" => $nom,
                ":description" => $description,
                ":prix" => intval($prix),
                ":image" => $image,
                ":date" => date('Y-m-d H:i:s')
            )
        )) 
        {
            return "Le produit a bien été ajouté !";
        } else {
            return "Erreur, le produit n'a pu être ajouté !";
        }
    }

}