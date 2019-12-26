<?php

require 'lib/Model/AbstractShip.php';
require 'lib/Model/Ship.php';
require 'lib/Model/BrokenShip.php';
require 'lib/Model/RebelShip.php';
require 'lib/Service/BattleManager.php';
require 'lib/Service/AbstractShipStorage.php';
require 'lib/Service/ShipLoder.php';
require 'lib/Service/PdoShipStorage.php';
require 'lib/Service/JsonFileShipStorage.php';
require 'lib/Model/BattleResult.php';
require 'lib/Service/Container.php';

$configuration = array(
	'db_dsn' => 'mysql:host=localhost;dbname=oo_battle',
	'db_user' => 'root',
	'db_pass' => ''
);