<?php

require_once "models/pdoModel.php";

function createCurrentCardDB($name, $image, $health, $attack, $attackspe, $type): bool{

    $req = "INSERT INTO pokemon(name, image, health, attack, attackspe, type) VALUES (:name, :image, :health, :attack, :attackspe, :type)";
    $stmt = setDB()->prepare($req);
    $stmt->bindParam(":name",$name, PDO::PARAM_STR);
    $stmt->bindParam(":image",$image, PDO::PARAM_STR);
    $stmt->bindParam(":health",$health, PDO::PARAM_INT);
    $stmt->bindParam(":attack",$attack, PDO::PARAM_INT);
    $stmt->bindParam(":attackspe",$attackspe, PDO::PARAM_INT);
    $stmt->bindParam(":type",$type, PDO::PARAM_STR);
    $stmt->execute();
    $stmt->closeCursor();

    return true;
}

function deleteCurrentCardDB($id): bool{

    $req = "DELETE FROM pokemon WHERE id= :id";
    $stmt = setDB()->prepare($req);
    $stmt->bindParam(":id",$id, PDO::PARAM_INT);
    $stmt->execute();
    $stmt->closeCursor();

    return true;
}