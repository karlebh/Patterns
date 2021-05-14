<?php

namespace Caleb\Behavioural\Observers;

interface Observer
{
	public function update(Observable $observable);
}