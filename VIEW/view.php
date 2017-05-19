<?php 
class View{
	public static function rtv_Table($pParam,$pNom='',$pColID='', $pAction= ''){
		$out  = "";
		$titre= '<tr>';
		$titre_trt= false;

		foreach($pParam->data as $key => $element){
			$out .= "<tr>";
			$colForm = '';
			foreach($element as $subkey => $subelement){
				if($titre_trt==false){
					$titre .= '<th>'.$subkey.'</th>' ;	
				}

				if ($pColID != '' && $pAction != '' && $subkey == $pColID){
					$colForm .= '<form action="'.$pAction.'" method="post" accept-charset="utf-8">';
					$colForm .= '<input type="hidden" name="RECH_FIC" value="'.$subelement.'" >';
					$colForm .= '<input type="submit" name="" value="Voir">';
					$colForm .= '</form>';
					$colForm = '<td>'.$colForm.'</td>';
				}
				$out .= '<td>'.$subelement.'</td>' ;

			}
			if($titre_trt==false){
				$titre.= '</tr>';
			}
			$titre_trt= true;
			$out .= "</tr>";
			$out .= $colForm."</tr>";
		}
		$out = '<section ID="RESULT_'.$pNom.'"><article><table>'.$titre.$out.'</table></article></section>';
		return $out;
	}
	
	public static function rtv_Fiche($pParam){
		$out  = "";
		foreach($pParam->data as $key => $element){
			foreach($element as $subkey => $subelement){
				$out .= "<tr>";
				$out .= '<th>'.$subkey.'</th>' ;
				$out .= '<td>'.$subelement.'</td>' ;
				$out .= "</tr>";
			}
		}
		$out = '<table>'.$out.'</table>';
		return $out;
	}

	public static  function Rtv_Zone_rech($pAction,$pNom,$pRechVal,$pPlaceHolder){
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
}
?>