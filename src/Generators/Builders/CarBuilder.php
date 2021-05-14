<?php

namespace Caleb\Generators\Builders;

class CarBuilder
{
	private Car $car;

	public function addDoors()
	{
		$this->car->setPart('rightDoor', new Door());
		$this->car->setPart('leftDoor', new Door());
		$this->car->setPart('leftDoor', new Door());
		$this->car->setPart('leftDoor', new Door());
	}

	public function addEngine()
	{
		$this->car->setPart('engine', new Engine());
		$this->car->setPart('engine', new Engine());
	}

	public function addWheels()
	{
		$this->car->setPart('wheel3', new Wheel());
		$this->car->setPart('wheel4', new Wheel());
		$this->car->setPart('wheel5', new Wheel());
	}

	public function createVehicle()
	{
		$this->car = new Car();
	}

	public function getVehicle(): Vehicle
	{
		return $this->car;
	}
}