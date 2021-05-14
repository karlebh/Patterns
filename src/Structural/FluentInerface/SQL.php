<?php

namespace Caleb\Structural\FluentInterface;

class SQL
{
	private array $fields = [];

	private array $from = [];

	private array $where = [];


	public function select(array $fields): SQL
	{
		$this->fields = $fields;

		return $this;
	}

	public function from(string $table, string $alias = null):SQL
	{
		$stmt = $alias ? $table . ' AS ' . $alias : $table;

		$this->from[] = $stmt;

		return $this;
	}

	public function where(string $condition): SQL
	{
		$this->where[] = $condition;

		return $this;
	}

	public function __toString(): string
	{
		return sprintf(
			"SELECT %s FROM %s WHERE %s",
			join(",", $this->fields),
			join(",", $this->from),
			join(" AND ", $this->where)
		);
	}
}