<?php

require_once "controllers/pagesController.php";
require_once "controllers/crudController.php";
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

        case "addCards":
            addCards();
            break;

        case "createNewCard":
            $name = htmlspecialchars($_POST["name"]);
            $image = htmlspecialchars($_POST["image"]);
            $health = htmlspecialchars($_POST["health"]);
            $attack = htmlspecialchars($_POST["attack"]);
            $attackspe = htmlspecialchars($_POST["attackspe"]);
            $type = htmlspecialchars($_POST["type"]);

            if(empty($name) || empty($image) || empty($health) || empty($attack) || empty($attackspe) || empty($type)){
                throw new Exception("Tous les champs sont obligatoires !");
            }

            createCurrentCard($name, $image, $health, $attack,$attackspe, $type);
            break;
        
        case "deleteCard":
            $id = $_POST['id'];
            deleteCurrentCard($id);
            break;

        default:
            throw new Exception("La page n'existe pas");  
    }
} catch(Exception $e){
    echo "Erreur : " . $e->getMessage();
}