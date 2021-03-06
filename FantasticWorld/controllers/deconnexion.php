<?php
	/*
		deconnexion.php : deconnexion controller

		Author : Karakayn
	*/

	require_once('./views/GeneralView.class.php');
	require_once('./views/InscriptionView.class.php');

	$viewG = new GeneralView();
	$view = new InscriptionView();
	
	$viewG->header("FantasticWorld - Deconnexion");
	$viewG->topBar();

		//destroy session variable => deconnexion
		$_SESSION = array();
		session_destroy();

		$view->successDeconnexion();

	$viewG->endPage();

?>