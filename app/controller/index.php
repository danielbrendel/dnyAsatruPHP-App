<?php

/*
    Asatru PHP - Example controller

    Add here all your needed routes implementations related to 'index'.
*/

/**
 * Example index controller
 */
class IndexController {
	/**
	 * Handles URL: /
	 * 
	 * @param Asatru\Controller\ControllerArg $request
	 * @return Asatru\View\ViewHandler
	 */
	public function index($request)
	{
		//Generate and return a view
		return (new Asatru\View\ViewHandler())
			->setLayout('layout') //The layout file. Will be \app\view\layout.php
			->setYield('yield', 'index'); //The index yield. Will be \app\view\index.php
	}
	
	/**
	 * Handles URL: /test/{foo}/another/{bar}
	 * 
	 * @param Asatru\Controller\ControllerArg $request
	 * @return Asatru\View\ViewHandler
	 */
	public function test($request)
	{
		//Generate and return a view
		return (new Asatru\View\ViewHandler())
			->setLayout('layout') //The layout file. Will be \app\view\layout.php
			->setYield('yield', 'index') //The index yield. Will be \app\view\index.php
			->setVars(array('foo' => $request->arg('foo'), 'bar' => $request->arg('bar'))); //Set variables
	}
}
