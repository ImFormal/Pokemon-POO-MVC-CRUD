<?php

require_once "utils.php";

class ApiController {

    private $pokemonModel;

    public function __construct() {
        $this->pokemonModel = new PokemonModel();
    }

    public function apiCards(): void{
        $allCards = $this->pokemonModel->getAllPokemon();
        Utilities::sendJson_get($allCards);
    }
}