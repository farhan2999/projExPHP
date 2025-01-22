<?php 
$uri = $_SERVER["REQUEST_URI"];

if ($uri === "/index.php" || $uri === "/") {
    $title = "page d'accuil";
    $template = "Views/pageAccueil.php";
    require_once("Views/base.php");
}