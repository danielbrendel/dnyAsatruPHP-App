<?php

/*
    Asatru PHP - routes configuration file

    Add here all your needed routes.

    Schema:
        <url> = controller_file@controller_method
    Example:
        /my/route = mycontroller@index
        /my/route/with/{param1}/and/{param2} = mycontroller@another
    Explanation:
        Will call index() in app\controller\mycontroller.php
        Every route with $ prefix is a special route
*/

return [
    '/' => 'index@index',
    '/index' => 'index@index',
    '$404' => 'error404@index'
];
