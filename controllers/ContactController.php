<?php

class ContactController extends Controller {

    public function run($params) {
        $base = Controller::$base;

        if($_POST) {
            $traitement = ContactModel::addMessageContact($_POST['name'], $_POST['email'], $_POST['message']);
            $message = $traitement;
        }

        $content = "Contact";
        require(ROOT.'/views/layout.php');
    }

} 