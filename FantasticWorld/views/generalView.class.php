<?php
/* Vue général */

class GeneralView{

	public function __construct(){
	}

	public function header($pageTitle){
		session_start();
		$html = "";
		$html.= '
		<!doctype html>
		<html lang="fr">
			<head>
				<meta charset="utf-8">
				<title>'.$pageTitle.'</title>
				<link rel="stylesheet" href="css/foundation.css">
				<link rel="stylesheet" href="css/normalize.css">
				<link rel="stylesheet" href="css/foundation-icons/foundation-icons.css">
				<link rel="stylesheet" href="css/style.css">				
				<script src="js/vendor/jquery.js"></script>
				<script src="js/foundation.min.js"></script>
				<script src="js/vendor/modernizr.js"></script>
			</head>
		<body>';

		echo($html);
	}

	//pin up the topBar of the site
	public function topBar(){
		$html = "";
		$html.='	
		<div class="contain-to-grid sticky">		  	
			<nav class="top-bar" data-topbar role="navigation">
				<ul class="title-area">
					<li class="name">
						<h1><a href="index.php">FantasticWorld</a></h1>
					</li>
					<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
					<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
				</ul>

				<section class="top-bar-section">
					<!-- Right Nav Section -->
					<ul class="right">
						
						<li class="has-dropdown">
							<a href="#">Zoo</a>
							<ul class="dropdown">
					  			<li><a href="home.php">Home</a></li>
					  			<li><a href="antre.php">Animaux</a></li>
							  	<li><a href="buildings.php">Batiments</a></li>							  	
							  	<li><a href="employes.php">Employés</a></li>
							  	<li><a href="visitors.php">Visiteurs</a></li>
							</ul>
						</li>

						<li class="has-dropdown">
							<a href="#">Animaux</a>
							<ul class="dropdown">
							  	<li><a href="antre.php">Animaux</a></li>
							  	<li><a href="action.php">Reproduction</a></li>
							</ul>
						</li>
						
				';
				//if the player is connected : show deconnexion
			  	if(isset($_SESSION['playersId'])){
			  		$html.='				    					   
				      	<li class="active"><a href="deconnexion.php">Deconnexion</a></li>				   	 	
			  		';
				//else show connexion
				}else{
					$html.='	   
				      	<li class="active"><a href="connexion.php">Connexion</a></li>
			   	 	';
			   	}
$html.='
					</ul>
					
				</section>
			</nav>
		</div>
			  	';

		echo($html);
	}


	public function closeBody(){
		echo'</body>';
	}

	public function closeHTML(){
		echo'</html>';
	}


	//Close body and html and script for topbar
	public function endPage(){
		$html = '
				
			<script src="js/vendor/fastclick.js"></script>
			<script src="js/foundation.min.js"></script>
			<script>$(document).foundation();</script>

  			</body>
			</html>
		';
		echo($html);		
	}

	public function section(){
		echo"<section>";
	}

	//End of the section part
	public function endSection(){
		echo("</section>");		
	}

	//Footer
	public function footer(){
		$html = '
		<div class="row black_bg max footer">
            <div class="medium-12 columns">
    		
                <div class="row">
                    
                    FantasticWorld
                    
	            </div>
	        </div>
	    </div>
		';
		echo $html;
	}

	public function paragraph(){
		echo '<p>';
	}

	public function endParagraph(){
		echo'</p>';
	}

	public function notConnected(){
		echo'
		<div class="panel center margin2PourcentTop">
			<p> Vous n\'êtes pas connecté vous ne pouvez donc pas accéder à cette partie. <br/>
				<a href="inscription.php">Inscrivez vous</a> ou <a href="connexion.php">connectez vous</a> pour y accéder
			</p>
		</div>
		';
	}

	//open div for class row and class large-12 columns
	public function openRowMax()
	{
		$html = "";
		$html .= '

			<div class="row">
				<div class="large-12 columns">
		';
		echo($html);
	}

	public function closeDiv()
	{
		$html = '</div>';
		echo($html);
	}
}
?>