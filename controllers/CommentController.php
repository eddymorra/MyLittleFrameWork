<?php

class CommentController {

    static public function getCommentsByIdProduct($id_product) {
        return CommentModel::getCommentsByIdProduct($id_product);
    }

    static public function addComment($id_product, $pseudo, $comment) {
        CommentModel::addComment($id_product, $pseudo, $comment);
        header("Location: http://localhost/myframework/product/".$id_product);
    }

}