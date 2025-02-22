<?php

require_once "models/pdoModel.php";

class PokemonModel extends PdoModel {

    public function getAllPokemon(): array|null{
    
        try{
            $req = "SELECT * FROM pokemon";
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
    
    public function getPokemon($id): array|null{
        
        try{
            $req = "SELECT * FROM pokemon WHERE id=:id";
            $stmt = $this->setDB()->prepare($req);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            $datas = $stmt->fetch(PDO::FETCH_ASSOC);
            $stmt->closeCursor();
    
            return $datas;
        } catch(PDOException $e){
            echo $e->getMessage();
            return null;
        }
    }
    
    
    public function getPokemonByType($type): array|null{
        
        try{
            $req = "SELECT * FROM pokemon WHERE type=:type";
            $stmt = $this->setDB()->prepare($req);
            $stmt->bindParam(":type", $type, PDO::PARAM_STR);
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