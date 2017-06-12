<?php 
	/* normal user *//*
	require_once('../CONTROL/core.php');
	$utilisateurs=Model::load("utilisateurs");
	$utilisateurs->id[0]=$_POST['RECH_FIC'];
	$utilisateurs->read('utilisateur "#", nom "nom", prenom "prenom" , admin "admin" , actif "actif" ');
	echo VIEW::rtv_fiche($utilisateurs);*/

//'utilisateur "Utilisateur", code "Code", nom "Nom" , prenom "Prenom" , admin "Admin" , actif "Actif"'

	/* admin */
	require_once('../CONTROL/core.php');
	$utilisateurs=Model::load("utilisateurs");
	if(isset($_POST['FormFiche'])){
		if($utilisateurs->update($_POST)){
			echo "Modification effectu&eacute;e";
		}
		$_POST['RECH_FIC']=$_POST['#'];
	}
	$utilisateurs->id[0]=$_POST['RECH_FIC'];
	$utilisateurs->read('utilisateur "#", code "Code", nom "Nom" , prenom "Prenom" , admin "Admin" , actif "Actif"');
	echo VIEW::rtv_Fiche_Admin($utilisateurs,"../CONTROL/utilisateurs_fic.php","#");
 ?>