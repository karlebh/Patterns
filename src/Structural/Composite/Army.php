<?php

namespace Caleb\Structural\Composite;

class Army extends Unit 
{
	private array $units = [];

	public function addUnit(Unit $unit)
	{
		if (in_array($unit, $this->units)) {
			return;
		}

		$this->units[] = $unit;
	}

	public function removeUnit(Unit $unit)
	{
		$index = array_search($unit, $this->units, true);

		if (is_int($index)) {
			// array_splice($this->units, $index, 1, []);
			unset($this->units[$index]);
		}
	}

	public function bombardStrength(): int
	{
		$value = 0;

		foreach ($this->units as $unit) {
			$value += $unit->bombardStrength();
		}

		return $value;
	}
}