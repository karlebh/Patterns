<?php

namespace Caleb\Behavioural\Strategy;

abstract class Mark 
{
	protected $test;

	public function __construct(string $test)
	{
		$this->test = $test;
	}

	abstract public function mark(string $response): bool;
}