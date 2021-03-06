<?php
/**
 * 
 * This file is part of Aura for PHP.
 * 
 * @package Aura.Web_Project
 * 
 * @license http://opensource.org/licenses/bsd-license.php BSD
 * 
 */
$path = dirname(__DIR__);
require "{$path}/vendor/autoload.php";
$kernel = (new \Aura\Project_Kernel\Factory)->newKernel(
    $path,
    'Aura\Web_Kernel\WebKernel'
);
$kernel();

printf(
    "\n%' 8d:%f",
    memory_get_peak_usage(true),
    microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']
);
