<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

require_once(ROOT . DS . 'lib' . DS . 'vendor/autoload.php');

$url = $_GET['url'];

require_once(ROOT . DS . 'lib' . DS . 'boostrap.php');
