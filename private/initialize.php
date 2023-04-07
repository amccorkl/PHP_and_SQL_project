<?php 
ob_start(); //output buffering is turned on

// DEFINING PATHS with constants
// __FILE__ returns the current directory to this initialize file or the private directory
define('PRIVATE_PATH', dirname(__FILE__));
// then this line takes us out of the private to the whole project name
define('PROJECT_PATH', dirname(PRIVATE_PATH));
// then this line takes us to the public directory
define('PUBLIC_PATH', PROJECT_PATH . '/public');
// then this line takes us to the shared directory
define('SHARED_PATH', PRIVATE_PATH . '/shared');

// URL PATH for links (don't need to include the domain,same root as the webserver) Can find everything dynamically in /public
$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') +7;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define('WWW_ROOT', $doc_root);

//requiring all the functions in that folder
require_once('functions.php');

?>