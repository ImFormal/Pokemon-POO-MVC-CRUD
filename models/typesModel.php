<?php

require_once "models/pdoModel.php";

function getAllTypes(): array|null{

    try{
        $req = "SELECT * FROM types";
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