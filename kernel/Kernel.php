<?php

class Kernel {

    public static function autoload($class) {
        if(file_exists(ROOT."/kernel/".$class.".php")) {
            require_once(ROOT."/kernel/".$class.".php");
        } elseif (file_exists(ROOT."/models/".$class.".php")) {
            require_once(ROOT."/models/".$class.".php");
        } elseif (file_exists(ROOT."/controllers/".$class.".php")) {
            require_once(ROOT."/controllers/".$class.".php");
        }
    }

    public static function start() {
        spl_autoload_register(array("Kernel", "autoload"));

        $query = isset($_GET["query"]) ? $_GET["query"] : "";
        $datas = Router::analyze($query);

        $class = $datas["controller"]."Controller";
        if (class_exists($class)) {
            $instance = new $class();
            $instance->run($datas["params"]);
        } else {
            echo "Problème, un élément demandé n'existe pas !";
        }
    }

}