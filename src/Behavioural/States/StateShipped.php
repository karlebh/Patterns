<?php

namespace Caleb\Behavioural\States;

class StateShipped implements State 
{
	public function proceedToNext(OrderContext $context)
	{
		$context->setState(new StateDelivered());
	}

	public function toString(): string
	{
		return "Order Shipped";
	}
}