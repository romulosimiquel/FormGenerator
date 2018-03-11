<?php
/**
 * @autor Ricardo de Oliveira - ricardo.reksystem@gmail.com - 2018
 */

require 'environment.php';

//constants
define("RAIZ", "/mvc");

define("BASE", "http://localhost/mvc/");

//connexao
global $config;
$config = array();
if(ENVIRONMENT == 'development') 
{
    $config['dbname'] = 'pepeno';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
} 
else 
{
    $config['dbname'] = 'blog';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = 'root';
}
?>