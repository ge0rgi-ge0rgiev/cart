<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? null : define('SITE_ROOT', 'C:'.DS.'wamp'.DS.'www'.DS.'cart');
defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');

//Common use files
require_once 'config.php';
require_once 'functions.php';

//Classes
require_once 'Database.php';
require_once 'Products.php';
require_once 'MySmarty.php';
require_once 'ShoppingCart.php';