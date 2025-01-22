<?php

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "/connexion") {
    $title = "Connexion";
    $template = "Views/Users/connexion.php";
    require_once("Views/base.php");
}
elseif($uri === "/deconnexion") {
    // plus tard
}

elseif($uri === "/inscription") {
    $title = "Inscription";
    $template = "Views/Users/inscriptionOrEditProfile.php";
    require_once("Views/base.php");
}