<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();

require_once __DIR__ . '/common.php';
require_once __DIR__ . '/db.php';

// Configuration du site
$existing_pages = ['home', 'feedProduct', 'product1', 'product2', 'product3', 'product4', 'product5', 'checkout'];

// Les classes

// require_once __DIR__ . '/class/User.php';
require_once __DIR__ . "../../class/DbManager.php";
// require_once __DIR__ . '/class/Commande.php';

$BDD = new DbManager($db);


// Tous les utilitaires
require_once __DIR__ . '../../error.php';
