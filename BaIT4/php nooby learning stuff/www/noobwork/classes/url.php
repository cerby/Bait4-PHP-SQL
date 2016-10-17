<?php

class Url
{
	public $base;
	
	public function __construct()
	{
		$this->config	= parse_ini_file(CONFIGS.'config.ini', true);
		$this->base();
	}
	
	public function base()
	{
		$this->base = $this->config['system']['base_url'];
	}
	public function site($link)
	{
		$link = preg_replace('/\/$/','',$link);
		$link = preg_replace('/^\//','',$link);
		if($this->config['system']['index'] != "")
		{
			return $this->base.$this->config['system']['index'].'?p='.$link.$this->config['system']['url_extension'];
		}
		else
		{
			return $this->base.$link.$this->config['system']['url_extension'];
		}
	}
	
	public function redirect($url, $status = false)
	{
		if($status)
		{
			switch($status)
			{
				case "300":
					header ('HTTP/1.1 300 Multiple Choices');
				break;
				case "301":
					header ('HTTP/1.1 301 Moved Permanently');
				break;
				case "302":
					header ('HTTP/1.1 302 Found');
				break;
				case "303":
					header ('HTTP/1.1 303 See Other');
				break;
				case "304":
					header ('HTTP/1.1 304 Not Modified');
				break;
				case "305":
					header ('HTTP/1.1 305 Use Proxy');
				break;
				case "307":
					header ('HTTP/1.1 307 Temporary Redirect');
				break;
				case "400":
					header ('HTTP/1.1 400 Bad Request');
				break;
				case "401":
					header ('HTTP/1.1 401 Unauthorized');
				break;
				case "402":
					header ('HTTP/1.1 402 Payment Required');
				break;
				case "403":
					header ('HTTP/1.1 403 Forbidden');
				break;
				case "404":
					header ('HTTP/1.1 404 Not Found');
				break;
				case "405":
					header ('HTTP/1.1 405 Method Not Allowed');
				break;
			
			
			}	
		}
		header('Location: '.$url);
	}

}