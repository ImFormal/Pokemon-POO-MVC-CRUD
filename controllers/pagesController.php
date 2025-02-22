<?php

require_once "models/typesModel.php";
require_once "models/pokemonModel.php";

function homePage(): void{

    $types = getAllTypes();
    $pokemon = getAllPokemon();

    $datas_page = [
        "description" => "Page d'accueil du site",
        "title" => "Page d'accueil",
        "view" => "views/pages/homePage.php",
        "layout" => "views/components/layout.php",
        "types" => $types,
        "pokemons" => $pokemon,
    ];
    render($datas_page);
}

function addCards(): void{

    $types = getAllTypes();

    $datas_page = [
        "description" => "Page de création de carte",
        "title" => "Page de création",
        "view" => "views/pages/addCards.php",
        "layout" => "views/components/layout.php",
        "types" => $types,
    ];
    render($datas_page);
}

function updateCards($id): void{

    $types = getAllTypes();
    $pokemon = getPokemon($id);

    $datas_page = [
        "description" => "Page de modification de carte",
        "title" => "Page de modification",
        "view" => "views/pages/updateCards.php",
        "layout" => "views/components/layout.php",
        "types" => $types,
        "pokemon" => $pokemon,
    ];
    render($datas_page);
}

function plantPokemonCards(): void{

    $pokemon = getPokemonByType('plant');

    $datas_page = [
        "description" => "Page des cartes de type plante",
        "title" => "Page des cartes type plante",
        "view" => "views/pages/plant.php",
        "layout" => "views/components/layout.php",
        "pokemons" => $pokemon,
    ];
    render($datas_page);
}

function waterPokemonCards(): void{

    $pokemon = getPokemonByType('water');

    $datas_page = [
        "description" => "Page des cartes de type eau",
        "title" => "Page des cartes type eau",
        "view" => "views/pages/water.php",
        "layout" => "views/components/layout.php",
        "pokemons" => $pokemon,
    ];
    render($datas_page);
}

function firePokemonCards(): void{

    $pokemon = getPokemonByType('fire');

    $datas_page = [
        "description" => "Page des cartes de type feu",
        "title" => "Page des cartes type feu",
        "view" => "views/pages/fire.php",
        "layout" => "views/components/layout.php",
        "pokemons" => $pokemon,
    ];
    render($datas_page);
}