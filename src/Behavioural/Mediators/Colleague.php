<?php

namespace Caleb\Behavioural\Mediators;

abstract class Colleague
{
	protected Mediator $mediator;

	public function setMediatro(Mediator $mediator)
	{
		$this->mediator = $mediator;
	}
}