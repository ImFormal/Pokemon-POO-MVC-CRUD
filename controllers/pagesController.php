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


function testPage(): void{

    $donnees_recup = [
        "name" => "John",
        "lastname" => "Doe",
        "age" => 27,
    ];

    $datas_page = [
        "description" => "Page de test du site",
        "title" => "Page de test",
        "view" => "views/pages/test.php",
        "layout" => "views/components/layout.php",
        "datas_recep" => $donnees_recup
    ];
    render($datas_page);
}
