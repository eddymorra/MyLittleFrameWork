<?php

class Database {

    protected $_db;

    public function __construct() {
        $this->_db = new PDO(
            "mysql:host=localhost;dbname=fwmvc;charset=utf8",
            "root",
            "test"
        );
    }

    public function __call($method, array $arg) {
        // Si on appelle une méthode qui n'existe pas dans la classe,
        // on transfert cet appel à l'objet PDO $this->_db
        return call_user_func_array(array($this->_db, $method), $arg);
    }

}