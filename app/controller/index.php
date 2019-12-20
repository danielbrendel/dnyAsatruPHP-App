<?php

/*
    Asatru PHP - Example controller

    Add here all your needed routes implementations related to 'index'.
*/

use Asatru\View;
use Asatru\Helper;
use App\Models\ExampleModel;

class IndexController {
	public function index($request)
	{
		//Handles URL: /

		//Generate and return a view
		return (new Asatru\View\ViewHandler())
			->setLayout('layout') //The layout file. Will be \app\view\layout.php
			->setYield('yield', 'index'); //The index yield. Will be \app\view\index.php
	}
}
