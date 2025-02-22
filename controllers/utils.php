<?php

class Utilities {
    public static function render($datas_page): void{
        extract($datas_page);
    
        ob_start();
        require_once($view);
        $content = ob_get_clean();
        require_once($layout);
    }

    public static function showArray($array): void {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }

    public static function sendJson_get($datas): void{
        #Tous les sites y ont accès
        header('Access-Control-Allow-Origin:*');
    
        #On autorise seulement GET et non post, put, patch, delete, head et options
        header('Access-Control-Allow-Methods:GET');
    
        #On envoie en Json
        header('Content-Type:application/json');
        echo json_encode($datas);
    }
}


