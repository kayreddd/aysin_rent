<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();

require_once __DIR__ . '/common.php';
require_once __DIR__ . '/db.php';

// Configuration du site
$existing_pages = ['home', 'feedProduct', 'product2', 'product3', 'product4', 'product5', 'checkout', 'myInformations', 'changeMdp', 'historical', 'login', 'register'];
$car_pages = ['range', 'x6', 'urus', 'rs3', 'rs7', 'gt63s', 'g63s', 'camaro'];

// Les classes

// require_once __DIR__ . '/class/User.php';
require_once __DIR__ . "../../class/DbManager.php";
// require_once __DIR__ . '/class/Commande.php';

$BDD = new DbManager($db);


// Tous les utilitaires
require_once __DIR__ . '../../error.php';
