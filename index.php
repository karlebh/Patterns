<?php

require "vendor/autoload.php";

// $piano = new Caleb\Bolu\Piano();
// print $piano->key();

// print "<br />";

// $car = new Caleb\Car();

// new Caleb\Generators\Builders\Truck();
// $builder = new Caleb\Generators\Builders\TruckBuilder();
// $builder->createVehicle();
// $builder->addWheels();
// $builder->addEngine();
// $truck = $builder->getVehicle();
// print "<br />";
// print_r($truck);
// print "<br />";

// $a = ['a', 'b', 'c'];
// print_r($a);

// //Decorator Usage

// $tile = new Plains();
// print $tile->getWealthFactor(); // 2

// $tile = new DiamondDecorator(new Plains());
// print $tile->getWealthFactor(); // 4

// $tile = new PollutionDecorator(new DiamondDecorator(new Plains()));
// print $tile->getWealthFactor(); // 0

//Observer
// $login = new Caleb\Behavioural\Observers\Login();
// print_r(new Caleb\Behavioural\Observers\SecurityMonitor($login));
// new Caleb\Behavioural\Observers\GeneralLogger($login);
// new Caleb\Behavioural\Observers\PatnershipTool($login);


//Visitor

// $main_army = new Army();
// $main_army->addUnit(new Archer());
// $main_army->addUnit(new LaserCanonUnit());
// $main_army->addUnit(new Cavalry());
// $textdump = new TextDumpArmyVisitor();
// $main_army->accept($textdump);
// print $textdump->getText();

//Iterator

$it = new Caleb\Behavioural\Iterator\BookList();
$bk1 = new Caleb\Behavioural\Iterator\Book(
	'Caleb Odunayo',
	'Time flies'
);

$bk2 = new Caleb\Behavioural\Iterator\Book(
	'Caleb Akeju',
	'It\'s alright'
);
$bk3 = new Caleb\Behavioural\Iterator\Book(
	'Burna Boy',
	'23'
);
$bk4 = new Caleb\Behavioural\Iterator\Book(
	'Falz',
	'Sweet Boy'
);

$it->addBook($bk1);
$it->addBook($bk2);
$it->addBook($bk3);
$it->addBook($bk4);

$it->removeBook($bk3);
echo "<br />";
echo "<br />";

print_r($it);