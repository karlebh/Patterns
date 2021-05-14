<?php

namespace Caleb\Generators\Builders;

class TruckBuilder implements Builder
{
	private Truck $truck;

	public function addDoors()
	{
		$this->truck->setPart('rightDoor', new Door());
		$this->truck->setPart('leftDoor', new Door());
	}

	public function addEngine()
	{
		$this->truck->setPart('engine', new Engine());
	}

	public function addWheels()
	{
		$this->truck->setPart('wheel1', new Wheel());
		$this->truck->setPart('wheel2', new Wheel());
		$this->truck->setPart('wheel3', new Wheel());
		$this->truck->setPart('wheel4', new Wheel());
		$this->truck->setPart('wheel5', new Wheel());
	}

	public function createVehicle()
	{
		$this->truck = new Truck();
	}

	public function getVehicle(): Vehicle
	{
		return $this->truck;
	}
}

