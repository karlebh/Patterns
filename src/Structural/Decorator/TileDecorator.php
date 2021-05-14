<?php

namespace Caleb\Structural\Decorator;

abstract class TileDecorator extends Tile
{
	protected $tile;

	public function __construct(Tile $tile)
	{
		$this->tile = $tile;
	}
}