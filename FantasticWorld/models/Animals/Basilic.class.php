<?php
/*
*	Basilic.class.php : Basilic object
*
*	Author : Karakayn
*/
class Basilic extends Kreatur{
	
	private $_widthOfCrocs;

	/*Constructeur*/
	public function __construct($donnees){
		$this->hydrate($donnees);
	}

	/***************************
		Accesseur of the class
	****************************/

	public function getWidthOfCrocs(){
		return $this->_widthOfCrocs;
	}

	/************************/

	public function setWidthOfCrocs($widthOfCrocs){
		$this->_widthOfCrocs = $widthOfCrocs;
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

	public function bite()
	{
		$returnString = "";
		$returnString.=$this->getName();
		$returnString.=" mord quelque chose !";
		return $returnString;
	}
	
	public function petrified()
	{
		$returnString = "";
		$returnString.=$this->getName();
		$returnString.=" petrifie sa cible !";
		return $returnString;
	}
}
?>