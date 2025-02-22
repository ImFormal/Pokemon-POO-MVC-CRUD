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