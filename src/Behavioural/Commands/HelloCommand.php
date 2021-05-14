<?php

namespace Caleb\Behavioural\Commands;

class HelloCommand implements Command
{
	private Reciever $output;

	public function __construct(Reciever $console)
	{
		$this->output = $console;
	}

	public function execute()
	{
		$this->output->write("Hello World");
	}
}