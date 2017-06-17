<?php
	require_once('../CONTROL/core.php');
	$livres=Model::load("livres");

	/* admin */
	if ( isset($_SESSION['USEROBJECT']) && isset($_SESSION['USEROBJECT']->admin) && $_SESSION['USEROBJECT']->admin == '2') {
		if(isset($_POST['FormFiche'])){
			if($livres->update($_POST)){
				echo "Modification effectu&eacute;e";
			}
			$_POST['RECH_FIC']=$_POST['LivreID'];
		}
		$livres->id[0]=$_POST['RECH_FIC'];
		$livres->read('LivreID "#", titre "Titre", auteur "Auteur" , prix_unitaire "Prix" , actif "Actif"');
		echo VIEW::rtv_Fiche_Admin($livres, "../CONTROL/books_fic.php", "#");
	}
	/* normal user */
	else {
		$livres->id[0]=$_POST['RECH_FIC'];
		$livres->read('titre "Titre", auteur "Auteur" , prix_unitaire "Prix" , actif "Actif"');
		echo view::rtv_fiche($livres);
	}
 ?>