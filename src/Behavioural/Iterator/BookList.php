<?php declare(strict_types=1);

namespace Caleb\Behavioural\Iterator;

use Countable;
use Iterator;

class BookList /*implements Countable, Iterator*/
{
	private array $books = [];

	private int $currentIndex = 0;

	public function addBook(Book $book)
	{
		$this->books[] = $book;
	}

	public function removeBook(Book $book)
	{
		$index = array_search($book, $this->books);

		if ($index) {
			unset($this->books[$index]);
		}

        $this->books = array_values($this->books);
	}

	public function count(): int 
	{
		return count($this->books);
	}

	public function current(): Book
	{
		return $this->books[$this->currentIndex];
	}

	public function key(): int
	{
		return $this->currentIndex;
	}

	public function next()
	{
		return $this->currentIndex++;
	}

	public function rewind()
	{
		$this->currentIndex = 0;
	}

	public function valid(): bool 
	{
		return isset($this->books[$this->currentIndex]);
	}

}