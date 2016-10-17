<?php

class view
{
	private $parameter = array();
	private $view;
	
	public function __construct()
	{
	
	}
	
	public function view($view, $extension = false)
	{
		if (!$extension){
			$this->view	= "/views/".$view.".php";
		}
		else {
			$this->view	= "/views/" . $view . "." . $extension;
		}
	}
	
	public function render()
	{
		ob_start();
			foreach($this->parameter as $key => $value)
			{
				$$key = $value;
			}
			include($this->view);
			$content	= ob_get_contents();
		ob_end_clean();
		
		return $content;
	}
	
	public function parameter($key, $value = false)
	{
		$array	= $this->parameter;
		if(is_array($key))
		{
			foreach($key as $key => $value)
			{
				$this->parameter[$key] = $value;
			}
		}
		else
		{
			$this->parameter[$key] = $value;
		}
	}
	
}