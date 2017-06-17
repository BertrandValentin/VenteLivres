<?php 
class View{
	public static function rtv_Table($pParam, $pNom='', $pColID='', $pAction= ''){
		$out  = "";
		$titre= '<tr>';
		$titre_trt= false;

		foreach($pParam->data as $key => $element){
			$out .= '<tr class="RECH_FORM">';
			$colForm = '';
			foreach($element as $subkey => $subelement){
				if($titre_trt==false){
					$titre .= '<th>'.$subkey.'</th>';	
				}

				if ($pColID != '' && $pAction != '' && $subkey == $pColID){
					$colForm .= '<form action="'.$pAction.'" method="post" accept-charset="utf-8">';
					$colForm .= '<input type="hidden" name="RECH_FIC" value="'.$subelement.'" >';
					$colForm .= '<input type="submit" name="" value="Voir">';
					$colForm .= '</form>';
					$colForm = '<td name="td_form">'.$colForm.'</td>';
				}
				$out .= '<td>'.$subelement.'</td>' ;
			}

			if($titre_trt==false){
				$titre.= '</tr>';
			}
			$titre_trt= true;
			$out .= $colForm."</tr>";
		}
		$out = '<section ID="RESULT_'.$pNom.'"><article><table>'.$titre.$out.'</table></article></section>';
		return $out;
	}
	

	public static function rtv_Fiche($pParam){
		$out  = "";

		foreach($pParam->data as $key => $element){
			foreach($element as $subkey => $subelement){
				if($subkey == "#") {
					$id = 'identifiant';
				}
				else {
					$id = strtolower($subkey);
				}
				$out .= "<tr>";
				$out .= '<th>'.$subkey.'</th>' ;
				$out .= '<td id="'.$id.'">'.$subelement.'</td>' ;
				$out .= "</tr>";
			}
		}
		$out = '<table>'.$out.'</table>';
		return $out;
	}


	public static function rtv_Fiche_Admin($pParam, $pAction="", $pPK=""){
		$out = '<form method="post" action="'.$pAction.'">';
		$out .= '<input type="hidden" name="FormFiche" value="1">';
		$out .= '<input type="hidden" name="FormModeAjax" value="0">';

		foreach($pParam->data as $key => $element){
			foreach($element as $subkey => $subelement){
				$varReadOnly="";
				if($subkey==$pPK){
					$varReadOnly="readonly disabled";
				}
				$out .= '<p><label for="'.$subkey.'" class="FormFiche">'.$subkey.'</label> : <input type="text" name="'.
						$subkey.'" value="'.$subelement.'" '.$varReadOnly.' /></p>';
			}
		}
		$out .= '<input type="submit" name="" value="Valider">';
		$out .= '</form>';
		return $out;
	}


	public static function Rtv_Zone_rech($pAction, $pNom, $pRechVal, $pPlaceHolder){
		$ValRetour = '<section>';
		$ValRetour .= '<article>';
		$ValRetour .= '<form action="'.$pAction.'" method="post" accept-charset="utf-8">';
		$ValRetour .= '<input class = "RECH" type="text" name="'.$pNom.'" value="'.$pRechVal.'" placeholder="'.$pPlaceHolder.'">';
		$ValRetour .= '<input type="submit" name="" value="Rechercher">';
		$ValRetour .= '</form>';
		$ValRetour .= '</article>';
		$ValRetour .= '</section>';
		
		return $ValRetour;
	}

	/**
	 * $pAction : page sur laquelle envoyer les donnees
	 * $inputName : nom donne au groupe de boutons radios
	 * $buttons : tableau de boutons a ajouter
	 */
	public static function rtv_zone_radio_buttons($pAction, $inputName, $buttons){
		$out = '<section>
					<article>
						<form action="'.$pAction.'" method="post" accept-charset="utf-8">
							<label for="all">tout<input type="radio" name="'.$inputName.'" id="all" value="all" checked></label>';
		foreach ($buttons as $key => $value) {
			$out .= '<label for="'.$key.'">'.$value.'<input type="radio" name="'.$inputName.'" id="'.$key.'" value="'.$key.'"></label>';
		}
		$out .= 		'</form>
					</article>
				</section>';

		return $out;
	}
}
?>