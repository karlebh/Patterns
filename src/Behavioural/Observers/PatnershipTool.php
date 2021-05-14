<?php

namespace Caleb\Behavioural\Observers;

class PatnershipTool extends LoginObserver
{
	public function doUpdate(Login $login)
	{
		$status = $login->getStatus();
		if ($status[0] === Login::LOGIN_WRONG_PASS) {
			print __CLASS__ . "do some patnership thingy";
		}
	}
}