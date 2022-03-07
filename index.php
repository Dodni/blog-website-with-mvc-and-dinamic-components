<?php

//alkalmazás gyökér könyvátra a szerveren
define('SERVER_ROOT', $_SERVER['DOCUMENT_ROOT'].'/raccoon/');

//URL cím az alkalmazás gyökeréhez
define('SITE_ROOT', 'http://localhost/raccoon/');

// a router.php vezérlő betöltése
require_once(SERVER_ROOT . 'controllers/' . 'router.php');

?>