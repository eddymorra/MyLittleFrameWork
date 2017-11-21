<?php

class Database {

    protected $_db;

    public function __construct() {
        // Configuration de connexion à la base de données
        $host = "localhost";
        $db = "fwmvc";
        $user = "root";
        $pass = "test";

        $this->_db = new PDO("mysql:host=".$host.";dbname=".$db.";charset=utf8", $user, $pass);
    }

    public function __call($method, array $arg) {
        // Si on appelle une méthode qui n'existe pas dans la classe,
        // on transfert cet appel à l'objet PDO $this->_db
        return call_user_func_array(array($this->_db, $method), $arg);
    }

}