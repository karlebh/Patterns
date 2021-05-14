<?php

namespace Caleb\Behavioural\Commands;

class AddMessageDateCommand implements UndoableCommand
{
	private Reciever $output;

	public function __construct(Reciever $console)
	{
		$this->ouput = $console;
	}

	public function execute()
	{
		$this->output->enableDate();
	}

	public function undo()
	{
		$this->output->disableDate();

	}
}