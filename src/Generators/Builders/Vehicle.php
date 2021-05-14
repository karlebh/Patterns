<?php

namespace Caleb\Generators\Builders;

abstract class Vehicle
{
	protected array $data = [];

	public function setPart(string $Key, object $value)
	{
		$this->data[$Key] = $value;
	}

}