<?php
/*
define ("PROJECT_PHP_SERVER","default");
//define ('PROJECT_PHP_SERVER','development');
//define ('PROJECT_PHP_SERVER','production');



if(defined('PROJECT_PHP_SERVER')){
    
}*/

putenv("PROJECT_PHP_SERVER=development");

$_ENV["MYENV"]="new_variable";

getenv("PROJECT_PHP_SERVER");
echo getenv('MYENV');



echo "<pre>";
print_r($_ENV);
echo "</pre>";

$config = array();
$config['db'] = include('config/default/db.php');
$config['debug'] = include('config/default/debug.php');
$config['lang'] = include('config/default/language.php');
$config['template'] = include('config/default/template.php');

echo "<pre>";
print_r($config);
echo "</pre>";