<?php if(!defined('INDEX')){die('INDEX IS NOT DEFINED');}

class database
{
	private $host;
	private $user;
	private $pass;
	private $database;
	private $sql;
	private $connection;
	private $executed;
	private $result;
	private $result_position;
	private $rows;
	private $charset;
	
	public function __construct()
	{
		$config	= parse_ini_file(CONFIGS."database.ini", true);
		
		$this->host		= $config['database']['host'];
		$this->user		= $config['database']['user'];
		$this->pass		= $config['database']['pass'];
		$this->database	= $config['database']['database'];
		$this->charset	= $config['database']['charset'];
		
		$this->connect();
	}
	
	public function connect()
	{
		$this->connection	= mysql_connect($this->host, $this->user, $this->pass);
		if(!$this->connection)
		{
			return "Failed: Can't connect to the server";
		}
		
		$database	= mysql_select_db($this->database, $this->connection);
		if(!$database)
		{
			return "Failed: Can't select the database";
		}
		$charset = mysql_set_charset($this->charset, $this->connection); 
	}
	
	public function query($query)
	{
		$this->sql	= $query;
		return $this;
	}
	
	public function parameter($key, $value)
	{
		$value			= sprintf("%s",mysql_real_escape_string($value));
		$this->sql	= str_replace($key, $value, $this->sql);
		return $this;
	}
	
	public function parameters($array)
	{
		foreach($array as $key => $val)
		{
			$this->parameter($key, $val);
		}
		return $this;
	}
	
	
	public function execute($die = false)
	{
		if($this->sql == "")
		{
			return false;
		}
		else if ($die == true){
			$this->executed	= mysql_query($this->sql) or die (mysql_error());
		}
		else
		{
			$this->executed	= mysql_query($this->sql);
		}
		return $this;
	}
	
	public function result($type = "object", $returnInArray = false)
	{
		switch($type)
		{
			case "array":
				$result	= array();
				if ($returnInArray && $this->count() == 1){
					$row = mysql_fetch_array($this->executed);
					$result[] = $row;
				}
				else if ($this->count() == 1){
					$row = mysql_fetch_array($this->executed);
					$result = $row;
				}
				else {
					while($row = mysql_fetch_array($this->executed)){
						$result[] = $row;
					}
				}
			break;
			
			case "assoc":
				$result	= array();
				if ($returnInArray && $this->count() == 1){
					$row = mysql_fetch_assoc($this->executed);
					$result[] = $row;
				}
				else if ($this->count() == 1){
					$row = mysql_fetch_assoc($this->executed);
					$result = $row;
				}
				else {
					while($row = mysql_fetch_assoc($this->executed)){
						$result[] = $row;
					}
				}
			break;
			
			case "row":
				$result	= array();
				if ($returnInArray && $this->count() == 1){
					$row = mysql_fetch_row($this->executed);
					$result[] = $row;
				}
				else if ($this->count() == 1){
					$row = mysql_fetch_row($this->executed);
					$result = $row;
				}
				else {
					while($row = mysql_fetch_row($this->executed)){
						$result[] = $row;
					}
				}
			break;
			
			case "object":
				$result	= array();
				if ($returnInArray && $this->count() == 1){
					$row = mysql_fetch_object($this->executed);
					$result[] = $row;
				}
				else if ($this->count() == 1){
					$row = mysql_fetch_object($this->executed);
					$result = $row;
				}
				else {
					while($row = mysql_fetch_object($this->executed)){
						$result[] = $row;
					}
				}
			break;
		}
			
		$this->result 	= $result;
		return $result;	
	}
	
	public function current()
	{
		if($this->result_position == false)
		{
			$this->result_position = 0;
			return $this->result[0];
		}
		else
		{
			return $this->result[$this->result_position];
		}
	}
	
	public function next()
	{
		if($this->rows <= 1)
		{
			if($this->result_position == false)
			{
				return $this->result[0];
			}
			else
			{
				return $this->result[$this->result_position];
			}			
		}

	}
	
	public function previous()
	{
	
	}
	
	public function count()
	{
		$count	= mysql_num_rows($this->executed);
		return $count;
	}

}