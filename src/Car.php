<?php

namespace Caleb;

class Car 
{
	public function __construct()
	{
		return $this->welcome();
	}

	protected function welcome()
	{
		print "Welcome to " . __namespace__;
	}
}