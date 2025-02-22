<?php

require_once "models/typesModel.php";
require_once "models/pokemonModel.php";
require_once "controllers/utils.php";

class PagesController {

    private $pokemonModel;
    private $typeModel; 

    public function __construct() {
        $this->pokemonModel = new PokemonModel();
        $this->typeModel = new TypesModel();

    }
    public function homePage(): void{

        $types = $this->typeModel->getAllTypes();
        $pokemon = $this->pokemonModel->getAllPokemon();
    
        $datas_page = [
            "description" => "Page d'accueil du site",
            "title" => "Page d'accueil",
            "view" => "views/pages/homePage.php",
            "layout" => "views/components/layout.php",
            "types" => $types,
            "pokemons" => $pokemon,
        ];
        Utilities::render($datas_page);
    }

    public function errorPage($message): void{

        $datas_page = [
            "description" => "On est perdu ?",
            "title" => "Erreur",
            "view" => "views/pages/errorPage.php",
            "layout" => "views/components/layout.php",
            "message" => $message,
        ];
        Utilities::render($datas_page);
    }

    public function addCards(): void{

        $types = $this->typeModel->getAllTypes();
    
        $datas_page = [
            "description" => "Page de création de carte",
            "title" => "Page de création",
            "view" => "views/pages/addCards.php",
            "layout" => "views/components/layout.php",
            "types" => $types,
        ];
        Utilities::render($datas_page);
    }
    
    public function updateCards($id): void{
    
        $types = $this->typeModel->getAllTypes();
        $pokemon = $this->pokemonModel->getPokemon($id);
    
        $datas_page = [
            "description" => "Page de modification de carte",
            "title" => "Page de modification",
            "view" => "views/pages/updateCards.php",
            "layout" => "views/components/layout.php",
            "types" => $types,
            "pokemon" => $pokemon,
        ];
        Utilities::render($datas_page);
    }
    
    public function plantPokemonCards(): void{
    
        $pokemon = $this->pokemonModel->getPokemonByType('plant');
    
        $datas_page = [
            "description" => "Page des cartes de type plante",
            "title" => "Page des cartes type plante",
            "view" => "views/pages/plant.php",
            "layout" => "views/components/layout.php",
            "pokemons" => $pokemon,
        ];
        Utilities::render($datas_page);
    }
    
    public function waterPokemonCards(): void{
    
        $pokemon = $this->pokemonModel->getPokemonByType('water');
    
        $datas_page = [
            "description" => "Page des cartes de type eau",
            "title" => "Page des cartes type eau",
            "view" => "views/pages/water.php",
            "layout" => "views/components/layout.php",
            "pokemons" => $pokemon,
        ];
        Utilities::render($datas_page);
    }
    
    public function firePokemonCards(): void{
    
        $pokemon = $this->pokemonModel->getPokemonByType('fire');
    
        $datas_page = [
            "description" => "Page des cartes de type feu",
            "title" => "Page des cartes type feu",
            "view" => "views/pages/fire.php",
            "layout" => "views/components/layout.php",
            "pokemons" => $pokemon,
        ];
        Utilities::render($datas_page);
    }
}