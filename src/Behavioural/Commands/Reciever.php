<?php

namespace Caleb\Behavioural\Commands;

class Reciever
{
	private bool $enableDate = false;

	private array $output = [];

	public function write(String $str)
	{
		if ($this->enableDate) {
			$str .= "[" . date('Y-m-d') . "]";
		}

		$this->output[] = $str;
	}

	public function getOutput(): string 
	{
		return join("\n", $this->ouput);
	}

	public function enableDate()
	{
		$this->enableDate = true;
	}

	public function disableDate()
	{
		$this->enableDate = false;
	}
}