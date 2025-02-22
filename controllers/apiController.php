<?php

function apiCards(){
    $allCards = getAllPokemon();
    sendJson_get($allCards);
}