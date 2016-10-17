<?php if(!defined('INDEX')){die('INDEX IS NOT DEFINED');}

class Template
{
	
	public $template;
	
	public function __construct()
	{
		$this->template = $this;
	}
	
	public function view()
	{
	
	
	
	}
	
	public function render()
	{
		return $this;
	}
}