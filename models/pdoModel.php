<?php

require_once "env.php";

abstract class PdoModel{

    public static $pdo;

    protected function setDB(): PDO{    
        if(self::$pdo===null){
            self::$pdo = new PDO('mysql:host='.$_ENV['dbhost'].';dbname='.$_ENV['dbname'].'',$_ENV['dblogin'],$_ENV['dbpassword']);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        
        return self::$pdo;
    }
}