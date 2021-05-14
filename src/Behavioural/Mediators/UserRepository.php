<?php

namespace Caleb\Behavioural\Mediators;

class UserRepository extends Colleague
{
	public function getUserName(string $user): string
	{
		return 'User: ' . $user;
	}
}