<?php

require "core/Stf/Application.php";
require "core/Stf/Autoloader/Register.php";

$defaultLoader = Stf\Autoloader\Register::loadDefault();
$serviceLoader = Stf\Autoloader\Register::loadDefault();

//Set default loader
Stf\Autoloader\Register::setDefaultLoader(clone $defaultLoader);

$defaultLoader->setDirectory(__DIR__ . '/library/src/Application');
$serviceLoader->setDirectory(__DIR__ . '/library/src/Service');

$application = new Stf\Application;

/**
 * Register auto loaders
 * Add here any auto loader you want
 */
Stf\Autoloader\Register::register([
    'Application'=>$defaultLoader,
    'Service'=>$serviceLoader,
]);