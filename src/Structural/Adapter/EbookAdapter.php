<?php

namespace Caleb\Structural\Adapter;

class EbookAdapter implements Book
{
	protected Ebook $eBook;

	public function __construct(Ebook $eBook)
	{
		$this->eBook = $eBook;
	}

	public function open()
	{
		$this->eBook->unlock();
	}

	public function turnPage()
	{
		$this->eBook->pressNext();
	}

	public function getPage(): int 
	{
		return $this->eBook->getPage()[0];
	}

}