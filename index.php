<?php

require_once "controllers/pagesController.php";
require_once "controllers/crudController.php";
require_once "controllers/apiController.php";
require_once "controllers/utils.php";
$pageController = new PagesController();
$crudController = new CrudController();
$apiController = new ApiController();

if(empty($_GET['page'])) {
    $page = "home";
} else {
    $path = explode("/", filter_var($_GET["page"], FILTER_SANITIZE_URL));
    $page = $path[0];
}

try{
    switch($page){
        case "home":
            $pageController->homePage();
            break;

        case "addCards":
            $pageController->addCards();
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

            $crudController->createCurrentCard($name, $image, $health, $attack,$attackspe, $type);
            break;
        
        case "deleteCard":
            $id = $_POST['id'];
            $crudController->deleteCurrentCard($id);
            break;

        case "updateCard":
            $id = $_POST['id'];
            $pageController->updateCards($id);
            break;

        case "updateNewCard":
            $id = $_POST["id"];
            $name = htmlspecialchars($_POST["name"]);
            $image = htmlspecialchars($_POST["image"]);
            $health = htmlspecialchars($_POST["health"]);
            $attack = htmlspecialchars($_POST["attack"]);
            $attackspe = htmlspecialchars($_POST["attackspe"]);
            $type = htmlspecialchars($_POST["type"]);

            if(empty($name) || empty($image) || empty($health) || empty($attack) || empty($attackspe) || empty($type)){
                throw new Exception("Tous les champs sont obligatoires !");
            }

            $crudController->updateCurrentCard($id, $name, $image, $health, $attack,$attackspe, $type);
            break;

        case "plant":
            $pageController->plantPokemonCards();
            break;

        case "water":
            $pageController->waterPokemonCards();
            break;

        case "fire":
            $pageController->firePokemonCards();
            break;

        case "apiCards":
            $apiController->apiCards();
            break;

        default:
            throw new Exception("La page n'existe pas");  
    }
} catch(Exception $e){
   $pageController->errorPage($e->getMessage());
}