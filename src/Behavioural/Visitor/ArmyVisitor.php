<?php

namespace Caleb\Structural\Visitor;

abstract class ArmyVisitor
{
	abstract public function visit(Unit $node);

	public function visitArcher(Archer $node)
	{
		$this->visit($node);
	}

	public function visitCavalry(Cavalry $node)
	{
		$this->visit($node);
	}

	public function visitLaserCanonUnit(LaserCanonUnit $node)
	{
		$this->visit($node);
	}

	public function visitTroopCarrierUnit(TroopCarrierUnit $node)
	{
		$this->visit($node);
	}
	
	public function visitArmy(Army $node)
	{
		$this->visit($node);
	}
}
