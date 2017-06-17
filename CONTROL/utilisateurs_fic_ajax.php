<?php
	require_once('../CONTROL/core.php');
	$utilisateurs=Model::load("utilisateurs");
	
	/* admin */
	if ( isset($_SESSION['USEROBJECT']) && isset($_SESSION['USEROBJECT']->admin) && $_SESSION['USEROBJECT']->admin == '2') {
		if(isset($_POST['FormFiche'])){
			if($utilisateurs->update($_POST)){
				echo "Modification effectu&eacute;e";
			}
			$_POST['RECH_FIC']=$_POST['UtilisateurId'];
		}
		$utilisateurs->id[0]=$_POST['RECH_FIC'];
		$utilisateurs->read('utilisateur "#", code "Code", nom "Nom" , prenom "Prenom" , admin "Admin" , actif "Actif"');
		echo VIEW::rtv_Fiche_Admin($utilisateurs,"../CONTROL/utilisateurs_fic.php","#");
	}
	else {
		$utilisateurs->id[0]=$_POST['RECH_FIC'];
		$utilisateurs->read('nom "nom", prenom "prenom" , admin "admin" , actif "actif" ');
		echo VIEW::rtv_fiche($utilisateurs);
	}
?>