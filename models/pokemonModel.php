<?php

require_once "models/pdoModel.php";

function getAllPokemon(): array|null{
    
    try{
        $req = "SELECT * FROM pokemon";
        $stmt = setDB()->prepare($req);
        $stmt->execute();
        $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();

        return $datas;
    } catch(PDOException $e){
        echo $e->getMessage();
        return null;
    }
}