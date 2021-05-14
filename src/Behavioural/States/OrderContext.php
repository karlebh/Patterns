<?php

namespace Caleb\Behavioural\States;

class OrderContext
{
	private State $state;

	public static function create(): OrderContext
	{
		$order = new self();
		$order->state = new StateCreated();

		return $order;
	}

	public function setState(State $state)
	{
		$this->state = $state;
	}

	public function proceedToNext()
	{
		$this->state->proceedToNext();
	}

	public function toString()
	{
		return $this->state->toString();
	}
}