<?php 

class RebelShip extends AbstractShip{

	public function getFavoriteJedi(){

		$coolJedi = array('Yodha','Ben Kenobi');
		$key = array_rand($coolJedi);

		return $coolJedi[$key];
	}

	public function getType(){
		return 'Rebel';
	}

	public function isFunctional(){
		return true;
	}


	public function getNameAndSpecs($userShortFormat=false){
		$val = parent::getNameAndSpecs($userShortFormat=false);
		$val.= ' (Rebel)';
		return $val;	
	}

	public function getJediFactor(){
		return mt_rand(1,100);
	}

}

 ?>