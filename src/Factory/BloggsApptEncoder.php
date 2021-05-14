<?php
namespace Caleb\Factory;


class BloggsApptEncoder extends ApptEncoder 
{
	public function encode(): string 
	{
		return "Appointment data encoded in BloggsCal format\n";
	}
}
