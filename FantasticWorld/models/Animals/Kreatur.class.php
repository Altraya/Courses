<?php
/*
*	Kreatur.class.php : Kreatur object
*
*	Author : Karakayn
*/
abstract class Kreatur{

	protected $_id;				//Kreatur's id
	protected $_name;				//his name
	protected $_species;			//his species
	protected $_color;			//his color
	protected $_age;				//his age
	protected $_owner;			//his owner
	protected $_sex;				//his sex
	protected $_life;				//0 to 100 -- if life rich 0 the kreatur is dead
	protected $_satisfaction; 	//0 to 5 -- general satisfaction of the kreatur
	protected $_play;				//0 to 5 -- need to play of the kreatur : 5 mean it is satisfied 
	protected $_food;				//0 to 5 -- need in food 
	protected $_drink;			//0 to 5 -- need in water
	protected $_sleep;			//0 to 5 -- need in sleep
	protected $_biomeSatisfaction;//0 to 5 -- satisfaction about the biome
	protected $_alive;			//true or false
	protected $_typeNourriture; //like fish or meat
	protected $_foodQuantityNeededPerDay; //in kg -> like 2kg
	protected $_gestationDuration;
	protected $_maximumBabyPerGestation;
	protected $_children;	//list of childrens kreaturs
	protected $_mother;
	protected $_father;
	protected $_idZoo;
	
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

	public function getName(){
		return $this->_name;
	}

	public function getSpecies(){
		return $this->_species;
	}

	public function getColor(){
		return $this->_color;
	}

	public function getOwner(){
		return $this->_owner;
	}

	public function getAge(){
		return $this->_age;
	}

	public function getSex(){
		return $this->_sex;
	}

	/************************/

	public function setId($id){
		$this->_id = $id;
	}

	public function setName($name){
		$this->_name = htmlspecialchars($name);	
	}

	public function setSpecies($species){
		$this->_species = htmlspecialchars($species);	
	}

	public function setColor($color){
		$this->_color = htmlspecialchars($color);	
	}

	public function setOwner($owner){
		$this->_owner = htmlspecialchars($owner);	
	}

	public function setAge($age){
		$this->_age = htmlspecialchars($age);	
	}

	public function setSex($sex){
		$this->_sex = htmlspecialchars($sex);
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

	public function mange($food)
	{
		$returnString = "";
		$returnString.=$this->getName();
		$returnString.=" mange du ";
		$returnString.=$food;
		return $returnString;
	}

	public function walk()
	{
		$returnString = "";
		$returnString.=$this->getName();
		$returnString.=" se balade";
		return $returnString;
	}

	public function sleep()
	{
		$returnString = "";
		$returnString.=$this->getName();
		$returnString.=" dors";
		return $returnString;
	}

	public function needs()
	{
		$returnString = "";
		$returnString.=$this->getName();
		$returnString.=" fait ses besoins";
		return $returnString;
	}

	public function play($object)
	{
		$returnString = "";
		$returnString.=$this->getName();
		$returnString.=" joue avec un(e)";
		$returnString.=$object;
		return $returnString;
	}
}
?>