<?php

namespace Caleb\Generators\Builders;


interface Builder
{
	public function createVehicle();

	public function addDoors();

	public function addEngine();

	public function addWheels();

	public function getVehicle(): Vehicle;
}