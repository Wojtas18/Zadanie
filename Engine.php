<?php

include('EngineInterface.php');

class Engine implements EngineInterface
{
	private $HP;
	
	public function __construct($HP)
	{
		$this->HP = $HP;
	}
	
	public function getHP()
	{
		return $this->HP;
	}




}