<?php

namespace Caleb\Behavioural\Strategy;

class MarkLogicMarker extends Mark 
{
	private $engine;

	public function __construct(string $test)
	{
		parent::__construct($test);
		$this->engine = new MarkParse($test);
	} 

	public function mark(string $response): bool
	{
		return $this->engine->evaluate($response);
	}
}