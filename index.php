<?php

// Read configuration
include('app/core/Config.php');

if (_Debug)
{
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}
else
    // Turn off all error reporting
    error_reporting(0);

// Exception handler
include('app/core/Exceptions.php');

// Libs
include('app/lib/HttpMethods.php');
include('app/lib/Xml.php');
include('app/lib/MyDB.php');
include('app/lib/UnitOfWork.php');
include('app/lib/Jdf.php');

// Controllers core
include('app/core/Controller.php');

// Router
include('app/core/App.php');

new App;

?>