<?php

namespace Caleb\Structural\Adapter;

interface EBook 
{
	public function unlock();

	public function pressNext();

	public function getPage(): array;
}