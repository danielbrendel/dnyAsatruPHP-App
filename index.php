<?php


/*
    Asatru PHP (dnyAsatruPHP) developed by Daniel Brendel
    
    (C) 2019 - 2020 by Daniel Brendel
    
    Version: 0.1
    Contact: dbrendel1988<at>gmail<dot>com
    GitHub: https://github.com/danielbrendel
    
    License: see LICENSE.txt
*/

//If composer is installed then utilize its autoloader
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

//Include the framework bootstrap script in order to process the application
require_once __DIR__ . '/vendor/danielbrendel/asatru-php-framework/src/bootstrap.php';
