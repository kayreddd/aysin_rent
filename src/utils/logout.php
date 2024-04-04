<?php
session_start();
$_SESSION = array();
session_destroy();
header("Location: /aysin_rent/www/?p=home");

?>