<?php

namespace Caleb\Structural\Composite;

abstract class Unit 
{
	abstract public function addUnit(Unit $unit);

	abstract public function removeUnit(Unit $unit);
	
	abstract public function bombardStrength(): int;
}