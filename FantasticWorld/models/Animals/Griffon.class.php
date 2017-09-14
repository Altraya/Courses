<?php
/*
*	Griffon.class.php : Griffon object
*
*	Author : Karakayn
*/
class Griffon extends Kreatur implements IFLyable{
	
	private $_griffeColor;

	/*Constructeur*/
	public function __construct($donnees){
		$this->hydrate($donnees);
	}

	/***************************
		Accesseur of the class
	****************************/

	public function getGriffeColor(){
		return $this->_griffeColor;
	}

	/************************/

	public function setGriffeColor($griffeColor){
		$this->_griffeColor = $griffeColor;
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

	public function laceration()
	{
		$returnString = "";
		$returnString.=$this->getName();
		$returnString.=" lacère sa proie !";
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