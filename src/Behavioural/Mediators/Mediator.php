<?php

namespace Caleb\Behavioural\Mediators;

interface Mediator
{
	public function getUser(string $user): string
}