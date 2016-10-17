<?php

class Router
{

	public $controller;
	public $method;
	public $parameters;
	public $lang;
	public $config;
	public $url;
	public $explode_url;
	public $count;
	
	public function __construct()
	{
		
		$this->config	= parse_ini_file(CONFIGS.'config.ini', true);
	}
	
	public function load()
	{
		$this->get_url();
		$this->remove_extension();
		$this->explode_url();
		
		$controller	= $this->get_controller();
		$method		= $this->get_method($controller[1]);
		$parameters	= $this->get_parameters($controller[1] + 1);
		
		return array($controller[0], $method, $parameters);
	}
	
	public function get_url()
	{
		if(isset($_GET['p']))
		{
			$this->url	= $_GET['p'];
		}
		else
		{
			$this->url	= $this->config['system']['default_url'];
		}
	}
	public function explode_url()
	{
		$page				= str_replace($this->config['system']['url_seperator'], "_", $this->url);
		$this->explode_url	= explode("/", $page);
		$this->count		= count($this->explode_url);
	}
	
	public function get_controller()
	{
		$path		= "";
		$class_name = "Controllers_";
		$i 			= 0;
		foreach($this->explode_url as $class)
		{
			if(!isset($found))
			{
				$path 		.= $class;
				$class_name .= $class;
				if(!file_exists(CLASSES.'Controllers/'.$path.EXT))
				{
						$path .= '/';
						$class_name .= '_';
				}
				else
				{
					$found = true;
				}	
				$i ++;
			}
		}
		
		if(isset($found))
		{
			$this->controller	= $class_name;
			return array($class_name, $i);
		}
		else
		{
			die('No controller found');
		}
	}
	
	public function get_method($i)
	{
		if($i < $this->count)
		{
			$this->method = "action_".$this->explode_url[$i];
		}
		else{
			$this->method = "action_index";
		}
		
		return $this->method;
	}
	
	public function get_parameters($i)
	{
		if($i < $this->count)
		{
			$parameters = array();
			$i++;
			while($i <= $this->count)
			{
			    $parameters[]	= $this->explode_url[$i -1];
				$i++;
			}
			$this->parameters = $parameters;
		}
		else{
			$this->parameters = false;
		}	
		
		return $this->parameters;
	}
	
	public function remove_extension()
	{
		if($this->config['system']['url_extension'] != "" or $this->config['system']['url_extension'] != false)
		{
			$patern	= '/'.$this->config['system']['url_extension'].'$/';
			$match	= preg_replace($patern, "" , $this->url);
		}
	}
	
	
	public function get_lang()
	{
		
	}
	
	public function auto_load($class)
	{
		$this->load_class($class);
	}
	
	public function load_class($class)
	{
		$class_path	= str_replace("_", "/", $class);
		
		if(file_exists(CLASSES.$class_path.EXT))
		{
			require(CLASSES.$class_path.EXT);
			
			if (!class_exists($class, false)) 
			{
				throw new Exception("Class is not declared in class classes/".$class_path.EXT.".");
				return false;
			}
			else
			{
				return true;
			}
		}
		else
		{
			throw new Exception("Unable to find classes/".$class_path.EXT.".");
			return false;
		}	
	}
	
	public function load_method($object)
	{
		if($this->parameters == false)
		{
			$method	= $this->method;
			return $object->$method();
		}
		else
		{
			return call_user_func_array(array($object, $this->method), $this->parameters);
		}
	}
	
	public function init()
	{
		
		if($this->load_class($this->controller))
		{
			$controller	= $this->controller;
			$object		= new $controller();
			$method		= $this->load_method($object);
			return $method;		
		}
		
	}

} 