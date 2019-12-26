<?php 

abstract class AbstractShip{
	private $id;
	private $name;
	private $weaponPower = 0;
	
	private $strength = 0;

	abstract public function getJediFactor();

	abstract public function getType();

	abstract public function isFunctional();

	public function __construct($name){
		$this->name = $name;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getId(){
		return $this->id;
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
			$this->getJediFactor(),
			$this->strength
		);
		} else {
			return sprintf(
			'%s: w:%s, j:%s, s:%s',
			$this->name,
			$this->weaponPower,
			$this->getJediFactor(),
			$this->strength
		);
		}	
	}

	public function doesGivenShipHasMoreStrength($givenShip){
		return $givenShip->strength > $this->strength;
	}

}