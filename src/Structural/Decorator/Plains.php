<?php

namespace Caleb\Structural\Decorator;

class Plains extends Tile 
{
	private int $wealthFactor = 2;

	public function getWealthFactor(): int 
	{
		return $this->wealthFactor;
	}
}