<?php 

require_once 'models/crudModel.php';

function createCurrentCard($name, $image, $health, $attack, $attackspe, $type): void{

    if(createCurrentCardDB($name, $image, $health, $attack, $attackspe, $type)){
        header("Location:home");
        exit;
    } else{
        throw new Exception("Echec de la création de la carte !");
    }
}

function deleteCurrentCard($id): void{

    if(deleteCurrentCardDB($id)){
        header("Location:home");
        exit;
    } else{
        throw new Exception("Echec de la suppression de la carte !");
    }
}