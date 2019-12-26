<?php 

class BattleResult
{
	private $usedJediPowers;
	private $winningShip;
	private $losingShip;

	public function __contruct($usedJediPowers,AbstractShip $winningShip,AbstractShip $losingShip){
		$this->$usedJediPowers = $usedJediPowers;
		$this->$winningShip = $winningShip;
		$this->$losingShip = $losingShip;
	}

	public function wereJediPowers(){
		return $this->usedJediPowers;
	}

	public function getWinningShip(){
		return $this->winningShip;
	}

	public function getLosingShip(){
		return $this->losingShip;
	}

	public function isThereAWinner(){
		return $this->getWinningShip() !== null;
	}

}
 ?>