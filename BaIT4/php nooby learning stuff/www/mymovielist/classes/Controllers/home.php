<?php

class Controllers_Home extends Template
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function action_index()
	{
		$router = new Router();
		print_r($router->load());
	}
}