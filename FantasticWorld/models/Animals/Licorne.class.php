<?php
/*
*	Licorne.class.php : Unicorn object
*
*	Author : Karakayn
*/
class Licorne extends Kreatur{
	
	private $_cornColor;

	/*Constructeur*/
	public function __construct($donnees){
		$this->hydrate($donnees);
	}

	/***************************
		Accesseur of the class
	****************************/

	public function getCornColor(){
		return $this->_cornColor;
	}

	/************************/

	public function setCornColor($cornColor){
		$this->_cornColor = $cornColor;
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

	public function empale()
	{
		$returnString = "";
		$returnString.=$this->getName();
		$returnString.=" empale sa cible !";
		return $returnString;
	}
	
}
?>