<?php

class Controllers_Admin_Lol
{

	public function action_index()
	{
		echo "action_index method";
	}
	
	public function action_test($param)
	{
		$url = new Url();
		echo $url->site('/test/test/test/');
		echo "<br />";
		echo $param;
	}


}