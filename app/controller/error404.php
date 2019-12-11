<?php

class Error404Controller {
	public function index($request)
	{
		//Handles special case: $404
		
		//Add a log line
		addLog(Asatru\Logger\LOG_INFO, "Error 404");

		//Generate the 404 view
		$v = new Asatru\View\ViewHandler();
		$v->setLayout('layout') //The layout file. Will be \app\view\layout.php
			->setYield('yield', 'error/404'); //The index yield. Will be \app\view\index.php
		
		return $v; //Pass the object to the engine
	}
}