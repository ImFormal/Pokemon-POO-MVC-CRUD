<?php

require_once "controllers/pagesController.php";
require_once "controllers/utils.php";

if(empty($_GET['page'])) {
    $page = "home";
} else {
    $path = explode("/", filter_var($_GET["page"], FILTER_SANITIZE_URL));
    $page = $path[0];
}

try{
    switch($page){
        case "home":
            homePage();
            break;

        case "connexion":
            loginPage();
            break;

        case "test":
            testPage();
            break;

        default:
            throw new Exception("La page n'existe pas");  
    }
} catch(Exception $e){
    echo "Erreur : " . $e->getMessage();
}