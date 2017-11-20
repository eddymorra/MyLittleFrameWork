<?php

abstract class Controller {

    public static $base = "http://localhost/myframework/";

    abstract public function run($params);

}