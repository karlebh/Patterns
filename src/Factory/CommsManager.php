<?php
namespace Caleb\Factory;

class CommsManager
{
	public function getApptEncoder(): ApptEncoder
	{
		return new BloggsApptEncoder();
	}
}