<?php
/*
*	Hydre.class.php : Hydre object
*
*	Author : Karakayn
*/
class Hydre extends Kreatur{
	
	private $_tailColor;

	/*Constructeur*/
	public function __construct($donnees){
		$this->hydrate($donnees);
	}

	/***************************
		Accesseur of the class
	****************************/

	public function getTailColor(){
		return $this->_tailColor;
	}

	/************************/

	public function setTailColor($tailColor){
		$this->_tailColor = $tailColor;
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

	public function griffe()
	{
		$returnString = "";
		$returnString.=$this->getName();
		$returnString.=" griffe quelque chose !";
		return $returnString;
	}
	
}
?>