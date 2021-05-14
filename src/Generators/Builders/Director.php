<?php

namespace Caleb\Generators\Builders;

class Director 
{
	public function build(Builder $builder): Vehicle
	{
		$builder->createVehicle();
		$builder->addDoors();
		$builder->addEngine();
		$builder->addWheels();

		return $builder->getVehicle();
	}
}