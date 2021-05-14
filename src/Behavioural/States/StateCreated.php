<?php

namespace Caleb\Behavioural\States;

class StateCreated implements State 
{
	public function proceedToNext(OrderContext $context)
	{
		$context->setState(new StateShipped());
	}

	public function toString(): string
	{
		return "State created";
	}
}