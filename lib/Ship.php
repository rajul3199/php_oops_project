<?php 

class Ship{
	private $name;
	private $weaponPower = 0;
	private $jediFactor = 0;
	private $strength = 0;

	public function setName($name){
		$this->name = strtoupper($name);
	}

	public function getName(){
		return $this->name;
	}

	public function setWeaponPower($weaponPower){
		$this->weaponPower = $weaponPower;
	}
	public function getWeaponPower(){
		return $this->weaponPower;
	}

	public function setJediFactor($jediFactor){
		$this->jediFactor = $jediFactor;
	}
	public function getJediFactor(){
		return $this->jediFactor;
	}

	public function setStrength($strength){

		if (!is_numeric($strength)) {
			throw new Exception("Invalid Strength Passed".$strength);
			
		}
		$this->strength = $strength;
	}

	public function getStrength(){
		return $this->strength;
	}
	public function getNameAndSpecs($userShortFormat=false){
		if ($userShortFormat) {
			return sprintf(
			'%s: %s/%s/%s',
			$this->name,
			$this->weaponPower,
			$this->jediFactor,
			$this->strength
		);
		} else {
			return sprintf(
			'%s: w:%s, j:%s, s:%s',
			$this->name,
			$this->weaponPower,
			$this->jediFactor,
			$this->strength
		);
		}	
	}

	public function doesGivenShipHasMoreStrength($givenShip){
		return $givenShip->strength > $this->strength;
	}
}

