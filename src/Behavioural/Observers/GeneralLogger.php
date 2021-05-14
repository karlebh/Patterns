<?php

namespace Caleb\Behavioural\Observers;

class GeneralLogger extends LoginObserver
{
	public function doUpdate(Login $login)
	{
		$status = $login->getStatus();
		if ($status[0] === Login::LOGIN_WRONG_PASS) {
			print __CLASS__ . "add login data to log";
		}
	}
}