<?php 

require 'lib/Ship.php';

/**
* @param Ship $someShip
*/

function printShipSummry($someShip){
	$someShip->sayHello();
	echo "<hr/>";
	echo $someShip->getName();
	echo "<hr/>";
	echo $someShip->getNameAndSpecs(false);
	echo "<hr/>";
	echo $someShip->getNameAndSpecs(true);
}


$myShip = new ship();

$myShip->name = 'Jedi Factor';
$myShip->weaponPower = 10;
$myShip->strength = 100;

$otherShip = new Ship();
$otherShip->name = 'Imperial Shuttle';
$otherShip->weaponPower = 5;
$otherShip->strength = 50;

printShipSummry($myShip);

echo "<hr/>";

printShipSummry($otherShip);

echo "<hr/>";

if ($myShip->doesGivenShipHasMoreStrength($otherShip)) {
	echo $otherShip->name.' has more Strength';
}else{
	echo $myShip->name.'has more Strength';
}

//echo "It'a TRAAAAAPPPPPPPPPPPP";
 ?>