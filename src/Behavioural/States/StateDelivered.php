<?php

namespace Caleb\Behavioural\States;

class StateDelivered implements State 
{
	public function proceedToNext(OrderContext $context) {}
	

	public function toString(): string
	{
		return "Order Delivered";
	}
}