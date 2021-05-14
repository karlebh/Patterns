<?php

namespace Caleb\Behavioural\Commands;

interface UndoableCommand
{
	public function undo();
}