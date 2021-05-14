<?php

namespace Caleb\Structural\Composite;

abstract class CompositeUnit extends Unit
{
	public array $units = [];


	public function addUnit(Unit $unit)
	{
		foreach ($this->units as $thisUnit) {
			if ($unit === $thisUnit) {
				return;
			}
		}

		$unit->setDepth($this->depth + 1);
		$this->units[] = $unit;
	}

	public function accept(ArmyVisitor $visitor)
	{
		parent::accept($visitor);

		foreach ($this->units as $thisUnit) {
			$thisUnit->accept($visitor);
		}
	}
}