<?php

namespace Caleb\Structural\Composite;

class Archer extends Unit 
{
	public function addUnit()
	{
		throw new UnitException("Leaf nodes cannot have children");
	}

	public function removeUnit()
	{
		throw new UnitException("Leaf nodes cannot have children");
	}

	/*
	In this case, @method addUnit and removeUnit could as well be implemented in the
	abstract class Unit to avoid duplication.

	Drawback is, it doesn't force branch nodes to implement these two methods.

	A walk around this could introduce more complexities into Composite Design.
	*/

	public function bombardStrength()
	{
		return 4;
	}
}