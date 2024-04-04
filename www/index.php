<?php

require_once __DIR__ . '/../src/utils/init.php';

$page = 'home';
session_start(); //demarrage de la session sur tout le site

if (isset($_GET['p'])) {
    if (in_array($_GET['p'], $existing_pages)) {
        $page = $_GET['p'];
    } else if( in_array($_GET['p'], $car_pages)){ //pointe sur product1.php si on tape le nom d'une voiture
       $page = "product1";
    }else {
        $page = '404';
    }
}

require_once __DIR__ . '/../src/views/partials/navbar.php';
require_once __DIR__ . '/../src/views/partials/footer.php';
require_once __DIR__ . '/../src/views/pages/'. $page .'.php';

require_once __DIR__ . '/../src/views/template.php';
