<?php
	require_once('../CONTROL/core.php');
	$utilisateurs=Model::load("utilisateurs");
	
	/* admin */
	if(Control::is_admin()) {
		if(isset($_POST['FormFiche'])&&isset($_POST['MODE'])){

			if($_POST['MODE']=="MODIF"){
				if($utilisateurs->update($_POST)){
					echo "Modification effectu&eacute;e";
				}
				$_POST['RECH_FIC']=$_POST['#'];
			}
			else  {
				if($utilisateurs->insert($_POST)){
					echo "Ajout effectu&eacute;";
				}
				require_once('../CONTROL/utilisateurs.php');
			}
		}
		if(isset($_POST['FormFicheAjout'])){
			$_POST['RECH_FIC']='';
			$utilisateurs->data[0]['Code'	]='o';
			$utilisateurs->data[0]['Nom'	]='o';
			$utilisateurs->data[0]['Prenom']='o';
			$utilisateurs->data[0]['Admin'	]='1';
			$utilisateurs->data[0]['Actif'	]='2';
			echo VIEW::rtv_fiche_Admin($utilisateurs,"../CONTROL/utilisateurs_fic.php","#","AJOUT");
		}
		else {
			if(isset($_POST['RECH_FIC'])) {
				$utilisateurs->id[0]=$_POST['RECH_FIC'];
				$utilisateurs->read('utilisateur "#", code "Code", nom "Nom" , prenom "Prenom" , admin "Admin" , actif "Actif"');
				echo VIEW::rtv_Fiche_Admin($utilisateurs,"../CONTROL/utilisateurs_fic.php","#");
			}
		}
	}
	/* normal user */
	else {
		$utilisateurs->id[0]=$_POST['RECH_FIC'];
		$utilisateurs->read('utilisateur "#", nom "nom", prenom "prenom" , admin "admin" , actif "actif" ');
		echo VIEW::rtv_fiche($utilisateurs);
	}
?>