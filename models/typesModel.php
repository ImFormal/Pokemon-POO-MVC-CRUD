<?php

require_once "models/pdoModel.php";

class TypesModel extends PdoModel {

    public function getAllTypes(): array|null{

        try{
            $req = "SELECT * FROM types";
            $stmt = $this->setDB()->prepare($req);
            $stmt->execute();
            $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $stmt->closeCursor();
    
            return $datas;
        } catch(PDOException $e){
            echo $e->getMessage();
            return null;
        }
    }

}