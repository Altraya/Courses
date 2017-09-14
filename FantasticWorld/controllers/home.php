<?php
	/* Home controller */

	require_once("./views/GeneralView.class.php");
	require_once("./views/HomeView.class.php");

	$view = new GeneralView();
	$HomeView = new HomeView();

	$view->header("FantasticWorld - Accueil");
		$view->topBar();

		//if the player is not connected -> error message
		//if($_SESSION['playersId'] == NULL){
		if(!isset($_SESSION['playersId'])){
			$viewG->notConnected();

		}else{			
			//else displays players' kreaturs
			require_once('./private/config.php');
			require_once('./models/Event.class.php');
			require_once('./views/EventView.class.php');
			require_once('./models/EventManager.class.php');
			
			

			$viewEvent = new EventView();

			$eventManager = new EventManager($db);

			//TODO to CHANGE
			$listEvent = $eventManager->getLastEvents(1);

			$statsZoo = null;


			$HomeView->intro($HomeView->tabStatisticZoo($statsZoo) ,$viewEvent->eventList($listEvent));
			
		}
	$view->endPage();
?>