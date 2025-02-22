<?php

function showArray($array) {
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function render($datas_page): void{
    extract($datas_page);

    ob_start();
    require_once($view);
    $content = ob_get_clean();
    require_once($layout);
}