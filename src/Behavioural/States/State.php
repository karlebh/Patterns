<?php

namespace Caleb\Behavioural\States;

interface State
{
	public function proceedToNext(OrderContet $order);

	public function toString(): string;

}