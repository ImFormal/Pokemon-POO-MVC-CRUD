<?php 

require_once "models/crudModel.php";

class CrudController {

    private $crudModel;
    public function __construct() {
        $this->crudModel = new CrudModel();
    }

    public function createCurrentCard($name, $image, $health, $attack, $attackspe, $type): void{

        if($this->crudModel->createCurrentCardDB($name, $image, $health, $attack, $attackspe, $type)){
            header("Location:home");
            exit;
        } else{
            throw new Exception("Echec de la création de la carte !");
        }
    }
    
    public function deleteCurrentCard($id): void{
    
        if($this->crudModel->deleteCurrentCardDB($id)){
            header("Location:home");
            exit;
        } else{
            throw new Exception("Echec de la suppression de la carte !");
        }
    }
    
    public function updateCurrentCard($id, $name, $image, $health, $attack, $attackspe, $type): void{
    
        if($this->crudModel->updateCurrentCardDB($id, $name, $image, $health, $attack, $attackspe, $type)){
            header("Location:home");
            exit;
        } else{
            throw new Exception("Echec de la modification de la carte !");
        }
    }
}