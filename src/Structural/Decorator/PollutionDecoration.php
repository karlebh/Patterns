<?php

namespace Caleb\Structural\Decorator;

class PollutionDecoration extends TileDecorator
{
	public function getWealthFactor(): int 
	{
		return $this->tile->getWealthFactor() - 4;
	}
}