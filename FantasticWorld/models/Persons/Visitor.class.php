<?php
/*
*	Visitor.class.php : Visitor object
*
*	Author : Karakayn
*/
class Visitor extends Person{
			
	private $_moneyAtbeginning;
	private $_moneyAtTheEnd;
	private $_moneyCurrentlyAvailable;
	private $_satisfaction; //0 to 5
	private $_drinkNeed; //0 to 5
	private $_foodNeed; //0 to 5
	private $_giftNeed; //0 to 5
	private $_entertainmentNeed; //0 to 5
	
	/*Constructeur*/
	public function __construct($donnees){
		$this->hydrate($donnees);
	}

	/***************************
		Accesseur of the class
	****************************/

	public function getMoneyAtbeginning(){
		return $this->_moneyAtbeginning;
	}

	public function getMoneyAtTheEnd(){
		return $this->_moneyAtTheEnd;
	}

	/************************/

	public function setMoneyAtbeginning($moneyAtbeginning){
		$this->_moneyAtbeginning = htmlspecialchars($moneyAtbeginning);
	}

	public function setMoneyAtTheEnd($moneyAtTheEnd){
		$this->_moneyAtTheEnd = htmlspecialchars($moneyAtTheEnd);
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

}
?>