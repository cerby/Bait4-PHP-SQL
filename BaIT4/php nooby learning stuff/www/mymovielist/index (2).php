<?php
define('INDEX', true);

$config	= parse_ini_file('configs/config.ini', true);

define('DOCROOT', $_SERVER['DOCUMENT_ROOT'].$config['system']['dir']);
define('CLASSES', DOCROOT.'/classes/');
define('CONFIGS', DOCROOT.'/configs/');
define('VIEWS', DOCROOT.'/views/');
define('EXT', $config['system']['class_extension']);

require_once(CLASSES.'Router.php');
$router	= new Router();
$router->load();
$router->init();

function __autoload($class) {
	global $router;
	$router->auto_load($class);
}


