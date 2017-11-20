<?php

class ContactModel {

    public static function addMessageContact($nom, $email, $message) {
        $db = new Database();
        $sql = "INSERT INTO contact (nom, email, message, date) 
                VALUES (:nom, :email, :message, :date)";
        $add = $db->prepare($sql);
        if ($add->execute(
            array(
                ":nom" => $nom,
                ":email" => $email,
                ":message" => $message,
                ":date" => date('Y-m-d H:i:s')
            )
        )) 
        {
            return "Votre message a bien été envoyé !";
        } else {
            return "Erreur, le message n'a pu être envoyé !";
        }
    }

}