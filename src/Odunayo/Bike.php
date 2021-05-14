<?php
namespace Caleb\Odunayo;

use Caleb\Bolu\Piano;

require "../../vendor/autoload.php";


class Bike extends Piano
{
	public function __construct()
	{	
		$this->key();
		self::brake();
	}

	protected static function brake()
	{
		print "Stop Here. Coming form " . __namespace__;
	}
}


$bike = new Bike();
