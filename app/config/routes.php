<?php

/*
    Asatru PHP - routes configuration file

    Add here all your needed routes.

    Schema:
        [<url>, <method>, controller_file@controller_method, opt:unique_identifier]
    Example:
        [/my/route, get, mycontroller@index]
        [/my/route/with/{param1}/and/{param2}, get, mycontroller@another, mycontroller.another]
    Explanation:
        Will call index() in app\controller\mycontroller.php if request is 'get'
        Every route with $ prefix is a special route
*/

return [
    array('/', 'GET', 'index@index'),
    array('/index', 'GET', 'index@index'),
    array('$404', 'ANY', 'error404@index')
];
