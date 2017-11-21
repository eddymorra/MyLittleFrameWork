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
        $route = Router::analyze($query);

        $class = ucfirst($route["controller"])."Controller";

        if (class_exists($class)) {
            $controller = new $class();
            $method = array($controller, $route["action"]);
            if(is_callable($method)) {
                call_user_func($method, $route["params"]);
            }
        } else {
            echo "Désolé, cette page n'existe pas !";
        }
    }

}