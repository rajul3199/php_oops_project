<?php 

class Container{

	private $pdo;
	private $dbDsn;
	private $dbUser;
	private $dbPass;
	private $shipLoder;
	private $shipStorage;
	private $battleManager;

	public function __construct(array $configuration){
		$this->dbDsn = $configuration['db_dsn'];
		$this->dbUser = $configuration['db_user'];
		$this->dbPass = $configuration['db_pass'];
	}

	public function getPDO(){

		if ($this->pdo === null) {
			
		$this->pdo = new PDO($this->dbDsn,$this->dbUser,$this->dbPass);
		
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}		

		return $this->pdo;
	}

	public function getShipLoder(){
		if($this->shipLoder === null){
			$this->shipLoder = new shipLoder($this->getShipStorage());
		}
		return $this->shipLoder;
	}


	public function getShipStorage(){
		if($this->shipStorage === null){
			//$this->shipStorage = new PdoShipStorage($this->getPDO());
			$this->shipStorage = new JsonFileShipStorage('resources/ships.json');
		}
		return $this->shipStorage;
	}

	public function getBattleManager(){
		if($this->battleManager === null){
			$this->battleManager = new BattleManager();
		}
		return $this->battleManager;

	}
}