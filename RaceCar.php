<?php

include('Engine.php');
include('RaceCarInterface.php');

class RaceCar implements RaceCarInterface
{
	private $engine;

	public function __construct(Engine $engine)
	{
		$this->engine = $engine;
	}
	
	public function getVMAX()
	{
		$vMax = (($this->engine->getHP() * 1000) / 1800) * 2.88;
		return $vMax;
	}
	
	public function getAcceleration()
	{
		$acc = 1000 / $this->engine->getHP();
		return $acc;
	}
}
