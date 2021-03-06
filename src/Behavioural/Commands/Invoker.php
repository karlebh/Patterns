<?php

namespace Caleb\Behavioural\Commands;

class Invoker 
{
	private Command $command;

	public function setCommand(Command $command)
	{
		$this->command = $command;
	}

	public function run()
	{
		$this->command->execute();
	}

}