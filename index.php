<?php

// Définition du dossier racine
define("ROOT", realpath(__dir__));

// Chargement des données de configuration
require_once(ROOT."/kernel/Configuration.php");

// Chargement du Kernel
require_once(ROOT."/kernel/Kernel.php");

// Lancement du Kernel
Kernel::start();
