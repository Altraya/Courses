<?php

/**
* 	EventView.class.php : Specific view for the event
*
*	Author : Karakayn
*/
class EventView{

	/*Constructeur*/
	public function __construct(){
	}


	//list event
	public function eventList($tabEvents){
		$html = "";
		if($tabEvents != null)
		{
			$html.='		

			
				<div class="small-12 large-12 columns">';
			$html.= '<table class="min">';
			foreach ($tabEvents as $events => $event) {
				$html .= '
						<tr>
						   <td>'. $event->getIdEvent() .'</td>
						   <td>'. $event->getDescription() .'</td>
						   <td>'. $event->getDateEvent() .'</td>
						</tr>
						';
			}
			$html .= '</table>';
			$html .= '

				</div>
		
			';

			$html .= '
		';
		}else{
			$html.='<div class="small-12 large-12 columns">';
			$html.='<p>Rien de particulier n\'est survenue récemment</p>';
			$html.='<div>';

		}
		
		return $html;
	
	}


};
?>