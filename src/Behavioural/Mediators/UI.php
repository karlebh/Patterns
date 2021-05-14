<?php

namespace Caleb\Behavioural\Mediators;

class UI extends Colleague
{
	public function outputUserInfo(string $username)
	{
		echo $this->mediator->getUser($username);
	}
}