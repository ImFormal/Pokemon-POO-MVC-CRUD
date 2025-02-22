<?php

function setDB(): PDO{
    static $pdo;

    if($pdo===null){
        $pdo = new PDO("mysql:host=localhost; dbname=pokemon_cards", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    return $pdo;
}