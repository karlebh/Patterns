<?php

namespace Caleb\Behavioural\Observers;

interface Observable
{
	public function attach(Observer $observer);

	public function detach(Observer $observer);

	public function notify();
}
