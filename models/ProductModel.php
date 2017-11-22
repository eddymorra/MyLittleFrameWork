<?php

class ProductModel {

    // Requête qui renvoie la liste de tout les produits.
    public static function getList() {
        $db = new Database();
        $sql = "SELECT * FROM produits ORDER BY date_creation DESC";
        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_CLASS, "ProductModel");
        return $result->fetchAll();
    }

    // Requête qui renvoie un produit par son ID.
    public static function getProductById($id) {
        $db = new Database();
        $sql = "SELECT id, nom, description, prix, image, DATE_FORMAT(date_creation, '%d/%m/%Y à %Hh%i') AS date 
                FROM produits WHERE produits.id = :id";
        $result = $db->prepare($sql);
        $result->setFetchMode(PDO::FETCH_CLASS, "ProductModel");
        $result->execute(array(":id" => $id));
        return $result->fetch();
    }

    // Requête qui ajoute un nouveau produit.
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

    // Requête qui modifie un produit retrouvé par son ID.
    public static function editProduct($id, $nom, $description, $prix, $image) {
        $db = new Database();
        $sql = "UPDATE produits 
                SET nom = :nom,
                description = :description,
                prix = :prix,
                image = :image
                WHERE id = :id";
        $edit = $db->prepare($sql);
        if ($edit->execute(
            array(
                ":nom" => $nom,
                ":description" => $description,
                ":prix" => intval($prix),
                ":image" => $image,
                ":id" => $id
            )
        )) 
        {
            return "Le produit a bien été modifié !";
        } else {
            return "Erreur, le produit n'a pu être modifié !";
        }
    }

}