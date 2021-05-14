<?php

namespace Caleb\Behavioural\Strategy;

abstract class Question
{
	protected $prompt;
	protected $maker;

	public function __construct(string $prompt, Maker $maker)
	{
		$this->prompt = $prompt;
		$this->maker = $maker;
	}

	public function mark(string $response): bool 
	{
		return $this->marker->mark($response);
	}
}
