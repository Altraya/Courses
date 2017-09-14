<?php
/*
*	Event.class.php : Event object
*
*	Author : Karakayn
*/
class Event{

	private $_idEvent;			//event's id
	private $_description;		//his Description
	private $_idZoo;			//his password (crypt)
	private $_dateEvent;		//his DateEvent
	
	
	/*Constructeur*/
	public function __construct($donnees){
		$this->hydrate($donnees);
	}

	/***************************
		Accesseur de la classe
	****************************/

	public function getIdEvent(){
		return $this->_idEvent;
	}

	public function getDescription(){
		return $this->_description;
	}

	public function getIdZoo(){
		return $this->_idZoo;
	}

	public function getDateEvent(){
		return $this->_dateEvent;
	}

	/************************/

	public function setIdEvent($idEvent){
		$this->_idEvent = intval($idEvent);
	}

	public function setDescription($description){
		$this->_description = htmlspecialchars($description);
	}

	public function setIdZoo($IdZoo){
		$this->_idZoo = intval(htmlspecialchars($IdZoo));
	}

	public function setDateEvent($date){
		$this->_dateEvent = htmlspecialchars($date);
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
		echo('Description = '.$this->getDescription().', idZoo = '.$this->getIdZoo().', Date event = '.$this->getDateEvent().' ');
	}


}
?>