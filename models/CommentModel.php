<?php

class CommentModel {

    public static function getCommentsByIdProduct($id_product) {
        $db = new Database();
        $sql = "SELECT id, pseudo, commentaire, DATE_FORMAT(date, '%d/%m/%Y à %Hh%i') AS date FROM commentaires WHERE id_produit = :idprod ORDER BY date";
        $result = $db->prepare($sql);
        $result->setFetchMode(PDO::FETCH_CLASS, "CommentModel");
        $result->execute(array(":idprod" => $id_product));
        return $result->fetchAll();
    }

    public static function addComment($id_product, $pseudo, $comment) {
        $db = new Database();
        $sql = "INSERT INTO commentaires (id_produit, pseudo, commentaire, date) 
                VALUES (:idprod, :pseudo, :commentaire, :date)";
        $add = $db->prepare($sql);
        $add->execute(array(
            ":idprod" => $id_product,
            ":pseudo" => $pseudo,
            ":commentaire" => $comment,
            ":date" => date('Y-m-d H:i:s')
        ));
    }

}