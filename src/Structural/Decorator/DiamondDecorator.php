<?php

namespace Caleb\Structural\Decorator;

class DiamondDecorator extends TileDecorator
{
	public function getWealthFactor(): int 
	{
		return $this->tile->getWealthFactor() + 2;
	}
}