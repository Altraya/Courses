<?php
/* Home view */

class HomeView{

	public function __construct(){
	}

	//title and description of the marche
	public function intro($tabStatzoo, $tabHistoricAction){

		$html = "";
		$html.= '
		<div class="row description">
			<div class="small-12 large-12 columns">
					<h1>Actualites du Zoo</h1>
				<hr/>
			</div>
			<div class="small-12 large-12 columns">
				<div class="center">
					<h2>Statistiques du zoo</h2>
				</div>
				<hr/>
				'.$tabStatzoo.'
			</div>
			<div class="small-12 large-12 columns">
				<div class="center">
					<h2>Qu\'est ce qui ce trame dans votre zoo ?</h2>
				</div>
				<hr/>
				'.$tabHistoricAction.'
			</div>
			
		</div>
		';

		echo($html);
	}

	public function tabStatisticZoo($statsZoo){
		$html = "";
		if($statsZoo != null)
		{
			$html.='		

			
				<div class="small-12 large-12 columns">';
			$html.= '<table class="min">';
			foreach ($statsZoo as $zoos => $zoo) {
				/*$html .= '
						<tr>
						   <td>'. $event->getIdEvent() .'</td>
						   <td>'. $event->getDescription() .'</td>
						   <td>'. $event->getDateEvent() .'</td>
						</tr>
						';*/
			}
			$html .= '</table>';
			$html .= '

				</div>
		
			';

			$html .= '
		';
		}else{
			$html.='<div class="small-12 large-12 columns">';
			$html.='<table class="min">
							<td>No data</td>
						</tr>
					</table>';
			$html.='<div>';

		}
		
		return $html;
	}

}
?>