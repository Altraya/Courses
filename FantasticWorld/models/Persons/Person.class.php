<?php
/*
*	Person.class.php : Person object
*
*	Author : Karakayn
*/
abstract class Person{

	protected $_id;				
	protected $_firstname;
	protected $_lastname;
	protected $_birthdate;
	
	/*Constructeur*/
	public function __construct($donnees){
		$this->hydrate($donnees);
	}

	/***************************
		Accesseur of the class
	****************************/

	public function getId(){
		return $this->_id;
	}

	public function getFirstName(){
		return $this->_firstname;
	}

	public function getLastname(){
		return $this->_lastname;
	}

	public function getBirthdate(){
		return $this->_birthdate;
	}

	public function getAge()
	{
		$date = new DateTime($this->getBirthdate());
		$now = new DateTime();
		$interval = $now->diff($date);
		return $interval->y;
	}

	/************************/

	public function setId($id){
		$this->_id = $id;
	}

	public function setFirstname($firstname){
		$this->_firstname = htmlspecialchars($firstname);	
	}

	public function setLastname($lastname){
		$this->_lastname = htmlspecialchars($lastname);	
	}

	public function setDatenaissance($birthdate){
		$this->_birthdate = htmlspecialchars($birthdate);
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