<?php

namespace Caleb\Generators;

class Singleton
{
	private array $props = [];

	private static $instance;

	private function __construct() {}

	private function __clone() {}

	private function __wakeup() {}

	public static function getInstance()
	{
		if (empty(self::$instance)) {
			self::$instance = new static();
		}
		return self::$instance;
	}

	public function setProperty(string $key, string $value)
	{
		$this->props[$key] = $value;
	}

	public function getProperty(string $key): string
	{
		return $this->props[$key];
	}

}

$s = Singleton::getInstance();
$s->setProperty('Caleb', 'Boy');
print $s->getProperty('Caleb');