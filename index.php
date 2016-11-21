<?php
/*

pochinit put/getenv
 

phpinfo();
getenv("LANG");
putenv("AD=development");
echo "<pre>";
print_r($_ENV);
echo "</pre>";
    
*/



/* */
$_ENV["PROJECT_PHP_SERVER"]="production";
//$_ENV["PROJECT_PHP_SERVER"]="develop";


$config = array();
$config['db'] = include('config/default/db.php');
$config['debug'] = include('config/default/debug.php');
$config['lang'] = include('config/default/language.php');
$config['template'] = include('config/default/template.php');

if(isset($_ENV['PROJECT_PHP_SERVER'])){
    if($_ENV['PROJECT_PHP_SERVER']=='develop'){
        $config['db'] = include('config/development/db.php');
       
    }
    elseif($_ENV['PROJECT_PHP_SERVER']=='production'){
        $config['db'] = include('config/production/db.php');       
        $config['lang'] = include('config/production/language.php');        
    }
}

echo "<pre>";
print_r($config);
echo "</pre>";