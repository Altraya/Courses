<?php
/*
*	EventManager.class.php : Manage events
*
*	
*	Author : Karakayn
*/
require_once('Event.class.php');

class EventManager{
	
	private $_db;

	public function __construct($db){
		$this->setDb($db);
	}

	public function setDb(PDO $db){
		$this->_db = $db;
	}

	public function getLastEvents($idZoo){

		$events = array();
		$req = $this->_db->query('SELECT evenement.idEvent, evenement.description,evenement.idZoo, evenement.dateEvent FROM evenement JOIN zoo ON evenement.idZoo = zoo.id WHERE zoo.id = \''.$idZoo.'\' ORDER BY evenement.idEvent');
		while ($donnees = $req->fetch(PDO::FETCH_ASSOC)) {
			$dataEvent['idEvent'] = $donnees['idEvent'];
			$dataEvent['description'] = $donnees['description'];
			$dataEvent['idZoo'] = $donnees['idZoo'];
			$dataEvent['dateEvent'] = $donnees['dateEvent'];
			$events[] = new Event($dataEvent);
		}
		$req->closeCursor();
		return $events;
	}

}
?>