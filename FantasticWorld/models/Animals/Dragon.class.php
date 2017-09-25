<?php
/*
*	Dragon.class.php : Dragon object
*
*	Author : Karakayn
*/

require_once('IFlyable.php');

class Dragon extends Kreatur implements IFlyable{
	
	private $_wingsColor;

	/*Constructeur*/
	public function __construct($donnees){
		$this->hydrate($donnees);
	}

	/***************************
		Accesseur of the class
	****************************/

	public function getWingsColor(){
		return $this->_wingsColor;
	}

	/************************/

	public function setWingsColor($wingsColor){
		$this->_wingsColor = $wingsColor;
	}

	/************************/

	public function hydrate($donnees)
	{
		foreach($donnees as $key => $value)
		{
			// On récupère le nom du setter correspondant à l'attribut.
			$method = 'set'.ucfirst($key);

			// Si le setter correspondant existe.
			if(method_exists($this, $method))
			{
				// On appelle le setter.
				$this->$method($value);
			}
		}
	}

	public function toString(){
		echo('Nom = '.$this->getName().', espece = '.$this->getSpecies().', couleur = '.$this->getColor().', proprio = '.$this->getOwner().', age = '.$this->getAge().', sexe = '.$this->getSex().' ');
	}

	public function spitFire()
	{
		$returnString = "";
		$returnString.=$this->getName();
		$returnString.=" crache du feu !";
		return $returnString;
	}

	public function fly()
	{
		$returnString = "";
		$returnString.=$this->getName();
		$returnString.=" vole !";
		return $returnString;
	}
	
}
?>