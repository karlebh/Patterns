<?php

namespace Caleb\Structural\Adapter;

class Kindle implements Ebook
{
	private int $page = 1;

	private int $totalPages;

	public function pressNext()
	{
		$this->page++;
	}

	public function unlock()
	{

	}

	public function getPage(): array
	{
		return [$this->page, $this->totalPages];
	}
}